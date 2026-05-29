<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/profile', [ProfileController::class, 'getProfile']);

    Route::post('/profile/update', [ProfileController::class, 'updateProfile']);

});