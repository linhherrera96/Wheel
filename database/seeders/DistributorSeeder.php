<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class DistributorSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distributor')->insert([
            'name' => 'MUIQB',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'DUNGQB',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'PHATQB',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'MAIQT',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'TUANQT',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'PHATHUE',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'SONHUE',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'DONGPHATHUE',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'CHIHUE',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'NHUNGDN',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'TAIDN',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'DUCDN',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'HOAQN',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'PHATQN',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'PHUONGQN',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'VIETQN',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'MINHQG',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'NGOCQG',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'THANHQG',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'HAIKT',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'TRAMGL',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'HOANGGL',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'HUYHOANGGL',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'PHONGBD',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'HUYBD',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'FOODKT',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'KIMOANHBD',
            
            
        ]);
        DB::table('distributor')->insert([
            'name' => 'TAMBD',
            
            
        ]);
        // Account ADMIN
        DB::table('users')->insert([
            'name' => 'ADMIN',
            'password'=> Hash::make('12345678'),
            'role' => 'admins'
        ]);
    }
}
