<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details_tbl', function (Blueprint $table) {
            $table->increments('order_details_id');
            $table->integer('order_id');
            $table->integer('product_id');
            $table->string('product_name');
            $table->string('products_price');
            $table->string('products_sels_quntity');
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
        Schema::dropIfExists('order_details_tbl');
    }
}
