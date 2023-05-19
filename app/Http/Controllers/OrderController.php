<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $order = ["pizza paparazzi", "coca cola", "ketchup"];
        // $order = [];
        return view("order", compact('order'));
    }

    // public function deleteFromOrder($id){
    //     $newOrder = [1, 2, 3]
    //     return view("order", compact('newOrder'));
    // }
}
