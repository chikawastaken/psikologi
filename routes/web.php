<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\RelaksasiController;
use App\Http\Controllers\PsikologController;


//LOGIN REGISTER
Route::get('/', fn () => redirect("/login"));

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth');

Route::get('/success', function () {
    return 'Login kamu berhasilll, celamatt!!';
})->middleware('auth');

//HOMEPAGE
Route::get('/homepage', function () {
    return 'HOMPAGE: Selamat datang di Edukasi Kesehatan Mental Gen Z';
})->middleware('auth');

//Edukasi Page
Route::middleware('auth')->group(function () {
    Route::get('/edukasi', [EdukasiController::class, 'index']);
    Route::get('/edukasi/{id}', [EdukasiController::class, 'show']);
});

// CHAT WRAPPER
Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
Route::post('/chat/send', [ChatController::class, 'send'])->name('chat.send');

//Relaksasi Page
Route::middleware('auth')->group(function () {
    Route::get('/relaksasi', [RelaksasiController::class, 'index']);
    Route::get('/relaksasi/{id}', [RelaksasiController::class, 'show']);
});

//Psikolog Page
Route::middleware('auth')->group(function () {
    Route::get('/psikolog', [PsikologController::class, 'index']);
    Route::get('/psikolog/{id}', [PsikologController::class, 'show']);
    Route::get('/psikolog/detail/{id}', [PsikologController::class, 'show'])->name('psikolog.detail');
});

// Route::get('/psikolog/detail/{id}', [PsikologController::class, 'detail'])->name('psikolog.detail');