<?php

namespace App\Http\Controllers;

use App\Models\Line;
use Illuminate\Http\Request;

class LineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Lines.index', [
            'lines' => Line::orderBy('number')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Lines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Line::create($request->all());
        session()->flash('flash.banner', 'Linia kolejowa została zapisana!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('lines.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Line $line)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Line $line)
    {
        //
        return view('lines.edit', compact('line'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Line $line)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Line $line)
    {
        //
    }
}
