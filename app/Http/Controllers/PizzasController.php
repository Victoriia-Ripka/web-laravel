<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class PizzasController extends Controller{ 
    private $listOPizzas;

    public function __construct(){
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
        $pizzas = Item::pizzas();
        // $listOPizzas = $this->getListOfPizzas();
        return view("pizza", ['listOPizzas' => $pizzas]);
    }

    public function showPizza($id){
        $pizzas = Item::all();
        // $listOPizzas = $this->getListOfPizzas();
        $item = $pizzas[$id-1];
        return view("menuItem", ['item' => $item]);
    }
}

?>