<?php

use App\Http\Controllers\Api\V1\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){
    Route::post('/book', [BookController::class, 'store']);
    Route::get('/books', [BookController::class, 'index']);
});