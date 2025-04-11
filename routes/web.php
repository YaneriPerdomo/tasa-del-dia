<?php

use App\Http\Controllers\calculatorController;
use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', [mainController::class , 'index']);
Route::get('/principal', [mainController::class , 'index']);
