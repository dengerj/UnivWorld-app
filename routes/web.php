<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\University\UniversityController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectorController;


Route::get('/users', [ProfileController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [ProfileController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [ProfileController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [ProfileController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [ProfileController::class, 'destroy'])->name('users.destroy');

// University
Route::get('/universities', [UniversityController::class, 'index'])->name('universities.index');
Route::post('/universities', [UniversityController::class, 'store'])->name('universities.store');
Route::get('/universities/{id}', 'UniversityController@show')->name('university.dashboard');
Route::get('/universities/{id}', [UniversityController::class, 'show'])->name('universities.show');
Route::get('/universities/{id}/edit', [UniversityController::class, 'edit'])->name('universities.edit');
Route::patch('/universities/{id}', [UniversityController::class, 'update'])->name('universities.update');
Route::delete('/universities/{id}', [UniversityController::class, 'destroy'])->name('universities.destroy');
// Route pour obtenir les universités par sector_id
Route::get('/universities/sector/{sector_id}', [UniversityController::class, 'getBySectorId'])->name('universities.getBySectorId');

// Sector
Route::get('/sectors', [SectorController::class, 'index'])->name('sectors.index');
Route::post('/sectors', [SectorController::class, 'store'])->name('sectors.store');
Route::get('/sectors/{id}', [SectorController::class, 'show'])->name('sectors.show');
Route::put('/sectors/{id}', [SectorController::class, 'update'])->name('sectors.update');
Route::delete('/sectors/{id}', [SectorController::class, 'destroy'])->name('sectors.destroy');
    
// Comment
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{id}', [CommentController::class, 'show'])->name('comments.show');
Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
// Route pour obtenir les commentaires par user_id
Route::get('/comments/user/{user_id}', [CommentController::class, 'getByUserId'])->name('comments.getByUserId');
// Route pour obtenir les commentaires par university_id
Route::get('/comments/university/{university_id}', [CommentController::class, 'getByUniversityId'])->name('comments.getByUniversityId');

// Autres routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [SectorController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/sector', [SectorController::class, 'index'])->middleware(['auth', 'verified'])->name('sector');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Fichiers de routage pour l'authentification
require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
require __DIR__.'/university-auth.php';

