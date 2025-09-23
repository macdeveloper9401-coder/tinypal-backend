<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/didyouknow', [ApiController::class, 'didYouKnow']);
Route::get('/flashcard', [ApiController::class, 'flashCard']);
