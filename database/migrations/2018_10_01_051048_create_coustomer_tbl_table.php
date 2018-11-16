<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoustomerTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coustomer_tbl', function (Blueprint $table) {
            $table->increments('coustomer_id');
            $table->string('coustomer_name');
            $table->string('coustomer_email');
            $table->string('coustomer_number');
            $table->string('coustomer_password');
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
        Schema::dropIfExists('coustomer_tbl');
    }
}
