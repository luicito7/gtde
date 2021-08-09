<?php

namespace Database\Seeders;

use App\Models\papeletaDeInfraccion;
use Illuminate\Database\Seeder;

class PapeletaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        papeletaDeInfraccion::create([
            'numActa'=>'2436',
            'estado'=>'AGOTADO LA VIA ADMINISTRATIVA',
            'fechaInterven'=>'2021-10-02',
            'nomEstablecimiento'=>'Ventas de papas peladas',
            'dirEstablecimiento'=>'Jr. 1 de Mayo',
            'actaDecomiso'=>'',
            'informeFisca'=>'',
            'feInformeFisca'=>'2021-10-02',
            // 'dPersona_id'=>'74582625',
            // 'dFiscalizador_id'=>'73619964',
            // 'dSolicitante_id'=>'74582625',
            'descargoNum'=>'3560 y 5359',
            'descargoFech'=>'2015-03-13',
            'IGTDEinformeNum'=>'238',
            'IGTDEfecha'=>'2015-03-30',
            'IGTDEresuelve'=>'',
            'IGTDEinforme'=>'',
            // 'IGTDEfecha2'=>'',
            'resolGTDENum'=>'656
            ',
            'resolFecha'=>'2015-09-24',
            'resolResuelve'=>'SANCION ADMINISTRATIVA - MULTA',
            'resolTotMulta'=>'240%',
            'resolMonto'=>'',
            'reconsRegisNum'=>'',
            // 'reconsFecha'=>'',
            'resoReconGtdeNum'=>'852',
            'resoReconFecha'=>'2015-12-04',
            'resoReconResuelve'=>'CONCEDER ELEVESE - ALCALDIA',
            'resoReconPagoMulta'=>'',
            'resoReconTotPagar'=>'',
            'infDespaAlcaldia'=>'',
            // 'infDespaFecha'=>'',
            'apelaRegisGTDENum'=>'Res. Ger. Mun N° 80-2016',
            'apelaFecha'=>'2016-02-12',
            'apelaResuelve'=>'INFUNDADO',
            'constCoactivo'=>'',

            'observaciones'=>'',
        ]);
        papeletaDeInfraccion::create([
            'numActa'=>'1634',
            'estado'=>'AGOTADO LA VIA ADMINISTRATIVA',
            'fechaInterven'=>'2017-10-24',
            'nomEstablecimiento'=>'Distribuidor de Gas',
            'dirEstablecimiento'=>'Av. Simón Bolívar N° 2981',
            'actaDecomiso'=>'',
            'informeFisca'=>'',
            // 'feInformeFisca'=>'',
            // 'dPersona_id'=>'74582625',
            // 'dFiscalizador_id'=>'73619964',
            // 'dSolicitante_id'=>'74582625',
            // 'descargoNum'=>'3560 y 5359',
            // 'descargoFech'=>'2015-03-13',
            // 'IGTDEinformeNum'=>'238',
            // 'IGTDEfecha'=>'2015-03-30',
            // 'IGTDEresuelve'=>'',
            // 'IGTDEinforme'=>'',
            // // 'IGTDEfecha2'=>'',
            // 'resolGTDENum'=>'656
            // ',
            // 'resolFecha'=>'2015-09-24',
            // 'resolResuelve'=>'SANCION ADMINISTRATIVA - MULTA',
            // 'resolTotMulta'=>'240%',
            // 'resolMonto'=>'',
            // 'reconsRegisNum'=>'',
            // // 'reconsFecha'=>'',
            // 'resoReconGtdeNum'=>'852',
            // 'resoReconFecha'=>'2015-12-04',
            // 'resoReconResuelve'=>'CONCEDER ELEVESE - ALCALDIA',
            // 'resoReconPagoMulta'=>'',
            // 'resoReconTotPagar'=>'',
            // 'infDespaAlcaldia'=>'',
            // // 'infDespaFecha'=>'',
            // 'apelaRegisGTDENum'=>'Res. Ger. Mun N° 80-2016',
            // 'apelaFecha'=>'2016-02-12',
            // 'apelaResuelve'=>'INFUNDADO',
            // 'constCoactivo'=>'',

            'observaciones'=>'',
        ]);
    }
}
