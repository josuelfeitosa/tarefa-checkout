<?php

namespace Database\Factories;

use App\Models\Produto;
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

        $model = Produto::class;

        return [
            'nome' => $this->faker->sentence,
            'descricao' => $this->faker->paragraph,
            'preco' => $this->faker->randomFloat(2, 1, 1000)
        ];
    }
}
