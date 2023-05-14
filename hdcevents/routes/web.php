<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::apiResource('/events', EventController::class);
Route::get('/', [EventController::class, 'index']);

Route::get('/event/create', [EventController::class, 'create']);
Route::post('/event', [EventController::class, 'store']);

Route::get('/event/edit/{id}', [EventController::class, 'show']);
Route::put('/event/update/{id}', [EventController::class, 'update']);

