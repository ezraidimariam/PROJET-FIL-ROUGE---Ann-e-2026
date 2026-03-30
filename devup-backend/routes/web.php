<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\LevelController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('challenges', ChallengeController::class);
    Route::resource('levels', LevelController::class);
});

require __DIR__.'/auth.php';
