<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('food_name');
            $table->foreign('food_name')->references('food_name')->on('foods');
            $table->string('order_category');
            $table->foreign('order_category')->references('order_type')->on('ordercategorgies');
            $table->integer('quantity');
            $table->integer('price');
            $table->string('delivery_time');
            $table->enum('payment_status',['not paid','paid']);
            $table->string('reciept_number');
            $table->enum('delivery_status',['waiting','delivered']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
