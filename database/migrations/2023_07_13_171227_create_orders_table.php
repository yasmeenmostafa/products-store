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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status')->default(1);
            $table->string('payment_method');
            $table->string('payment_status');
            $table->integer('payment_id');
            $table->decimal('total_price',8,2);
            $table->decimal('shipping_price',8,2);
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('username');
           
            
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
