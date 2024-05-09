<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ClassController extends Controller
{
    public function list()
    {
        $data = [
            'title' => 'School Management System',
            'header' => 'Class List'
        ];

        return view('backend.admin.class.list', compact('data'));
    }

    public function listView()
    {
        $data = ClassModel::getClassList();
        return view('backend.admin.class.list_view', compact('data'));
    }

    public function add(Request $request){

        try {
            DB::beginTransaction();

            $hidden_id = $request->input('hidden_id');
            $name = $request->input('name');
            $status = $request->input('status1');
            $user_id = Auth::user()->id;

            if(empty($hidden_id)):
                $classData = [
                    'name' => $name,
                    'status' => $status,
                    'created_by' => $user_id,
                    'updated_by' => $user_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                // Save class data
                DB::table('class')->insert($classData);
                $message='Class saved successfully';

            else:

                $classData = [
                    'name' => $name,
                    'status' => $status,
                    'updated_by' => $user_id,
                ];

                $condition=[
                    'id'=>Crypt::decrypt($hidden_id),
                    'archive'=>0
                ];

                ## Save admin data
                DB::table('class')->where($condition)->update($classData);
                $message='Class updated successfully';

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
            $data = ClassModel::deleteClass($id);
            return response()->json(['status' => 200, 'message' =>"Admin deleted successfull"]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data= ClassModel::findClass($id);
        echo json_encode(['data'=>$data,'id'=>Crypt::encrypt($id)]);
    }

}
