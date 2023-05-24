<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DrinksController;
use App\Http\Controllers\PizzasController;
use App\Models\Customer;

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

Route::get('/user', function () {
    return view('user');
});

Route::post('/user', function (Request $request) {
    $user = Customer::createCustomer($request);
    return redirect('pizza')->with('message', 'registration done successfully ');
});