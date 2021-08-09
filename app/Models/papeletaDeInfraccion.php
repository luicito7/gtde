<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class papeletaDeInfraccion extends Model
{
    use HasFactory;
    public $table = 'papeleta_de_infraccion';
    protected $fillable = ['numActa',
                            'estado',
                            'fechaInterven',
                            'nomEstablecimiento',
                            'dirEstablecimiento',
                            'dirLegal',
                            'actaDecomiso',
                            'informeFisca',
                            'feInformeFisca',
                            // 'dPersona_id'=>'74582625',
                            // 'dFiscalizador_id'=>'73619964',
                            // 'dSolicitante_id'=>'74582625',
                            'descargoNom',
                            'descargoNum',
                            'descargoFech',
                            'IGTDEinformeNum',
                            'IGTDEfecha',
                            'IGTDEresuelve',
                            'IGTDEinforme',
                            'IGTDEfecha2',
                            'resolGTDENum',
                            'resolFecha',
                            'resolResuelve',
                            'resolTotMulta',
                            'resolMonto',
                            'reconsRegisNum',
                            'reconsFecha',
                            'resoReconGtdeNum',
                            'resoReconFecha',
                            'resoReconResuelve',
                            'resoReconPagoMulta',
                            'resoReconTotPagar',
                            'infDespaAlcaldia',
                            'infDespaFecha',
                            'apelaRegisGTDENum',
                            'apelaFecha',
                            'apelaResuelve',
                            'constCoactivo',

                            'observaciones',

                            ];
    public function infracciondatos(){
        return $this->belongsToMany(InfraccionDatos::class,"papeleta_de_infraccion_infraccion","papeletaI_id");
    }
    public function persona(){
        // return $this->belongsToMany(Persona::class);
        return $this->belongsToMany(Persona::class,"papeleta_de_infraccion_persona","papeletaIP_id");
    }
}
