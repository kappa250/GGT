<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiplomatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplomats', function (Blueprint $table) {
            $table->Integer('id_formation')->unsigned();
            $table->foreign('id_formation')->references('id')->on('formations');
            $table->Integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->primary(['id_formation','id_user']);
            $table->date('date_diplomat');
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
        Schema::dropIfExists('diplomats');
    }
}
