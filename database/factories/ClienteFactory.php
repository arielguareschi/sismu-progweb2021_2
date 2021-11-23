<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gen = $this->faker->randomElement($array = array('male', 'female'));
        return [
            'nome'=>$this->faker->name($gen),
            'endereco'=>$this->faker->streetAddress(),
            'numero'=>$this->faker->buildingNumber(),
            'bairro'=>$this->faker->secondaryAddress(),
            'cpf'=>$this->faker->cpf(),
            'telefone'=>$this->faker->phoneNumber(),
            'celular'=>$this->faker->cellphoneNumber(),
            'cep'=>$this->faker->postcode(),
            'cidade_id'=>rand(1, 5563),
            'sexo'=>Str::upper(Str::substr($gen, 0, 1))
        ];
    }
}
