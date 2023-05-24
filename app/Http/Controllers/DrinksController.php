<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinksController extends Controller{
    private $listOfDrinks;

    public function __construct()
    {
        $this->listOfDrinks = [
            (object) [
                'id' => '1',
                'name' => 'tea',
                'price' => '3'
            ],
            (object) [
                'id' => '2',
                'name' => 'coca cola',
                'price' => '6'
            ],
            (object) [
                'id' => '3',
                'name' => 'pepsi',
                'price' => '6'
            ],
            (object) [
                'id' => '4',
                'name' => 'nestea',
                'price' => '5'
            ],
        ];
    }

    private function getListOfDrinks(){
        return $this->listOfDrinks;
    }

    public function index(){
        $listOfDrinks = $this->getListOfDrinks();
        return view("drinks", ['listOfDrinks' => $listOfDrinks]);
    }

    public function showDrink($id){
        $listOfDrinks = $this->getListOfDrinks();
        $item = $listOfDrinks[$id-1];
        return view("menuItem", ['item' => $item]);
    }
}

?>