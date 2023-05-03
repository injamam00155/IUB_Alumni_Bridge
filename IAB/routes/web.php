<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\routingController;
use Illuminate\Support\Facades\Route;


Route::get('/', [routingController::class, 'index'])->name('index');
Route::get('/forgotPassword', [routingController::class, 'forgotPassword'])->name('forgotPassword');
Route::get('/signup', [routingController::class, 'signup'])->name('signup');
Route::post('/store', [signupController::class, 'store'])->name('alumni.store');
Route::post('/validate', [loginController::class, 'loginCheck'])->name('validate.acc');

Route::get('/admin/dashboard', [routingController::class, 'adminDashboard'])->name('admin.dash');
Route::get('/current-student/dashboard', [routingController::class, 'currentStudentDashboard'])->name('currentStudent.dash');
Route::get('/alumni/dashboard', [routingController::class, 'alumniDashboard'])->name('alumni.dash');

 