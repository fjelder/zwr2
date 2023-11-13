<?php

namespace App\Http\Controllers;

use App\Models\RailwaySwitch;
use App\Models\Station;
use Illuminate\Http\Request;

use Illuminate\Support\Arr;

class RailwaySwitchController extends Controller
{
    public static function staticAll(){
        //
    }
    /**
     * Display a listing of the resource.
     */
    public function index($station)
    {
        //
        return view('railwayswitches.index', [
            'railwaySwitches' => RailwaySwitch::where('station_id', $station)->get(),
            'station' => \App\Models\Station::where('id', $station)->first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('railwayswitches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RailwaySwitch $railwaySwitch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, RailwaySwitch $railwaySwitch)
    {
        //
        $station = Station::where('id', $request->station)->first();
        $switches = RailwaySwitch::where('station_id', $station->id)->get();
        $array = array();
        $busy = $this->busyPosition($switches);
        $cnt = count($switches);
        $k = 0;
        for($i=1; $i<=$station->maxNumberOfRailwaySwitches; $i++) { 
            if(isset($switches[$k]) && $i == $switches[$k]->position)
            {
                echo $k;
                $array[$i] = $switches[$k];
                $k++;
            }
            else
                $array[$i] = new RailwaySwitch;
        }
        // dd($array);
        // dd($busy);
        return view('railwayswitches.edit', [
            'station' => $station,
            'switches' => $array,
            'busy' => $busy
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RailwaySwitch $railwaySwitch)
    {
        //
        $switches = $request->switch; 
        $cnt = count($switches);
        
        for($i = 1; $i <= $cnt; $i++)
        {
            if($switches[$i]['name'] === null){
                unset($switches[$i]);
            }  
        }
 
        pre2($switches);
        // dd($switches);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RailwaySwitch $railwaySwitch)
    {
        //
    }

    public function busyPosition($railwaySwitch) : array {
        $arr = array();
        for ($i=0; $i < count($railwaySwitch); $i++) { 
            $arr[] = $railwaySwitch[$i]->position;
        }
        // dd(in_array(2, $arr));
        // dd($arr);
        return $arr;
    }
}
