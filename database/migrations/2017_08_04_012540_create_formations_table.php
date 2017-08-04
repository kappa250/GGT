<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->date('begin');
            $table->date('end');
            $table->Integer('id_user')->unsigned();
            $table->string('description');
            $table->double('price');
            $table->string('photo')->nullable();
            $table->timestamps();
        });
        Schema::table('formations', function (Blueprint $table) {
            
            $table->foreign('id_user')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
    }
}
