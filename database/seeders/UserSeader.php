<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();

            $usuario->dni = "42640291";
            $usuario->name = "LUIS";
            $usuario->email = "luicito7@gmail.com";
            $usuario->password = '$2y$10$Gle1qkqqDEdm/P1EUQIx8emC4o1cPxc0JlPcm0Xl3tHYQ61fP9f2C';
            $usuario->nivel = "1";
            $usuario->cargo = "Analista de informacion";
            $usuario->oficina = "GTDE";
            $usuario->fecha_ingreso = "2022-01-01";
            $usuario->fecha_expiracion = "2022-10-11";

            $usuario->dni = "77282133";
            $usuario->name = "Ronald";
            $usuario->email = "prueba1@hotmail.com";
            $usuario->password = '$2y$10$Nevnnh7o3/7EWykRY41WEOVqzk.QIfDVzoNf7qfsQdRYzDILPJwei';
            $usuario->nivel = "1";
            $usuario->cargo = "Informatico";
            $usuario->oficina = "OTI";
            $usuario->fecha_ingreso = "2021-03-05";
            $usuario->fecha_expiracion = "2022-10-11";
    
            $usuario-> save();
    }
}
