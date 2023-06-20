<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryHasProducts extends Model
{
    use HasFactory;

    public function get_products(){
        return $this->hasMany(Product::class);
    }    

    public function products(){
        
        $p = Product::where('id', '=', $this->product_id)->get();
        return $p;
    }
}
