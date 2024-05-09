<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SubjectModel extends Model
{
    use HasFactory;
    protected $fillable = 'subjects';

    static public function getSubjectList()
    {
        return DB::table('subjects')->where('archive', 0)->orderBy('id', 'desc')->get();
    }
    public static function deleteSubject($id)
    {
        DB::table('subjects')->where(['archive' => 0, 'id' => $id])->update(['archive' => 1]);
    }

    static public function findSubject($id)
    {
        return DB::table('subjects')->where(['archive' => 0, 'id' => $id])->first();
    }

}
