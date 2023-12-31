<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RailwaySwitchSeeder extends Seeder
{
    public $dane = [
        // position
        // name
        // type: 0 - rozjazd; 1 - rygiel; 2 - wykolejnica
        // control: 0 - brak; 1 - kontrola 
        // Wydartowo
        [
            [4, '2/3', '00', '1'],
            [5, '4/5', '00', '1'],
            [6, '6/7', '00', '1'],
            [10, '11/12', '00', '1'],
            [11, '13/14', '00', '1']
        ],
        //Trzemeszno
        [
            [3, '3/4', '00' , '1'],
            [5, 'Wk1', '2' , '0'],
            [6, '5/6', '00' , '1'],
            [8, '7/8', '00' , '1'],
            [10, 'Wk2/9', '20' , '0'],
            [12, '10/11cd', '00', '1'],
            [13, '11ab', '00' , '1'],
            [26, '21/22', '00' , '0'],
            [28, '23cd', '00' , '1'],
            [30, '23ab/24', '00' , '1'],
            [35, '26ab/27', '00' , '1'],
            [37, '26cd', '0' , '0'],
            [38, 'Wk21', '2' , '0'],
            [41, '30/31', '00' , '1'],
            [43, '32/33', '00' , '1'],
        ],
        //Żabieniec
        [],
        //Zgierz
        []
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i=0; $i < count($this->dane); $i++) { 
            for ($j=0; $j < count($this->dane[$i]); $j++) {
                DB::table('railway_switches')->insert([
                    'position' => $this->dane[$i][$j][0],
                    'name' => $this->dane[$i][$j][1],
                    'type' => $this->dane[$i][$j][2],
                    'control' => $this->dane[$i][$j][3],
                    'station_id' => $i+1
                ]);
            }
        }
        
    }
}
