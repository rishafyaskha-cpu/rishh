<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, 'profile']);

Route::get('/profile', [ProfileController::class, 'profile']);
