<?php

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/forgotPassword', [indexController::class, 'forgotPassword']);
Route::get('/signup', [indexController::class, 'signup'])->name('signup');
Route::post('/store', [indexController::class, 'store'])->name('alumni.store');
Route::post('/validate', [loginController::class, 'validate'])->name('validate.acc');

Route::get('/admin/dashboard', [loginController::class, 'adminDashboard'])->name('admin.dash');
Route::get('/current-student/dashboard', [loginController::class, 'currentStudentDashboard'])->name('currStudent.dash');
Route::get('/alumni/dashboard', [loginController::class, 'alumniDashboard'])->name('alumni.dash');

