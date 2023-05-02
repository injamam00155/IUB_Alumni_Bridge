<?php

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [indexController::class, 'index']);
Route::get('/forgotPassword', [indexController::class, 'forgotPassword']);
Route::get('/signup', [indexController::class, 'signup']);
