<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class LoginFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create("ja_JP");
        return [
            'user_id' => User::factory()->create()->id,
            'login_date' => $faker->dateTimeBetween('-3 day', 'now')->format('Y-m-d'),
        ];
    }
}
