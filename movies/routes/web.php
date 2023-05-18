<?php

use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvShowsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
// return view('index');
// });

Route::get('/', [MoviesController::class, 'index']);
Route::get('/movies/{id}', [MoviesController::class, 'show']);
Route::get('/movies/{link}/page={page}', [MoviesController::class, 'moviesPaginated']);

Route::get('/actors/page={page}', [ActorsController::class, 'index']);
Route::get('/actors/{id}', [ActorsController::class, 'show']);

Route::get('/tvshows', [TvShowsController::class, 'index']);
Route::get('/tvshows/{id}', [TvShowsController::class, 'show']);
Route::get('/tvshows/{link}/page={page}', [TvShowsController::class, 'tvShowsPaginated']);
