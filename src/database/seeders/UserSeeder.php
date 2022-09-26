<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'fugafuga',
            'email'     => 'hoge@hoge.com',
            'password'  => Hash::make('tt2123244'),
            'comment'   => Str::random(10),
            'total_continuation' => 27,
        ]);
    }
}
