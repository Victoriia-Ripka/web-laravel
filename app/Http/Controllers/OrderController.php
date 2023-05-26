<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

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

    public function store(Request $request){

        // insert into orders table
        $customer_id = $_COOKIE["id"] ?? null;
        $order = Order::create(['customer_id']);

        // insert into order_product table
        // foreach()
    }

}

?>

<!-- use Gloudemans\Shoppingcart\Facades\Cart; -->

<!-- Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/{product}', 'CartController@store')->name('cart.store');
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store'); -->