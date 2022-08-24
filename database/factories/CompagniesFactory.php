<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compagnies>
 */
class CompagniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom_compagnie' => $this->faker->company,
            'rue' => $this->faker->streetName,
            'code_commune' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'num_porte' => $this->faker->numberBetween($min = 1, $max = 400),
            'num_tel' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'nom_contact' => $this->faker->lastName,
            'prenom_contact' => $this->faker->firstName,
            'image' => $this->faker->imageUrl,
        ];
    }
}
