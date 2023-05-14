<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
// return view('index');
// });

Route::get('/', [MovieController::class, 'index']);

Route::get('/movie/{id}', [MovieController::class, 'show']);

// Route::get('/movie', function () {
//     return view('show');
// });
