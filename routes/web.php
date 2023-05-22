<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DrinksController;
use App\Http\Controllers\PizzasController;

Route::get('/', function () {
    return view('index');
});

Route::get('/pizza',  [PizzasController::class, 'index']);

Route::get('/pizza/{id}',  [PizzasController::class, 'showPizza']);

Route::post('/pizza/{id}',  [PizzasController::class, 'addToOrder']);

Route::get('/drinks',  [DrinksController::class, 'index']);

Route::get('/drinks/{id}',  [DrinksController::class, 'showDrink']);

Route::post('/drinks/{id}',  [DrinksController::class, 'addToOrder']);

Route::get('/order', [OrderController::class, 'index']);

Route::get('/delivery', function () {
    return view('delivery');
});