<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfraccionDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infraccion_datos', function (Blueprint $table) {
            $table->id();
            
            $table->string('codigo')->nullable();
            $table->string('nombre')->nullable();
            $table->integer('multa')->nullable();
            $table->integer('costo')->nullable();

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
        Schema::dropIfExists('infraccion_datos');
    }
}
