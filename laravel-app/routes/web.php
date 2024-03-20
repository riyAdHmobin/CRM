<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HashController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('splashscreen');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/hash', [HashController::class, 'hash']);

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'login']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [AdminController::class, 'dashboard']);
    Route::get('/logout', [AdminController::class, 'logout']);
});
