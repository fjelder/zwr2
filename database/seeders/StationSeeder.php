<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'maxNumberOfRailwaySwitches' => 12
        ]);
        DB::table('stations')->insert([
            'name' => 'Trzemeszno',
            'shortName' => 'Tr',
            'maxNumberOfRailwaySwitches' => 8
        ]);
        DB::table('stations')->insert([
            'name' => 'Łódź Żabieniec',
            'shortName' => 'Łż',
            'maxNumberOfRailwaySwitches' => 32
        ]);
        DB::table('stations')->insert([
            'name' => 'Zgierz',
            'shortName' => 'Zg',
            'maxNumberOfRailwaySwitches' => 44
        ]);
    }
}
