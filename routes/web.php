<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('login',[HomeController::class,'login']);



//---tests----
Route::get('logintest',[HomeController::class,'testLoginCiudadano']);
Route::get('/cuil',[HomeController::class,'testCUIL']);

Route::post('/cuil/guardar', [HomeController::class, 'store']);


