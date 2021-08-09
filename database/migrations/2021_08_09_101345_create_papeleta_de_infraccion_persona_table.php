<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapeletaDeInfraccionPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papeleta_de_infraccion_persona', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('papeletaIP_id')->unsigned();
            // $table->string('persona_id');
            $table->bigInteger('persona_id')->unsigned();

            $table->foreign('papeletaIP_id')->references('id')->on('papeleta_de_infraccion');
            $table->foreign('persona_id')->references('id')->on('personas');
            // $table->foreign('persona_id')->references('dni')->on('personas');
            
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
        Schema::dropIfExists('papeleta_de_infraccion_persona');
    }
}
