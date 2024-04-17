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

//órarend
Route::get('/orarend',[NaploController::class, 'Orarend']);

//beállítások
Route::get('/beallitasok',[NaploController::class, 'Beallitasok']);
Route::post('/beallitasok',[NaploController::class, 'BeallitasokPost']);

//profil
Route::get('/profil',[NaploController::class, 'Profil']);
Route::get('/profil/{id}',[AdminController::class,'Profil']);
Route::post('/profil/{id}',[AdminController::class,'ProfilPost']);
Route::get('/visszaallit/{id}',[AdminController::class,'Visszaallit']);
Route::post('/visszaallit/{id}',[AdminController::class,'VisszaallitPost']);

//értékelések
Route::get('/ertekelesek',[NaploController::class, 'Ertekelesek']);
Route::get('/ertekelesek/{osztaly}',[NaploController::class, 'Ertekelesek_osztkiv']);
Route::post('/ertekelesek/{osztaly}',[NaploController::class, 'ErtekelesekPost']);

//hiányzások
Route::get('/hianyzasok',[NaploController::class, 'Hianyzasok']);
Route::get('/hianyzasok/{osztaly}',[NaploController::class, 'Hianyzasok_osztkiv']);
Route::post('/hianyzasok/{osztaly}',[NaploController::class, 'HianyzasokPost']);

//igazolások
Route::get('/igazolasok/{osztaly}',[NaploController::class, 'Igazolasok_osztkiv']);
Route::post('/igazolasok/{osztaly}',[NaploController::class, 'IgazolasokPost']);

