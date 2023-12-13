<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SalwaController;

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



Route::get('/salwa',[SalwaController::class, 'index']);
Route::get('/salwa',[SalwaController::class, 'index']);
Route::get('/salwa/create',[SalwaController::class, 'create']);
Route::post('/salwa/store',[SalwaController::class, 'store']);
Route::get('/salwa/{id}/edit',[SalwaController::class, 'edit']);
Route::put('/salwa/{id}',[SalwaController::class, 'update']);
Route::delete('/salwa/{id}',[SalwaController::class, 'destroy']);