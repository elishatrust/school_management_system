<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function list()
    {
        $data = [
            'title' => 'School Management System',
            'header' => 'Admin List'
        ];

        return view('backend.admin.admin.list', compact('data'));
    }

    public function listView()
    {
        $data = AdminModel::getAdminList();
        return view('backend.admin.admin.list_view', compact('data'));
    }

    public function addAdmin(Request $request){

        try {
            DB::beginTransaction();

            $hidden_id = $request->input('hidden_id');
            $fname = $request->input('fname');
            $mname = $request->input('mname');
            $lname = $request->input('lname');
            $gender = $request->input('gender');
            $phone = $request->input('phone');
            $email = $request->input('email');
            $password = $request->input('password');
            $status = $request->input('status1');
            $user_id = Auth::user()->id;
            $role = 1;

            if(empty($hidden_id)):
                $adminData = [
                    'fname' => $fname,
                    'mname' => $mname,
                    'lname' => $lname,
                    'gender' => $gender,
                    'phone' => $phone,
                    'email' => $email,
                    'status' => $status,
                    'role' => $role,
                    'password' => Hash::make($password),
                    'created_by' => $user_id,
                    'updated_by' => $user_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                // Save admin data
                DB::table('users')->insert($adminData);
                $message='Admin saved successfully';

            else:

                $adminData = [
                    'fname' => $fname,
                    'mname' => $mname,
                    'lname' => $lname,
                    'gender' => $gender,
                    'phone' => $phone,
                    'email' => $email,
                    'status' => $status,
                    'updated_by' => $user_id,
                ];

                $condition=[
                    'id'=>Crypt::decrypt($hidden_id),
                    'archive'=>0
                ];

                ## Save admin data
                DB::table('users')->where($condition)->update($adminData);
                $message='Admin updated successfully';

            endif;

            DB::commit();

            return response()->json(['status' => 200, 'message' => $message]);
        } catch (\Exception $e) {
            DB::rollback();

            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function deleteAdmin($id)
    {
        try{
            $data = AdminModel::deleteAdmin($id);
            return response()->json(['status' => 200, 'message' =>"Admin deleted successfull"]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    public function editAdmin($id)
    {
        $data= AdminModel::findAdmin($id);
        echo json_encode(['data'=>$data,'id'=>Crypt::encrypt($id)]);
    }


}
