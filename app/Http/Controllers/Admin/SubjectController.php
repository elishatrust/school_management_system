<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
class SubjectController extends Controller
{
    public function list()
    {
        $data = [
            'title' => 'School Management System',
            'header' => 'Subject List'
        ];

        return view('backend.admin.subject.list', compact('data'));
    }

    public function listView()
    {
        $data = SubjectModel::getSubjectList();
        return view('backend.admin.subject.list_view', compact('data'));
    }

    public function add(Request $request){

        try {
            DB::beginTransaction();

            $hidden_id = $request->input('hidden_id');
            $name = $request->input('name');
            $type = $request->input('type');
            $status = $request->input('status1');
            $user_id = Auth::user()->id;

            if(empty($hidden_id)):
                $subjectData = [
                    'name' => $name,
                    'type' => $type,
                    'status' => $status,
                    'created_by' => $user_id,
                    'updated_by' => $user_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                // Save subject data
                DB::table('subjects')->insert($subjectData);
                $message='Subject saved successfully';

            else:

                $subjectData = [
                    'name' => $name,
                    'type' => $type,
                    'status' => $status,
                    'updated_by' => $user_id,
                ];

                $condition=[
                    'id'=>Crypt::decrypt($hidden_id),
                    'archive'=>0
                ];

                ## Save admin data
                DB::table('subjects')->where($condition)->update($subjectData);
                $message='Subject updated successfully';

            endif;

            DB::commit();

            return response()->json(['status' => 200, 'message' => $message]);
        } catch (\Exception $e) {
            DB::rollback();

            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function delete($id)
    {
        try{
            $data = SubjectModel::deleteSubject($id);
            return response()->json(['status' => 200, 'message' =>"Subject deleted successfull"]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data= SubjectModel::findSubject($id);
        echo json_encode(['data'=>$data,'id'=>Crypt::encrypt($id)]);
    }

}
