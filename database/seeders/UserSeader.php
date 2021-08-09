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
        User::create([
            'dni' => "42640291",
            'name' => "LUIS",
            'email' => "luicito7@gmail.com",
            'password' => '$2y$10$Gle1qkqqDEdm/P1EUQIx8emC4o1cPxc0JlPcm0Xl3tHYQ61fP9f2C',
            'nivel' => "1",
            'cargo' => "Analista de informacion",
            'oficina' => "GTDE"
        ]);
        User::create([
            
            'dni' => "77282133",
            'name' => "Ronald",
            'email' => "prueba1@hotmail.com",
            'password' => '$2y$10$Nevnnh7o3/7EWykRY41WEOVqzk.QIfDVzoNf7qfsQdRYzDILPJwei',
            'nivel' => "1",
            'cargo' => "Informatico",
            'oficina' => "OTI",
        ]);
        User::create([
            'dni' => "74829964",
            'name' => "Wilberth",
            'email' => "elWilberth@gmail.com",
            'password' => '$2y$10$I87a.7w/pYbXABTeo9UJiemsn0KbdTCU0iHUZxxkhILz616CYTVE6',
            'nivel' => "1",
            'cargo' => "Informatico",
            'oficina' => "OTI",
            
        ]);
        User::create([
            'dni' => "71938063",
            'name' => "Wilson",
            'email' => "elBarto@gmail.com",
            'password' => '$2y$10$0IoO6Q6anpuGS9oPKK2GJO77GnN.4jaaPRJLdOZgd4.5kg0opju3S',
            'nivel' => "1",
            'cargo' => "Informatico",
            'oficina' => "OTI",
        ]);
    }
}
