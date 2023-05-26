<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone'];

    public function createCustomer(Request $request){
        $data = $request->only(['name', 'phone']);
        $user = Customer::create($data);

        setcookie("id", $user->id, time() + 86400, "/");
        return response()->json(['message' => 'User created successfully', 'user' => $user]);
    }

    public function orders(){
        return $this->hasMany('App\Models\Order');
    }

}

?>