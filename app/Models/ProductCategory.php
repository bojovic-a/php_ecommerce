<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
        
    public function products(){
        return $this->hasMany(Product::class);
    }
    public static function top_level_categories(){
        $tlc = ProductCategory::whereNull('parent_id')->get();
        return $tlc;    
    }
    public function product_subcategories(){
        $categories = $this->where('parent_id', '=', $this->id)->get();
        return $categories;
    }
}
