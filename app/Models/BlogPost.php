<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    public function category(){
        $this->belongsTo(BlogCategory::class);
    }
    public static function add(){
        
    }
}
