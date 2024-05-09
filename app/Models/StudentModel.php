<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StudentModel extends Model
{
    use HasFactory;
    protected $fillable = 'students';
    static public function getStudentList()
    {
        return DB::table('students')->where('archive', 0)->orderBy('id', 'desc')->get();
    }
    public static function deleteStudent($id)
    {
        DB::table('students')->where(['archive' => 0, 'id' => $id])->update(['archive' => 1]);
    }

    static public function findStudent($id)
    {
        return DB::table('students')->where(['archive' => 0, 'id' => $id])->first();
    }
}
