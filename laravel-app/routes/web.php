<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HashController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hash', [HashController::class, 'hash']);

Route::get('/login', [AdminController::class, 'login']);
Route::post('/login', [AdminController::class, 'login']);

Route::get('/home', [AdminController::class, 'dashboard']);
