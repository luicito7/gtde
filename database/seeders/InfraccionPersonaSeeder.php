<?php

namespace Database\Seeders;

use App\Models\InfraccionPersona;
use Illuminate\Database\Seeder;

class InfraccionPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        infraccionPersona::create([
            'persona_id'=>'1',
            'papeletaIP_id'=>'1',
        ]);
        infraccionPersona::create([
            'persona_id'=>'2',
            'papeletaIP_id'=>'1',
        ]);
        infraccionPersona::create([
            'persona_id'=>'3',
            'papeletaIP_id'=>'1',
        ]);
        infraccionPersona::create([
            'persona_id'=>'1',
            'papeletaIP_id'=>'2',
        ]);
        infraccionPersona::create([
            'persona_id'=>'2',
            'papeletaIP_id'=>'2',
        ]);
        infraccionPersona::create([
            'persona_id'=>'3',
            'papeletaIP_id'=>'2',
        ]);
    }
}
