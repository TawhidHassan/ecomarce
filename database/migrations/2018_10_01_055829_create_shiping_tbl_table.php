<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipingTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shiping_tbl', function (Blueprint $table) {
            $table->increments('shiping_id');
            $table->string('siping_email');
            $table->string('siping_name');
            $table->string('siping_address');
            $table->string('siping_city');
            $table->string('siping_zip');
            $table->string('siping_mobile');
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
        Schema::dropIfExists('shiping_tbl');
    }
}
