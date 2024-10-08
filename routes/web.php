<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[HomeController::class,'index'] );
Route::get('/login',[HomeController::class,'showLogin'] )->name('login.form');
Route::get('/signup',[HomeController::class,'showRegister'] );
Route::post('/register/user',[AuthController::class,'onRegister'] );
Route::post('/login/user',[AuthController::class,'onLogin'] );
Route::get('/logout',[AuthController::class,'logout'] );
Route::post('/tablebook',[HomeController::class,'store'] );

