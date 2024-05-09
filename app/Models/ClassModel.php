<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ClassModel extends Model
{
    use HasFactory;
    protected $fillable = 'class';
    static public function getClassList()
    {
        return DB::table('class')->where('archive', 0)->orderBy('id', 'desc')->get();
    }
    public static function deleteClass($id)
    {
        DB::table('class')->where(['archive' => 0, 'id' => $id])->update(['archive' => 1]);
    }

    static public function findClass($id)
    {
        return DB::table('class')->where(['archive' => 0, 'id' => $id])->first();
    }
}
