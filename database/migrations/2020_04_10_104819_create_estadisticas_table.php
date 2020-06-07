<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadisticas', function (Blueprint $table) {
            $table->id();
            $table->integer('niveldepoder');
            $table->integer('salud');
            $table->integer('ataquefisico');
            $table->integer('ataquedeki');
            $table->integer('defensafisica');
            $table->integer('defensadeki');
            $table->integer('critico');
            $table->integer('velocidadderecuperaciondeki');
            $table->integer('ranurasdeequipamiento');
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
        Schema::dropIfExists('estadisticas');
    }
}
