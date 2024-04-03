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

    Route::group(['prefix' => 'leads'], function(){
        Route::get('/add-lead', [AdminController::class, 'add_lead']);
        Route::post('/add-lead', [AdminController::class, 'add_lead']);

        Route::get('/manage-leads', [AdminController::class, 'manage_leads']);

        Route::get('/view-lead/{id}', [AdminController::class, 'view_lead']);
        Route::get('/edit-lead/{id}', [AdminController::class, 'edit_lead']);
        Route::post('/edit-lead/{id}', [AdminController::class, 'edit_lead']);
        Route::get('/delete-lead/{id}', [AdminController::class, 'delete_lead']);
    });

});
