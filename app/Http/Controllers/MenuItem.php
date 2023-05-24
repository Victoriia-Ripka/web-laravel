<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuItem extends Controller
{
    public function index(){
        $order = ["pizza paparazzi", "coca cola", "ketchup"];
        // $order = [];
        return view("menuItem", compact('order'));
    }
}

?>