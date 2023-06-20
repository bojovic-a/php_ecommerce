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
        //

        Schema::create('blog_categories', function(Blueprint $table){            
            $table->id();
            $table->timestamps();
            $table->string('category_title');
            $table->string('category_description');            
        });

        Schema::create('blog_posts', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('content');
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('author_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('blog_categories');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('blog_posts');
        Schema::dropIfExists('blog_categories');
    }
};