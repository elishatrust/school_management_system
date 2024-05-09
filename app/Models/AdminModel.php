<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminModel extends Model
{
    use HasFactory;
    protected $fillable = 'users';

    static public function getAdminList()
    {

        // $return = AdminModel::select('users.*')
        //         // ->join('user_roles','user_roles.id','users.created_by')
        //         ->where('users.archive','=','0')
        //         ->where('users.status','=','0')
        //         ->orderBy('users.id', 'desc')
        //         ->get();

        //     return $return;


        return DB::table('users')->where('archive', 0)->where('role', 1)->orderBy('id', 'desc')->get();
    }
    public static function deleteAdmin($id)
    {
        DB::table('users')->where(['archive' => 0, 'id' => $id])->update(['archive' => 1]);
    }

    static public function findAdmin($id)
    {
        return DB::table('users')->where(['archive' => 0, 'id' => $id])->first();
    }

}
