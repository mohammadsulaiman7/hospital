<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
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
    Route::get('/', [HomeController::class, 'index']);
    Route::get('home', [HomeController::class, 'redirect'])->name('home');
    Route::get('add_doctor', [AdminController::class, 'addDoctor']);
    Route::resource('doctors', DoctorController::class);
    Route::resource('speciality',SpecialityController::class);
    Route::resource('appointments',AppointmentController::class);
    Route::get('/get-values/{selectedValue}',[HomeController::class,'getValue']);
});
