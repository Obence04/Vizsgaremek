<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NaploController;

Route::view('/belepes',[NaploController::class, 'Belepes']);
Route::post('/belepes',[NaploController::class, 'BelepesPost']);

Route::get('/kilepes',[NaploController::class, 'Kilepes']);

Route::get('/',[NaploController::class, 'Fooldal']);

Route::get('/felvetel',[AdminController::class, 'Felvetel']);
Route::post('/felvetel',[AdminController::class, 'FelvetelPost']);
