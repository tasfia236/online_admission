<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'show']);
Route::get('/login',[HomeController::class, 'login']);
Route::post('/user-login',[HomeController::class, 'userLogin']);
Route::get('/register',[HomeController::class, 'register']);
Route::post('/registretion',[HomeController::class, 'UserRegister']);
Route::get('/admin/applicant',[AdminController::class, 'applicant']);

Route::middleware(['checkLogIn'])->group(function () {
    Route::get('/admin/dashboard',[AdminController::class, 'dashboard']);
    Route::get('admin/logout', [HomeController::class, 'logout']);

    Route::get('/admin/form',[AdminController::class, 'form']);
    Route::post('/admin/take',[AdminController::class, 'take']);
    Route::get('/admin/view',[AdminController::class, 'view']);
    Route::get('admin/delete/{id}', [AdminController::class, 'delete']);
    
    Route::middleware(['checkIfSuper'])->group(function () {
        Route::get('/department/create',[DepartmentController::class, 'create']);
        Route::post('/department/store',[DepartmentController::class, 'store']);
        Route::get('/department/all',[DepartmentController::class, 'all'])->name('department.manage');
        Route::post('/department/add',[DepartmentController::class, 'sessionAdd'])->name('session.manage');
        Route::get('/department/status/{id}/{st}',[DepartmentController::class, 'upgrade'])->name('admission.status');
        Route::get('department/edit/{id}', [DepartmentController::class, 'edit']);
        Route::post('department/update/{id}', [DepartmentController::class, 'update']);
        Route::get('department/delete/{id}', [DepartmentController::class, 'delete']);
        
        Route::get('/admin/genarate',[UserController::class, 'pendingUsers']);
        Route::get('/userfilter',[UserController::class, 'userFilter']);
        Route::get('admin/approve-user/{userid}', [UserController::class, 'approveUser']);
        Route::get('admin/delete-user/{userid}', [UserController::class, 'deleteUser']);
        Route::get('/profile/{userid}',[UserController::class, 'profileUser']);
        
    });
    Route::middleware(['checkIfDept'])->group(function () {
        Route::get('/admin/applicant',[AdminController::class, 'applicant']);
        Route::get('/filter',[AdminController::class, 'filter']);
    });
    Route::middleware(['checkIfStu'])->group(function () {
        Route::get('/profile',[UserController::class, 'profile']);
        Route::get('/admitcard',[UserController::class, 'admit']);
    });
});