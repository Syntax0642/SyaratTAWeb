<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "NIS" => fake()->numerify(),
            "nama" => fake()->name(),
            "kelas_id"=>fake()->numberBetween(1, 4),
            "tgl_lahir"=>fake()->dateTime(),
            "alamat" =>fake()->streetAddress()
        ];
    }
}
