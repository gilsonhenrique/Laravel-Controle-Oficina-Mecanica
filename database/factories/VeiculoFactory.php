<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Veiculo>
 */
class VeiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ano = $this->faker->numberBetween(1995, 2022);

        return [
            'proprietario' => $this->faker->firstNameMale(),
            'telefone' => $this->faker->regexify('[2]{1}[1]{1}[0-9]{9}'),
            'placa' => $this->faker->regexify('[A-Z]{3}[0-4]{4}'),
            'marca_modelo' => $this->faker->randomElement(['GM/Cobalt', 'FIAT/Mobi', 'GM/Spin', 'Ford/Ka', 'TOYOTA/Corola', 'Honda/Civic', 'RENAULT/Logan']),
            'cor' => $this->faker->randomElement(['preto', 'cinza', 'vermelho', 'azul', 'marrom', 'branco', 'bege']),
            'ano_fabricacao' => $ano,
            'ano_modelo' => $ano + 1,
            'cilindrada' => $this->faker->randomElement(['1000', '1200','1400','1600', '1800','2000']),
            'combustivel' => $this->faker->randomElement(['Álcool', 'Gasolina','Flex','GNV-Álcool', 'GNV-Gasolina', 'Tetrafuel', 'Diesel', 'Elétrico']),
            'km' => $this->faker->numberBetween(1000, 10000),
            'irreg_serv' => $this->faker->paragraph(2)
        ];
    }
}
