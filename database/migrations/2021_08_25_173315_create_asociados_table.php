<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asociados', function (Blueprint $table) {
            $table->id();
            $table->string('dni',8)->unique();
            $table->string('apepaterno',100)->nullable();
            $table->string('apematerno',100)->nullable();
            $table->string('nombres',100)->nullable();
            $table->string('nombrecomplet',100)->nullable();
            $table->string('ubicacion',100)->nullable();
            $table->string('asociacion',100)->nullable();
            $table->string('rubro1',50)->nullable();
            $table->string('zona',100)->nullable();
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
        Schema::dropIfExists('asociados');
    }
}
