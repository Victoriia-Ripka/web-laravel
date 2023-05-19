<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinksController extends Controller
{
    public function index(){
        $listOfDrinks = array(
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
        );

        return view("drinks", compact('listOfDrinks'));
    }

    // public function addToOrder($id){
    //     $newOrder = [1, 2, 3]
    //     return view("order", compact('newOrder'));
    // }
}
