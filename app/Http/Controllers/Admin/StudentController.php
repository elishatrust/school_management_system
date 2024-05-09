<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use Illuminate\Http\Request;
use App\Models\StudentModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function list()
    {
        $data = [
            'title' => 'School Management System',
            'header' => 'Student List'
        ];

        $class = ClassModel::getClassList();

        return view('backend.admin.student.list', compact('data','class'));
    }

    public function listView()
    {
        $data = StudentModel::getStudentList();
        return view('backend.admin.student.list_view', compact('data'));
    }


    public function add(Request $request){

        try {
            DB::beginTransaction();

            $hidden_id = $request->input('hidden_id');
            $fname = $request->input('fname');
            $mname = $request->input('mname');
            $lname = $request->input('lname');
            $gender = $request->input('gender');
            $phone = $request->input('phone');
            $email = $request->input('email');
            $admission_no = $request->input('admission_no');
            $admission_date = $request->input('admission_date');
            $class_id = $request->input('class_id');
            $religion = $request->input('religion');
            $dob = $request->input('dob');
            $status = $request->input('status1');
            $user_id = Auth::user()->id;
            $role = 3;

            if(empty($hidden_id)):
                $studentData = [
                    'fname' => $fname,
                    'mname' => $mname,
                    'lname' => $lname,
                    'gender' => $gender,
                    'phone' => $phone,
                    'email' => $email,
                    'dob' => $dob,
                    'admission_no' => $admission_no,
                    'admission_date' => $admission_date,
                    'class_id' => $class_id,
                    'religion' => $religion,
                    'status' => $status,
                    'role' => $role,
                    'password' => Hash::make($phone),
                    'created_by' => $user_id,
                    'updated_by' => $user_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                // Save student data
                DB::table('students')->insert($studentData);
                $message='Student saved successfully';

            else:

                $studentData = [
                    'fname' => $fname,
                    'mname' => $mname,
                    'lname' => $lname,
                    'gender' => $gender,
                    'phone' => $phone,
                    'email' => $email,
                    'dob' => $dob,
                    'admission_no' => $admission_no,
                    'admission_date' => $admission_date,
                    'class_id' => $class_id,
                    'religion' => $religion,
                    'status' => $status,
                    'updated_by' => $user_id,
                ];

                $condition=[
                    'id'=>Crypt::decrypt($hidden_id),
                    'archive'=>0
                ];

                ## Save student data
                DB::table('students')->where($condition)->update($studentData);
                $message='Student updated successfully';

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
            $data = StudentModel::deleteStudent($id);
            return response()->json(['status' => 200, 'message' =>"Student deleted successfull"]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data= StudentModel::findStudent($id);
        echo json_encode(['data'=>$data,'id'=>Crypt::encrypt($id)]);
    }


}
