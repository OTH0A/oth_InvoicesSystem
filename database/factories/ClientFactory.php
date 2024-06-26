<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomprenom'=> $this->faker->name,
            'email'=>$this->faker->email,
            'adresse'=>$this->faker->address,
            'tel'=>$this->faker->phoneNumber
        ];
    }
}
