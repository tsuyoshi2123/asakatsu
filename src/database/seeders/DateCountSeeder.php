<?php

namespace Database\Seeders;

use App\Models\DateStart;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DateCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userList = User::get();

        $faker = \Faker\Factory::create("ja_JP");
        foreach($userList as $user) {
            $dateStart =  DateStart::find($user->id);
            $converDate = $this->dateConvert($dateStart);
            DB::table('date_counts')->insert([
                'user_id' => $user->id,
                'date_start_id' => $dateStart->id,
                'weekly_count' => $faker->numberBetween(0, $converDate['weekly_count']),
                'month_count'  => $faker->numberBetween(0, $converDate['month_count']),
                'yearly_count' => $faker->numberBetween(0, $converDate['yearly_count']),
            ]);
        }
    }

    /**
     * 年月日 経過日数取得
     *
     * @param [array] $date
     * @return array
     */
    public function dateConvert($date)
    {
        $dayMinits = 86400;
        $firstmonth = str_replace(substr($date->month_date, -2), '01', $date->month_date);
        $firstYear = \Carbon\Carbon::now()->firstOfYear()->format('Y-m-d');

        return [
            'weekly_count' => date('w', strtotime($date->weekly_date)) + 1,
            'month_count'  => (strtotime($date->month_date) - strtotime($firstmonth)) / $dayMinits,
            'yearly_count' => (strtotime($date->yearly_date) - strtotime($firstYear)) / $dayMinits
        ];
    }
}
