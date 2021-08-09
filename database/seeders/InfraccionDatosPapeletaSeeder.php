<?php

namespace Database\Seeders;

use App\Models\infraccion;
use Illuminate\Database\Seeder;

class InfraccionDatosPapeletaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        infraccion::create([
            'papeletaI_id'=>'1',
            'infraccion_datos_id'=>'1'
        ]);
        infraccion::create([
                'papeletaI_id'=>'1',
                'infraccion_datos_id'=>'2'
        ]);
        infraccion::create([
                'papeletaI_id'=>'1',
                'infraccion_datos_id'=>'3'
        ]);
        infraccion::create([
                'papeletaI_id'=>'2',
                'infraccion_datos_id'=>'1'
        ]);
    }
}
