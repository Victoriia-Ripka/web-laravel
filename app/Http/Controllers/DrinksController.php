<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;

class DrinksController extends Controller{
    
    public function index(){
        $waters = Item::waters();
        return view("drinks", ['listOfDrinks' => $waters]);
    }

    public function showDrink($id){
        $waters = Item::getWater($id);
        return view("menuItem", ['item' => $waters]);
    }

    public function addToOrder($id){
        // Create a new order for the customer
        $order = new Order();
        $order->user_id = $_COOKIE["id"];
        $order->save();

        $waters = Item::addItemToOrder($id);
        return redirect('order');            
    }
        
}

?>