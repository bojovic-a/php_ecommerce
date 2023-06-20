<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    public function orders(){
        return $this->hasMany(Order::class);
    }
    // public function ordered_products(){
    //     return $this->hasMany(OrderItem::class);
    // }
    public function posts(){
        return $this->hasMany(BlogPost::class);
    }
    public function posted_products(){
        return $this->hasMany(Product::class);
    }
}
