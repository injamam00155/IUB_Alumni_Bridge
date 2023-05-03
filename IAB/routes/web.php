<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/forgotPassword', [indexController::class, 'forgotPassword']);
Route::get('/signup', [indexController::class, 'signup'])->name('signup');
Route::post('/store', [indexController::class, 'store'])->name('alumni.store');
Route::post('/validate', [loginController::class, 'loginCheck'])->name('validate.acc');

Route::get('/admin/dashboard', [indexController::class, 'adminDashboard'])->name('admin.dash');
Route::get('/current-student/dashboard', [indexController::class, 'currentStudentDashboard'])->name('currentStudent.dash');
Route::get('/alumni/dashboard', [indexController::class, 'alumniDashboard'])->name('alumni.dash');

