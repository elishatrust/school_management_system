<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        $title['title'] = 'Dashboard';
        return view('backend.dashboard', compact('title'));

        // if(Auth::user()->is_admin == 1){
        //     return view('admin.dashboard',$title, $data);

        // }
        // else if(Auth::user()->is_admin == 2){
        //     return view('teacher.dashboard',$title);

        // }else if(Auth::user()->is_admin == 3){
        //     return view('student.dashboard',$title);

        // }else if(Auth::user()->is_admin == 4){
        //     return view('parent.dashboard',$title);
        // }

    }
}
