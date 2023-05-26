<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Order extends Model{
    use HasFactory;

    protected $fillable = ['user_id'];

    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }

    public function items(){
        return $this->belongsToMany(Item::class);
    }
}

?>

<!-- ->withPivot('quantity') -->