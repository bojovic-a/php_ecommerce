<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    public static function new_order_item($order_id, $product_id){
        $orderItem = new OrderItem();
        $orderItem->order_id = $order_id;
        $orderItem->product_id = $product_id;

        $orderItem->save();

        return $orderItem;
    }
    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
        
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
