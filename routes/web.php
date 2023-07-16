<?php

use Illuminate\Support\Facades\Route;
use LaravelLatam\Emnify\Http\Controllers\EmnifyController;

Route::get('/emnify', [EmnifyController::class, 'index']);
