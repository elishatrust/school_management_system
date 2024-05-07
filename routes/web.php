<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', [AuthController::class, 'index']);
Route::post('login',[AuthController::class, 'login'])->name('login');
Route::get('dashboard', [DashboardController::class, 'index']);


Route::get('admin/admin/list', [AdminController::class, 'list']);





