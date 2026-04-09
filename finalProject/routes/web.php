<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ScoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "working";
});

Route::view('/', 'home');
//Route::view('/info', 'info'); <- Implement if time

//Game pages
//Route::get('/game', ...)

//Authentication: Registration
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

//Authentication: Login/logout
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::get('login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/score', [ScoreController::class, 'incrementScoreByOne']);
