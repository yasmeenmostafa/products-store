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
        Schema::create('product_color_sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->integer('status')->default(1);
            $table->decimal('discount',8,2)->nullable();
            $table->decimal('price',8,2)->nullable();
            $table->string("product_size");
            $table->string("product_color");
            $table->integer('product_id')->unsigned();
            $table->foreign("product_id")->references('id')->on('products')->cascadeOnDelete()->cascadeOnUpdate();
           
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_color_sizes');
    }
};
