<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ClassSubjectModel extends Model
{
    use HasFactory;
    protected $table = 'class_subject';

    static public function getClassSubjectList()
    {
        // return self::select('class_subject.*', 'class.name as class_name','subjects.name as subject_name','users.name as created_by_name')
        //     ->join('class', 'class.id','=','class_subject.class_id')
        //     ->join('subjects', 'subjects.id','=','class_subject.subject_id')
        //     ->join('users', 'users.id','=','class_subject.created_by')
        //     ->where('class_subject.archive','=','0')
        //     ->orderBy('class_subject.id','desc')
        //     ->get();
        return DB::table('class_subject')->where('archive', 0)->orderBy('id', 'desc')->get();
    }
    public static function deleteClassSubject($id)
    {
        DB::table('class_subject')->where(['archive' => 0, 'id' => $id])->update(['archive' => 1]);
    }

    static public function findClassSubject($id)
    {
        return DB::table('class_subject')->where(['archive' => 0, 'id' => $id])->first();
    }
}
