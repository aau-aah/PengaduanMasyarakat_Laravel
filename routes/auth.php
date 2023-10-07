<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest:petugas,masyarakat'])->group(function () {

    // AuthenticatedSessionController
    Route::controller(AuthenticatedSessionController::class)->group(function () {
        Route::get('login', 'index')
            ->name('login');
        Route::post('login', 'store');
    });
});

Route::middleware('auth:masyarakat,petugas')->group(function () {

    // RegisteredUserController
    // Route::controller(RegisteredUserController::class)->group(function () {
    //     Route::get('/register-petugas', 'registerPetugas')
    //         ->middleware('only-admin')
    //         ->name('register-petugas');
    //     Route::post('/register-petugas', 'storePetugas')
    //         ->middleware('only-admin');

    //     Route::get('/register-masyarakat', 'registerMasyarakat')
    //         ->middleware('only-admin')
    //         ->name('register');
    //     Route::post('/register-masyarakat', 'storeMasyarakat')
    //         ->middleware('only-admin');
    // });

    Route::post('logout-session', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
Route::controller(RegisteredUserController::class)->group(function () {
    Route::get('/register-petugas', 'registerPetugas')
        ->name('register-petugas');
    Route::post('/register-petugas', 'storePetugas');


    Route::get('/register-masyarakat', 'registerMasyarakat')
        ->name('register');
    Route::post('/register-masyarakat', 'storeMasyarakat');
});
