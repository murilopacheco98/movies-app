<?php

use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [UserController::class, 'login']);

Route::post('/register', [UserController::class, 'register']);

// List artigos
Route::get('/artigos', [ArtigoController::class, 'index']);

// List single artigo
Route::get('/artigo/{id}', [ArtigoController::class, 'show']);

// Create new artigo
Route::post('/artigo', [ArtigoController::class, 'store']);

// Update artigo
Route::put('/artigo/{id}', [ArtigoController::class, 'update']);

// Delete artigo
Route::delete('/artigo/{id}', [ArtigoController::class,'destroy']);
