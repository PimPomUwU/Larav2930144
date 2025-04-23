<?php

use App\Http\Controllers\ClaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('sumar/{numerito1}/{numerito2}', [ClaseController::class,'suma']);
Route::get('cuadraticar/{numerito1}/{numerito2}/{numerito3}', [ClaseController::class,'cuadratica']);
Route::get('amigos/{numerito1}&{numerito2}', [ClaseController::class,'sonamigos']);
Route::get('/c', function () {
    return view('cuadraticar');
});