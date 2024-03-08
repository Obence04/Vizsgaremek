<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NaploController;

Route::view('/belepes',[NaploController::class, 'belepes']);
Route::view('/', 'felvetel');
Route::get('/felvetel',[AdminController::class, 'Felvetel']);
Route::post('/felvetel',[AdminController::class, 'Hozzaadas']);
