<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\RelaksasiController;
use App\Http\Controllers\PsikologController;


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

Route::get('/homepage', function () {
    return view('homepage.index');
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/profile/edit-nickname', [ProfileController::class, 'editNickname']);
    Route::post('/profile/edit-nickname', [ProfileController::class, 'updateNickname']);
    Route::get('/profile/edit-password', [ProfileController::class, 'editPassword']);
    Route::post('/profile/edit-password', [ProfileController::class, 'updatePassword']);
});

Route::middleware('auth')->group(function () {
    Route::get('/edukasi', [EdukasiController::class, 'index']);
    Route::get('/edukasi/{id}', [EdukasiController::class, 'show']);
});

Route::middleware('auth')->group(function () {
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::post('/chat/send', [ChatController::class, 'send'])->name('chat.send');
});

Route::middleware('auth')->group(function () {
    Route::get('/relaksasi', [RelaksasiController::class, 'index']);
    Route::get('/relaksasi/{id}', [RelaksasiController::class, 'show']);
});

Route::middleware('auth')->group(function () {
    Route::get('/psikolog', [PsikologController::class, 'index']);
    Route::get('/psikolog/{psikolog}', [PsikologController::class, 'show']);

});

Route::get('/tentang', function () {
    return view('tentang.index');
})->middleware('auth');

Route::get('/panduan', function () {
    return view('panduan.index');
})->middleware('auth');
