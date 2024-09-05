<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MobilFactory extends Factory
{

    protected $model = \App\Models\Mobil::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'merek_mobil' => $this->faker->word, // Generate a random word for merk mobil
            'deskripsi_mobil' => $this->faker->sentence, // Generate a random sentence for deskripsi
            'harga_mobil' => $this->faker->numberBetween(100000, 1000000), // Generate a random number for harga
        ];
    }
}
