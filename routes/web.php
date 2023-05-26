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

// Route::post('/pizza/{id}',  [DrinksController::class, 'addToOrder']);

Route::get('/waters',  [DrinksController::class, 'index']);

Route::match(['post', 'get'], '/waters/{id}',  [DrinksController::class, 'showDrink']);

// Route::post('/waters/{id}',  [DrinksController::class, 'addToOrder']);

Route::get('/order', [OrderController::class, 'index']);
Route::get('/order/{id}', [OrderController::class, 'indexForOrder']);

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