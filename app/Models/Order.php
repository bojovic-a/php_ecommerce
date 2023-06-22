<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    public static function new_cart($user_id){
        $cart = new Order();
        $cart->user_id = $user_id;        
        $cart->status = 'cart';
        $cart->save();

        return $cart;
    }
    public function order_items() {
        return $this->hasMany(OrderItem::class);
    }
    public function user(){
        $this->belongsTo(User::class);
    }
    public static function get_current_user_order($user_id){
        $order = Order::where([
            ['user_id', '=', $user_id],
            ['status', '=', 'cart']
            ])->first();

        return $order;
    }
}
