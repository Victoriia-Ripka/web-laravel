<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DrinksController;
use App\Http\Controllers\PizzasController;

Route::get('/', function () {
    return view('index');
});

Route::get('/pizza',  [PizzasController::class, 'index']);

Route::get('/pizza/{id}',  [MenuItem::class, 'index']);

Route::get('/drinks',  [DrinksController::class, 'index']);

Route::get('/drinks/{id}',  [MenuItem::class, 'index']);

Route::get('/order', [OrderController::class, 'index']);

Route::get('/delivery', function () {
    return view('delivery');
});