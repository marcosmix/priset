<?php
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [HomeController::class, 'store']);