<?php

use App\Http\Controllers\CrudController;
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

Route::apiResource('cruds', CrudController::class);

// Route::get('/',[CrudController::class, 'getAll']);
// Route::post('/',[CrudController::class, 'create']);
// Route::put('/{id}',[CrudController::class, 'de']);
// Route::delete('/{id}',[CrudController::class, 'create']);
