<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use App\Models\Customer;
use App\Models\OrderProduct;

class DrinksController extends Controller{
    
    public function index(){
        $waters = Item::waters();
        return view("drinks", ['listOfDrinks' => $waters]);
    }

    public function showDrink($id){
        $waters = Item::getWater($id);
        return view("menuItem", ['item' => $waters]);
    }

    public function addToOrder(Request $request){
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
       
        if(isset($_COOKIE["id"])){
            $user = Customer::find($_COOKIE["id"]);
            $previous_order = $user->orders();

            if ($previous_order->count() > 0) {
                $orderId = $previous_order->first()->id;
            } else {
                $order = new Order();
                $order->customer_id = $_COOKIE["id"];
                $order->save();
                $orderId = $order->id;
            }

            $cartItem = new OrderProduct();
            $cartItem->item_id = $productId;
            $cartItem->quantity = $quantity;
            $cartItem->order_id = $orderId;
            $cartItem->save();
        } else {
            return redirect('user')->with('message', 'you have been registere to make an order');
        }

        return redirect('order');            
    }
}

?>