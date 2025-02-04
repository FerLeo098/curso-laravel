<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/signup', [SignupController::class, 'create']);

Route::get('/login', [LoginController::class, 'create']);