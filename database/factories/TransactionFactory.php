<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => 2,
            'customer_id' => mt_rand(1, 4),
            'inv' => $this->faker->numerify('INV-####'),
            'date' => $this->faker->date('Y/m/d'),
            'tenor' => $this->faker->randomDigitNot(3),
            'dp' => $this->faker->numberBetween(300000, 1000000),
            'jumlah' => $this->faker->numberBetween(2000000, 4000000),
        ];
    }
}
