<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associations', function (Blueprint $table) {
            $table->id();
            $table->string('nombreasoc',100)->nullable();
            $table->string('dnirepre')->unique();
            $table->string('dnideleg',8)->unique();
            $table->string('ubicacion',255)->nullable();
            $table->string('rubroasoc',255)->nullable();
            $table->enum('tipoasoc', ['mayorista', 'minorista','mixto'])->nullable();
            $table->string('dferia')->nullable();
            $table->string('fechaconst',100)->nullable();
            $table->string('docregist',255)->nullable();
            $table->string('docconsti',255)->nullable();
            $table->string('docpadron',255)->nullable();
            $table->string('observacion',255)->nullable();
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
        Schema::dropIfExists('associations');
    }
}
