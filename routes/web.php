<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
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

Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/create', [CarController::class, 'create']);
Route::post('/cars', [CarController::class, 'store']);
Route::get('/cars/{car}', [CarController::class, 'show']);
Route::get('/cars/{car}/edit', [CarController::class, 'edit']);
Route::put('/cars/{car}', [CarController::class, 'update']);

Route::delete('/cars/{car}', [CarController::class, 'destroy']);

