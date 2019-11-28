<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('mesa');
            $table->string('eleccion',1);
            $table->integer('p1');
            $table->integer('p2');
            $table->integer('p3');
            $table->integer('p4');
            $table->string('estado',1);
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
        Schema::dropIfExists('votacion');
    }
}
