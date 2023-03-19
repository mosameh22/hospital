<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddDoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\SpecializationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'redirect']);
Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('show',[AddDoctorController::class,'show']);
// Route::get('showspec',[AddDoctorController::class,'showspec']);

Route::post('add_doctor',[AddDoctorController::class,'add_doctor']);
Route::get('index',[SpecializationController::class,'index']);
Route::post('add_specializations',[SpecializationController::class,'add_specializations']);
Route::get('show_doctors',[AddDoctorController::class,'index']);
Route::get('show_doctors_admin',[AddDoctorController::class,'show_doctors_admin']);
Route::post('add_appintment',[AppointmentController::class,'add_appintment']);

Route::get('delete/{id}',[AddDoctorController::class,'delete']);
Route::get('deleteAppo/{id}',[AddDoctorController::class,'deleteAppo']);
Route::get('showAppointments',[AddDoctorController::class,'showAppointments']);
Route::get('selectSpec',[AppointmentController::class,'selectSpec']);
Route::get('showspecialization',[AddDoctorController::class,'showspecialization']);
Route::get('deletespeca/{id}',[AddDoctorController::class,'deletespeca']);
Route::get('edit_doctors/{id}',[AddDoctorController::class,'edit_doctors']);
Route::PUT('update/{id}',[AddDoctorController::class,'update']);
