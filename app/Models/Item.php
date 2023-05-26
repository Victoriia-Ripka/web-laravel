<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function waters(){
        $items = Item::where('type', 'waters')->get();
        return $items;
    }

    public function pizzas(){
        $items = Item::where('type', 'pizza')->get();
        return $items;
    }

    public function getWater($id){
        $item = Item::find($id);
        return $item;
    }

    public function getPizza($id){
        $item = Item::find($id);
        return $item;
    }

    public function ordersWithThisItem(){
        return $this->belongsToMany('App\Models\Order');
    }
}

?>