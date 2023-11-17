<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public $dane = [
        [272, 'Kluczbork', 'Poznań Główny'],
        [353, 'Poznań Wschód', 'Skanadawa'],
        [15, 'Bednary', 'Łódź Kaliska'],
        [16, 'Łódź Widzew', 'Kutno'],
        [203, 'Tczew', 'Kostrzyn'],
        [14, 'Łódź Kaliska', 'Tuplice'],
        [33, 'Kutno', 'Brodnica'],
        [131, 'Chorzów Batory', 'Tczew'],
        [146, 'Wyczerpy', 'Chorzew Siemkowice'],
        [213, 'Reda', 'Hel'],
    ];
    public function run(): void
    {
        //
        for ($i = 0; $i < count($this->dane); $i++) {
            DB::table('lines')->insert([
                'number' => $this->dane[$i][0],
                'stationA' => $this->dane[$i][1],
                'stationB' => $this->dane[$i][2],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
