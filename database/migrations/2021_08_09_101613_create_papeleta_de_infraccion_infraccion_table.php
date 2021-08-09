<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapeletaDeInfraccionInfraccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papeleta_de_infraccion_infraccion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('papeletaI_id')->unsigned();
            $table->bigInteger('infraccion_datos_id')->unsigned();

            $table->foreign('papeletaI_id')->references('id')->on('papeleta_de_infraccion');
            $table->foreign('infraccion_datos_id')->references('id')->on('infraccion_datos');
    
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
        Schema::dropIfExists('papeleta_de_infraccion_infraccion');
    }
}
