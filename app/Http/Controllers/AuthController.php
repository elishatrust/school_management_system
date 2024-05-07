<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            $user = Auth::user();

            // if ($user->role == 1) {
                return redirect('/dashboard');
            // }
            // else if ($user->role == 2) {
            //     return redirect('/dashboard');
            // }
            // else if ($user->role == 3) {
            //     return redirect('/dashboard');
            // } else if ($user->role == 4) {
            //     return redirect('/dashboard');
            // } else if ($user->role == 5) {
            //     return redirect('/dashboard');
            // } else if ($user->role == 6) {
            //     return redirect('/dashboard');
            // }
            // else {
            //     return redirect('/login');
            // }
        }

        return back()->withErrors(['error' => 'Incorrect username or password']);
    }
}
