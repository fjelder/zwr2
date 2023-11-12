<?php

namespace App\Http\Controllers;

use App\Models\RailwaySwitch;
use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('stations.index', [
            'stations' => Station::all()->sortByDesc("id"),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('stations.create', [
            'station' => new Station,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        Station::create($request->all());
        session()->flash('flash.banner', 'Stacja została zapisana!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('stations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Station $station)
    {
        //
        $switches = RailwaySwitch::where('station_id', $station->id)->get();
        return view('stations.show', compact('station', 'switches'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Station $station)
    {
        //
        return view('stations.edit', compact('station'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Station $station)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Station $station)
    {
        //
    }
}
