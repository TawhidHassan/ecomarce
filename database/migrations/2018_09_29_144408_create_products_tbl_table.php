<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_tbl', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('manufactur_id');
            $table->integer('category_id');
            $table->string('product_name');
            $table->longText('products_sort_description');
            $table->longText('products_long_description');
            $table->float('products_price');
            $table->string('products_image');
            $table->string('products_size');
            $table->string('products_color');
            $table->integer('products_pulic_statas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_tbl');
    }
}
