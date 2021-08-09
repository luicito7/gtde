<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapeletaDeInfraccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papeleta_de_infraccion', function (Blueprint $table) {
            $table->id();
            // datos del solicitante
            // fiscalizador
            // infractor
            $table->integer('numActa')->nullable()->unique();
            $table->string('estado')->nullable();
            $table->date('fechaInterven')->nullable();
            $table->string('nomEstablecimiento')->nullable();
            $table->string('dirEstablecimiento')->nullable();
            $table->string('dirLegal')->nullable();
            $table->string('actaDecomiso')->nullable();
            $table->string('informeFisca')->nullable();
            $table->date('feInformeFisca')->nullable();
            // descargo
            $table->string('descargoNom')->nullable();
            $table->string('descargoNum',50)->nullable();
            $table->date('descargoFech')->nullable();
            // informe a gtde 
            $table->string('IGTDEinformeNum',20)->nullable();
            $table->date('IGTDEfecha')->nullable();
            $table->string('IGTDEresuelve',50)->nullable();
            $table->string('IGTDEinforme',50)->nullable();
            $table->date('IGTDEfecha2')->nullable();
            
            // resolucion 
            $table->string('resolGTDENum',25)->nullable();
            $table->date('resolFecha',25)->nullable();
            $table->string('resolResuelve',50)->nullable();
            $table->string('resolTotMulta',50)->nullable();
            $table->string('resolMonto',50)->nullable();
            
            // reconsideracion 
            $table->string('reconsRegisNum')->nullable();
            $table->date('reconsFecha')->nullable();
            $table->string('resoReconGtdeNum')->nullable();
            $table->date('resoReconFecha')->nullable();
            $table->string('resoReconResuelve')->nullable();
            $table->string('resoReconPagoMulta')->nullable();
            $table->string('resoReconTotPagar')->nullable();
            $table->string('infDespaAlcaldia')->nullable();
            $table->date('infDespaFecha')->nullable();
            
            // apelacion 
            $table->string('apelaRegisGTDENum')->nullable();
            $table->date('apelaFecha')->nullable();
            $table->string('apelaResuelve')->nullable();
            $table->string('constCoactivo')->nullable();
            $table->string('constCoactivoFech')->nullable();
            
           
            $table->string('observaciones')->nullable();
            
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
        Schema::dropIfExists('papeleta_de_infraccion');
    }
}
