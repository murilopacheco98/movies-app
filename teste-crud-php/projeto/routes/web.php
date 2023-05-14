<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PessoaController::class, 'index']);
Route::get('/pessoa/create', [PessoaController::class, 'create']);
Route::post('/pessoa/store', [PessoaController::class, 'store']);
Route::delete('/pessoa/delete/{id}', [PessoaController::class, 'destroy']);


