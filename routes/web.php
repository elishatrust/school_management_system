<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\ClassSubjectController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



## Authentication
Route::get('/', [AuthController::class, 'index']);
Route::post('login',[AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout']);
Route::get('user/profile', [AuthController::class, 'profile']);
Route::get('dashboard', [DashboardController::class, 'index']);


## Backend
// Route::group(['middleware'=>'admin'], function () {


    ## Admin
    Route::get('admin/admin/list', [AdminController::class, 'list']);
    Route::get('admin/admin/list_view', [AdminController::class, 'listView']);
    Route::post('admin/admin/add_admin', [AdminController::class, 'addAdmin']);
    Route::get('admin/admin/delete_admin/{id}', [AdminController::class, 'deleteAdmin']);
    Route::get('admin/admin/edit_admin/{id}', [AdminController::class, 'editAdmin']);

    ## Student
    Route::get('admin/student/list', [StudentController::class, 'list']);
    Route::get('admin/student/list_view', [StudentController::class, 'listView']);
    Route::post('admin/student/add', [StudentController::class, 'add']);
    Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);
    Route::get('admin/student/delete/{id}', [StudentController::class, 'delete']);


    ## Class
    Route::get('admin/class/list', [ClassController::class, 'list']);
    Route::get('admin/class/list_view', [ClassController::class, 'listView']);
    Route::post('admin/class/add', [ClassController::class, 'add']);
    Route::get('admin/class/delete/{id}', [ClassController::class, 'delete']);
    Route::get('admin/class/edit/{id}', [ClassController::class, 'edit']);

    ## Subject
    Route::get('admin/subject/list', [SubjectController::class, 'list']);
    Route::get('admin/subject/list_view', [SubjectController::class, 'listView']);
    Route::post('admin/subject/add', [SubjectController::class, 'add']);
    Route::get('admin/subject/delete/{id}', [SubjectController::class, 'delete']);
    Route::get('admin/subject/edit/{id}', [SubjectController::class, 'edit']);

    ## Assign Subject
    Route::get('admin/class_subject/list', [ClassSubjectController::class, 'list']);
    Route::get('admin/class_subject/list_view', [ClassSubjectController::class, 'listView']);
    Route::post('admin/class_subject/add', [ClassSubjectController::class, 'add']);
    Route::get('admin/class_subject/delete/{id}', [ClassSubjectController::class, 'delete']);
    Route::get('admin/class_subject/edit/{id}', [ClassSubjectController::class, 'edit']);


// });







