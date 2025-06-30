<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Funcionario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Funcionario>
 */
class FuncionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Funcionario::class;

    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'nome' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'cpf' => $this->faker->unique()->numerify('###########'),
            'cargo' => $this->faker->jobTitle(),
            'dataAdmissao' => $this->faker->date(),
            'salario' => $this->faker->randomFloat(2, 1500, 15000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
