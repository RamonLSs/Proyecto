<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('rareza');
            $table->string('color');
            $table->string('tipo');
            $table->string('imagen')->default('img/personajes/default.jpg');

            $table->bigInteger('episodio_id')->unsigned()->nullable();
            $table->bigInteger('informacion_id')->unsigned()->nullable();
            $table->bigInteger('estadistica_id')->unsigned()->nullable();
            $table->bigInteger('tag_id')->unsigned()->nullable();

            $table->foreign('episodio_id')
            ->references('id')
            ->on('episodios')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('informacion_id')
            ->references('id')
            ->on('informacions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('estadistica_id')
            ->references('id')
            ->on('estadisticas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('tag_id')
            ->references('id')
            ->on('tags')
            ->onDelete('cascade')
            ->onUpdate('cascade');


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
        Schema::dropIfExists('personajes');
    }
}
