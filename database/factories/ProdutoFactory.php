<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $names = [
            'bone', 'chapéu', 'camiseta', 'bermuda',
            'calça', 'tênis', 'cachorro',
        ];

        return [
            'name' => $this->faker->randomElement($names),
            'price' => $this->faker->randomFloat(2, 1, 5000),
            'quantify' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
