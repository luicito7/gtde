<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$faker->addProvider(new Faker\Provider\es_ES\Person($faker));
        $nombre = $this->faker->firstName;
        //$nombre = $this->faker->firstName;
        $apellidos = $this->faker->lastName;
        $apellido = $this->faker->lastName;
        return [         

            'dni' => $this->faker->numerify('########'),
            'apepaterno' => $apellidos,
            'apematerno' => $apellido,
            'nombres' => $nombre,
            'namecomplet' => $apellidos.' '.$apellido.' '.$nombre,
            'fechanac' => $this->faker->date($format = 'Y-m-d', $max = '-19 years'),
            'sexo' => $this->faker->numberBetween($min = 'Masculino', $max = 'Femenino'),
            'direcreal' => $this->faker->streetAddress(),
            'departamento' => $this->faker->country(),
            'provincia' => $this->faker->state(),
            'distrito' => $this->faker->city(),
            'celprin' => $this->faker->numerify('9########'),
            'email' => $this->faker->unique()->safeEmail,
            'ruc' => $this->faker->numerify('10#########'),
            'estacivil' => $this->faker->randomElement(['soltero','conviviente','casado','divorciado','viudo']),
            'profesion' => $this->faker->optional(0.6)->company(),
            'grainstruc' => $this->faker->randomElement(['primaria','secundaria','bachiller','titulado','universidad incompleta','universidad completa','instituto','egresado','estudiante','tecnico']),
            'discapac' => $this->faker->randomElement(['si','no']),
            'observac' => $this->faker->text(),
        ];
    }
}
