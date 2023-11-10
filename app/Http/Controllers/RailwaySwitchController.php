<?php

namespace App\Http\Controllers;

use App\Models\RailwaySwitch;
use Illuminate\Http\Request;

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
    public function edit(RailwaySwitch $railwaySwitch)
    {
        //
        return view('railwayswitches.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RailwaySwitch $railwaySwitch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RailwaySwitch $railwaySwitch)
    {
        //
    }
}
