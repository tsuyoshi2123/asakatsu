<?php

namespace Database\Seeders;

use App\Models\DateStart;
use Illuminate\Database\Seeder;

class DateStartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DateStart::factory()->count(5)->create();
    }
}
