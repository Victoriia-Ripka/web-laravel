<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzasController extends Controller
{
    public function index(){
        $listOPizzas = array(
            (object) [
                'id' => '1',
                'name' => 'papperoni',
                'price' => '15'
            ],
            (object) [
                'id' => '2',
                'name' => 'margarita',
                'price' => '15'
            ],
            (object) [
                'id' => '3',
                'name' => '4 cheeses',
                'price' => '20'
            ],
        );

        return view("pizza", compact('listOPizzas'));
    }
}
