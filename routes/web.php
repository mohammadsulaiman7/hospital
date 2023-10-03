<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SpecialityController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('doctors', DoctorController::class);
    Route::resource('specialities',SpecialityController::class);
    Route::resource('appointments',AppointmentController::class);
    Route::resource('news',NewsController::class);
    // Route::get('/get-values/{selectedValue}',[HomeController::class,'getValue']);

    // Route::post('create-admin',[AdminController::class,'create'])->name('create-admin');
    
    // Route::get('approve',[AppointmentController::class,'approve']);

    // Route::get('view-register',function (){
    //     return view('auth.register');
    //   })->name('view-register');
});
