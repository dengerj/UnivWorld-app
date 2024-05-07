<?php

use App\Http\Controllers\University\Auth\AuthenticatedSessionController;
use App\Http\Controllers\University\Auth\RegisteredUserController;
use App\Http\Controllers\University\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:university')->prefix('university')->name('university.')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);



});

Route::middleware('auth:university',)->prefix('university')->name('university.')->group(function () {
    Route::get('/dashboard', function () {
        return view('university.dashboard');
    })->middleware('verified')->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('universities', ProfileController::class);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
