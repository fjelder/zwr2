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
            'line_id' => 2,
            'maxNumberOfRailwaySwitches' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('stations')->insert([
            'name' => 'Trzemeszno',
            'shortName' => 'Tr',
            'line_id' => 2,
            'maxNumberOfRailwaySwitches' => 50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('stations')->insert([
            'name' => 'Łódź Żabieniec',
            'shortName' => 'Łż',
            'line_id' => 3,
            'maxNumberOfRailwaySwitches' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('stations')->insert([
            'name' => 'Zgierz',
            'shortName' => 'Zg',
            'line_id' => 3,
            'maxNumberOfRailwaySwitches' => 50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
