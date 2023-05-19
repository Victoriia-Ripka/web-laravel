<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinksController extends Controller
{
    public function index(){
        $listOfDrinks = [1, 2, 3]
        return view("order", compact('listOfDrinks'));
    }

    public function addToOrder($id){
        $newOrder = [1, 2, 3]
        return view("order", compact('newOrder'));
    }
}
