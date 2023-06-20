<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SeedProductCategories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('product_categories')->insert([
        //     'naziv' => "Men's Clothes",
            
        // ]);

        // DB::table('product_categories')->insert([
        //     'naziv' => "Women's Clothes",
            
        // ]);
        DB::table('product_categories')->insert([
            'naziv' => "Shirts",
            'parent_id' => '1',            
        ]);
        DB::table('product_categories')->insert([
            'naziv' => "Trousers",
            'parent_id' => '1',            
        ]);
        DB::table('product_categories')->insert([
            'naziv' => "Suits",
            'parent_id' => '1',            
        ]);
        DB::table('product_categories')->insert([
            'naziv' => "Dresses",
            'parent_id' => '2',            
        ]);
        DB::table('product_categories')->insert([
            'naziv' => "Skirts",
            'parent_id' => '2',            
        ]);
        DB::table('product_categories')->insert([
            'naziv' => "Shirts",
            'parent_id' => '2',            
        ]);
    }
}
