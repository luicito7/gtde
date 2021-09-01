<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComerciantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comerciantes', function (Blueprint $table) {
            $table->id();
            $table->string('dni',8)->unique();
            $table->string('apepaterno',100)->nullable();
            $table->string('apematerno',100)->nullable();
            $table->string('nombres',100)->nullable();
            $table->string('nombrecomplet',100)->nullable();
            $table->string('puesto',100)->nullable();
            $table->string('asociacion',100)->nullable();
            $table->string('rubro1',50)->nullable();
            $table->string('rubro2',50)->nullable();
            $table->string('mercado',100)->nullable();
            $table->string('direcpuesto',100)->nullable();
            $table->string('fotopuesto',100)->nullable();
            $table->string('tipocomer')->nullable();
            $table->string('numpadron',1000)->nullable();
            $table->text('observaciones');
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
        Schema::dropIfExists('comerciantes');
    }
}
