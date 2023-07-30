<?php

use Emnify\EmnifySdk\Configuration;
use Illuminate\Support\Facades\Route;
use LaravelLatam\Emnify\Http\Controllers\EmnifyController;
Route::get('/emnify', function() {
   return "OK";
});
