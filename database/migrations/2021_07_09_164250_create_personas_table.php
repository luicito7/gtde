<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('dni',8)->unique();
            $table->string('apepaterno',100)->nullable();
            $table->string('apematerno',100)->nullable();
            $table->string('nombres',100)->nullable();
            $table->string('namecomplet')->nullable();
            $table->string('fechanac')->nullable();
            $table->string('sexo')->nullable();
            $table->string('direcreal',255)->nullable();
            $table->string('departamento')->nullable();
            $table->string('provincia')->nullable();
            $table->string('distrito')->nullable();
            $table->string('celprin',9)->nullable();
            $table->string('email')->nullable();
            $table->string('ruc',11)->nullable();
            $table->string('estacivil')->nullable();
            $table->string('profesion',191)->nullable();
            $table->string('grainstruc')->nullable();
            $table->string('discapac')->nullable();
            $table->text('observac')->nullable();
            $table->timestamps();
            $table->boolean('estadoreg')->default(1);
            //Relaciones
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}