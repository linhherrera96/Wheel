<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rewards')->insert([
            'name' => '20,000',
            'percent' => 60.7,
            'amount'=> 15175,
            'total' => 303500000,
            'min' => 1,
            'max' => 45,
        ]);
        DB::table('rewards')->insert([
            'name' => '3 LY MÌ',
            'percent' => 32,
            'amount'=> 22000,
            'total' => 176000000,
            'min' => 46,
            'max' => 90,
        ]);
        DB::table('rewards')->insert([
            'name' => '30,000',
            'percent' => 1.8,
            'amount'=> 450,
            'total' => 1350000,
            'min' => 91,
            'max' => 135,
        ]);
        DB::table('rewards')->insert([
            'name' => '2 CHAI MẮM ÔT',
            'percent' => 1.8,
            'amount'=> 450,
            'total' => 14040000,
            'min' => 136,
            'max' => 180,
        ]);
        DB::table('rewards')->insert([
            'name' => '50,000',
            'percent' => 2,
            'amount' => 500,
            'total'  => 25000000,
            'min' => 181,
            'max' => 225,
        ]);
        DB::table('rewards')->insert([
            'name' => '100,000',
            'percent' => 1,
            'amount'=> 250,
            'total' => 25000000,
            'min' => 226,
            'max' => 270,
        ]);
        DB::table('rewards')->insert([
            'name' => '500,000',
            'percent' => 0.7,
            'amount'=> 175,
            'total' => 87500000,
            'min' => 271,
            'max' => 315,
        ]);
        DB::table('rewards')->insert([
            'name' => 'IPhone 13',
            'percent' => 0,
            'amount'=> 0,
            'total' => 0,
            'min' => 316,
            'max' => 360,
        ]);
    }
}
