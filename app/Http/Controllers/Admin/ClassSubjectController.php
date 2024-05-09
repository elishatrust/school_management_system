<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use App\Models\ClassSubjectModel;
use App\Models\SubjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ClassSubjectController extends Controller
{
    public function list()
    {
        $data = [
            'title' => 'School Management System',
            'header' => 'Assigned Subject List'
        ];

        $class = ClassModel::getClassList();
        $subject = SubjectModel::getSubjectList();

        return view('backend.admin.class_subject.list', compact('data','class','subject'));
    }

    public function listView()
    {
        $data = ClassSubjectModel::getClassSubjectList();
        return view('backend.admin.class_subject.list_view', compact('data'));
    }


    public function add(Request $request){

        try {
            DB::beginTransaction();

            $hidden_id = $request->input('hidden_id');
            $class_id = $request->input('class_id');
            $subject_id = $request->input('subject_id');
            $status = $request->input('status1');
            $user_id = Auth::user()->id;


            if(empty($hidden_id)):
                foreach ($subject_id as $subject) {
                    $assignedData = [
                        'class_id' => $class_id,
                        'subject_id' => $subject,
                        'status' => $status,
                        'created_by' => $user_id,
                        'updated_by' => $user_id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];

                    // Save class_subject data
                    DB::table('class_subject')->insert($assignedData);
                    $message='Assigned subject saved successfully';
                }

            else:

                foreach ($subject_id as $subject) {
                    $assignedData = [
                        'class_id' => $class_id,
                        'subject_id' => $subject,
                        'status' => $status,
                        'updated_by' => $user_id,
                    ];

                    $condition=[
                        'id'=>Crypt::decrypt($hidden_id),
                        'archive'=>0
                    ];

                    ## Save class_subject data
                    DB::table('class_subject')->where($condition)->update($assignedData);
                    $message='Assigned subject updated successfully';
                }

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
            $data = ClassSubjectModel::deleteClassSubject($id);
            return response()->json(['status' => 200, 'message' =>"Assigned class deleted successfull"]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data= ClassSubjectModel::findClassSubject($id);
        echo json_encode(['data'=>$data,'id'=>Crypt::encrypt($id)]);
    }

}
