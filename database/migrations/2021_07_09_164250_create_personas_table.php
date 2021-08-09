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
            $table->string('namecomplet');
            $table->date('fechanac')->nullable();
            $table->enum('sexo', ['1', '2'])->nullable();
            $table->string('direcreal',255)->nullable();
            $table->string('departamento')->nullable();
            $table->string('provincia')->nullable();
            $table->string('distrito')->nullable();
            $table->string('celprin',9)->nullable();
            $table->string('email')->nullable();
            $table->string('ruc',11)->nullable();
            $table->enum('estacivil', ['1', '2','3','4','5'])->nullable();
            $table->string('profesion',191)->nullable();
            $table->enum('grainstruc', ['1','2','3','4','5','6','7','8','9','10'])->nullable();
            $table->enum('discapac', ['1', '2'])->nullable();
            $table->boolean('estadoreg');
            $table->text('observac')->nullable();
            //$table->integer('users');
            $table->timestamps();

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