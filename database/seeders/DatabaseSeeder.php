<?php

namespace Database\Seeders;

use App\Models\Association;
use Illuminate\Database\Seeder;
use App\Models\Persona;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        // \App\Models\User::factory(10)->create();
        Persona::factory(1)->create(); 
        Association::factory(1)->create();  
        //$this->call(PersonaSeader::class);
        $this->call(UserSeader::class);
        User::factory(06)->create();
        // $this->call(PapeletaSeeder::class);
        // $this->call(InfraccionPersonaSeeder::class);
        // $this->call(InfraccionDatosSeeder::class);
        // $this->call(InfraccionDatosPapeletaSeeder::class);
        
            

    
    }
}
