<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DrinksController extends Controller{
    
    public function index(){
        $waters = Item::waters();
        return view("drinks", ['listOfDrinks' => $waters]);
    }

    public function showDrink($id){
        $waters = Item::getWater($id);
        return view("menuItem", ['item' => $waters]);
    }
}

?>