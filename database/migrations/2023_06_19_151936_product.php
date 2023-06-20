<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
        Schema::create('products', function (Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('description');
            $table->float('price');
            $table->string('image_url');            
        });

        Schema::create('orders', function (Blueprint $table){ 
            $table->id();           
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->dateTime('date_time');

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('order_items', function (Blueprint $table){            
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::create('product_categories', function (Blueprint $table){
            $table->id();
            $table->string('naziv');
            $table->unsignedBigInteger('parent_id');
            
            $table->foreign('parent_id')->references('id')->on('product_categories'); 
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('products');
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');

    }
};
