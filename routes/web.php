<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


Route::get('/', function () {
    return view('index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/details', [HomeController::class, 'details'])->name('details');
Route::get('/fetch-data', [ApiController::class, 'fetchData']);