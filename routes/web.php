<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepanController;

use App\Http\Controllers\SekonController;

Route::get('/', function () {
    return ('Hello World');
});

Route::get('/depan', [DepanController::class, 'index']);

Route::get('/sekon', [SekonController::class, 'index']);