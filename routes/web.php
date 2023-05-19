<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('index');
});

Route::get('/pizza', function () {
    return view('pizza');
});

Route::get('/drinks', function () {
    return view('drinks');
});

Route::get('/order', [OrderController::class, 'index']);

Route::get('/delivery', function () {
    return view('delivery');
});