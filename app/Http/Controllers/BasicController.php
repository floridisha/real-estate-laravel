<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\User;

class BasicController extends Controller
{

    public function home()
    {
        $properties = Property::latest()->paginate(3);
        $agents = User::latest()->paginate(3)->except('1');

        $featured = Property::where('is_featured', 'Yes')->get();



        return view('index', [
            'properties' => $properties,
            'agents' => $agents,
            'featured' => $featured
        ]);
    }

    public function dashboard()
    {
        return view('dashboard.dashboard', [
            'agents' => User::all()
        ]);
    }

    public function about()
    {

        $agents = User::all()->except('1');

        return view('about', [
            'agents' => $agents
        ]);
    }


    public function contact()
    {
        return view('contact');
    }

    public function properties()
    {
        $properties = Property::latest()->paginate(6);

        return view('property-list', [
            'properties' => $properties
        ]);
    }

    public function agentList()
    {
        $agents = User::where('id', '!=', '1')->latest()->paginate(6);

        return view('agents-list', [
            'agents' => $agents
        ]);
    }


    public function searchResults()
    {
        $properties = Property::latest()->filter(request(['keyword', 'type', 'location', 'bedrooms', 'garage', 'bathrooms', 'price']))->paginate(6)->withQueryString();

        return view('search-result', [
            'properties' => $properties
        ]);
    }



}
