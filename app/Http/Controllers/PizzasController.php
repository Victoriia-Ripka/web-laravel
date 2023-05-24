<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class PizzasController extends Controller{ 

    public function index(){
        $pizzas = Item::pizzas();
        return view("pizza", ['listOPizzas' => $pizzas]);
    }

    public function showPizza($id){
        $pizza = Item::getPizza($id);
        return view("menuItem", ['item' => $pizza]);
    }
}

?>