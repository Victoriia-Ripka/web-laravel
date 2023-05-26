<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\OrderProduct;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $user_id = $_COOKIE["id"];
        $user = Customer::find($user_id);
        $order = $user->orders;
        return view("order", ['order' => $order]);
    }

    public function indexForOrder($id){
        if(isset($_COOKIE["id"])){
            $user_id = $_COOKIE["id"];
            $user = Customer::find($user_id);
            $order = $user->orders;

            $items = DB::table('orders')
                ->join('order_products', 'order_products.order_id', '=', 'orders.id')->where('order_id', 'like', "%$id%")
                ->join('items', 'items.id', '=', 'order_products.item_id')
                ->select("order_products.quantity", "items.name", "items.price")
                ->get();
            return view("OrderInformation", ['order' => $order, 'items' => $items]);
        }
        return view("error");
        
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