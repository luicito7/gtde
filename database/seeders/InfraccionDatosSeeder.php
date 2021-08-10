<?php

namespace Database\Seeders;

use App\Models\InfraccionDatos;
use Illuminate\Database\Seeder;

class InfraccionDatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //1 uit 4400
        InfraccionDatos::create([
            'codigo'=>'100',
            'nombre'=>'Abrir el establecimiento sin contar con la
            respectiva licencia de apertura de
            funcionamiento de comercio especial.',
            'multa'=>'10',
            'costo'=>'440',
        ]);
        InfraccionDatos::create([
                'codigo'=>'117',
                'nombre'=>'consignar datos falsos en la solicitud de
                declaración jurada de autorización municipal ',
                'multa'=>'30',
                'costo'=>'1320',
        ]);
        InfraccionDatos::create([
                'codigo'=>'130',
                'nombre'=>'No dar aviso del cese de actividades y/o la
                cancelación de la licencia de apertura del
                establecimiento.',
                'multa'=>'200',
                'costo'=>'8800',
        ]);
    }
}
