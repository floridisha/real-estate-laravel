<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $attributes = $request->validate($request->all());

        // $attributes['slide_1'] = $request->file('slide_1')->store('property-images');
        // $attributes['slide_2'] = $request->file('slide_2')->store('property-images');
        // $attributes['slide_3'] = $request->file('slide_3')->store('property-images');
        // $attributes['slide_4'] = $request->file('slide_4')->store('property-images');
        // $attributes['slide_5'] = $request->file('slide_5')->store('property-images');
        // $attributes['floor_plan'] = $request->file('floor_plan')->store('property-images');
        // $attributes['user_id'] = auth()->id();


        // Property::create($attributes);

        // return back()->with('success', 'Property Added Succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
