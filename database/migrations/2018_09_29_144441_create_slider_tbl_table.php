<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_tbl', function (Blueprint $table) {
             $table->increments('slider_id');
            $table->string('slider_image');
            $table->string('slider_titel');
            $table->string('slider_fulldetails');
            $table->integer('slider_public_statas');
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
        Schema::dropIfExists('slider_tbl');
    }
}
