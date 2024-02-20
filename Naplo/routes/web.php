<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::view('/', 'felvetel');
Route::get('/felvetel',[AdminController::class, 'Felvetel']);
Route::post('/felvetel',[AdminController::class, 'Hozzaadas']);
