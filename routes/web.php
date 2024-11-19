<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[LoginController::class,'index']);
Route::post('/checklogin',[UserController::class,'login'])->name('checklogin');
Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('user-register',[UserController::class,'user_register'])->name('user-register');