<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
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
        if(auth()->user()->role === 'admin') {
            $properties = Property::latest()->paginate(6);
        } else if(auth()->user()->role === 'Agent') {
            $properties = auth()->user()->properties;
        }

        return view('properties.properties-list', [
            'properties' => $properties
        ]);
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

        $attributes = $request->validate([
            'title' => 'required',
            'location' => 'required|max:255',
            'description' => 'required|max:500',
            'amenitie_1' => 'required|max:50',
            'amenitie_2' => 'required|max:50',
            'amenitie_3' => 'required|max:50',
            'amenitie_4' => 'nullable|max:50',
            'amenitie_5' => 'nullable|max:50',
            'amenitie_6' => 'nullable|max:50',
            'amenitie_7' => 'nullable|max:50',
            'amenitie_8' => 'nullable|max:50',
            'amenitie_9' => 'nullable|max:50',
            'type' => 'required',
            'status' => 'required',
            'area' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'garage' => 'required',
            'price' => 'required',
            'slide_1' => 'required|image',
            'slide_2' => 'nullable|image',
            'slide_3' => 'nullable|image',
            'slide_4' => 'nullable|image',
            'slide_5' => 'nullable|image',
            'floor_plan' => 'nullable|image',
        ]);


        $attributes['user_id'] = auth()->id();
        $attributes['slide_1'] = $request->file('slide_1')->store('property');
        $attributes['slide_2'] = $request->file('slide_2')->store('property');
        $attributes['slide_3'] = $request->file('slide_3')->store('property');
        $attributes['slide_4'] = $request->file('slide_4')->store('property');
        $attributes['slide_5'] = $request->file('slide_5')->store('property');
        if($request->has('floor_plan')) {
            $attributes['floor_plan'] = $request->file('floor_plan')->store('property');

        }

        Property::create($attributes);

        return redirect()->route('dashboard')->with('success', 'Property added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        return view('properties.show', [
            'property' => $property
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        return view('properties.edit', [
            'property' => $property
        ]);
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
        $attributes = $request->validate([
            'title' => 'nullable',
            'location' => 'nullable|max:255',
            'description' => 'nullable|max:500',
            'amenitie_1' => 'nullable|max:50',
            'amenitie_2' => 'nullable|max:50',
            'amenitie_3' => 'nullable|max:50',
            'amenitie_4' => 'nullable|max:50',
            'amenitie_5' => 'nullable|max:50',
            'amenitie_6' => 'nullable|max:50',
            'amenitie_7' => 'nullable|max:50',
            'amenitie_8' => 'nullable|max:50',
            'amenitie_9' => 'nullable|max:50',
            'type' => 'nullable',
            'status' => 'nullable',
            'area' => 'nullable',
            'bedrooms' => 'nullable',
            'bathrooms' => 'nullable',
            'garage' => 'nullable',
            'price' => 'nullable',
            'slide_1' => 'nullable|image',
            'slide_2' => 'nullable|image',
            'slide_3' => 'nullable|image',
            'slide_4' => 'nullable|image',
            'slide_5' => 'nullable|image',
            'floor_plan' => 'nullable|image',
            'is_featured' => 'nullable',
        ]);

        if(auth()->user()->role === 'admin') {
            $attributes['is_featured'] = $request->is_featured;
        }

        if($request->has('slide_1')) {
            $attributes['slide_1'] = $request->file('slide_1')->store('property');

        } else if ($request->has('slide_2')) {
            $attributes['slide_2'] = $request->file('slide_2')->store('property');

        } else if ($request->has('slide_3')) {
            $attributes['slide_3'] = $request->file('slide_3')->store('property');

        } else if($request->has('slide_4')) {
            $attributes['slide_4'] = $request->file('slide_4')->store('property');

        } else if($request->has('slide_5')) {
            $attributes['slide_5'] = $request->file('slide_5')->store('property');

        } else if($request->has('floor_plan')) {
            $attributes['floor_plan'] = $request->file('floor_plan')->store('property');
        }

        $property->update($attributes);

        return redirect('dashboard/properties')->with('success', 'Property updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property->delete();

        return back()->with('success', 'Property deleted!');
    }
}
