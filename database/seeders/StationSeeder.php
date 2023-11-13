<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stations')->insert([
            'name' => 'Wydartowo',
            'shortName' => 'Wd',
            'maxNumberOfRailwaySwitches' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('stations')->insert([
            'name' => 'Trzemeszno',
            'shortName' => 'Tr',
            'maxNumberOfRailwaySwitches' => 50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('stations')->insert([
            'name' => 'Łódź Żabieniec',
            'shortName' => 'Łż',
            'maxNumberOfRailwaySwitches' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('stations')->insert([
            'name' => 'Zgierz',
            'shortName' => 'Zg',
            'maxNumberOfRailwaySwitches' => 50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
