<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzasController extends Controller{ 
    private $listOPizzas;

    public function __construct()
    {
        $this->listOPizzas = [
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
        ];
    }

    private function getListOfPizzas(){
        return $this->listOPizzas;
    }    

    public function index(){
        $listOPizzas = $this->getListOfPizzas();
        return view("pizza", ['listOPizzas' => $listOPizzas]);
    }

    public function showPizza($id){
        $listOPizzas = $this->getListOfPizzas();
        $item = $listOPizzas[$id-1];
        return view("menuItem", ['item' => $item]);
    }
}
