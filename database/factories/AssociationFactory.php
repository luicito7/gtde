<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Association;

class AssociationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Association::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [         

            'dnirepre' => $this->faker->numerify('########'),
            'nombreasoc' => $this->faker->Company(),
            'dnideleg' => $this->faker->numerify('########'),
            'ubicacion' => $this->faker->streetAddress(),
            'rubroasoc' => $this->faker->name(),
            'tipoasoc' => $this->faker->numberBetween($min = 1, $max = 3),
            'dferia' => $this->faker->numberBetween($min = 1, $max = 7),
            'fechaconst' => $this->faker->optional(0.6)->company(),
            'docregist' => $this->faker->text(),
            'docconsti' => $this->faker->text(),
            'docpadron' => $this->faker->text(),
            'observacion' => $this->faker->text(),
        ];
    }
}
