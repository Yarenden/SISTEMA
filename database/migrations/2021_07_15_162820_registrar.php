<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registrar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrar', function (Blueprint $table) {
            $table->id();

            $table->integer('estudiante_id');
            $table->integer('materia_id');

            $table->foreign('estudiante_id')->references('id')->on('estudiante');
            $table->foreign('materia_id')->references('id')->on('materia');


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
        //
    }
}
