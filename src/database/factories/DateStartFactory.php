<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DateStartFactory extends Factory
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
            'weekly_date' => $faker->dateTimeBetween('-20 day', '-10 day')->format('Y-m-d'),
            'month_date'  => $faker->dateTimeBetween('-4 week', '-3 week')->format('Y-m-d'),
            'yearly_date' => $faker->dateTimeBetween('-6 month', '-3 month')->format('Y-m-d')
        ];
    }
}
