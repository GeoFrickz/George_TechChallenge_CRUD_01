<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create(config('app.locale'));

        return [
            'nama' => $faker->name(),
            'umur' => $faker->numberBetween(18, 65),
            'alamat' => $faker->address(),
            'no_telp' => $faker->phoneNumber(),
        ];
    }
}
