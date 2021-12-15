<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = User::latest()->paginate(6);

        return view('agents.agents-list', [
            'agents' => $agents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agents.create');
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:500'],
            'role' => ['required'],
            'mobile' => ['required'],
            'fb_link' => ['required'],
            'insta_link' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $attributes['profile'] = $request->file('profile')->store('agents');


       User::create($attributes);


        return back()->with('success', 'Agent Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(User $agent)
    {
        return view('agents.show', [
            'agent' => $agent
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('agents.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $attributes = $request->validate([
            'first_name' => ['max:255'],
            'last_name' => ['max:255'],
            'description' => ['max:500'],
            'role' => [''],
            'mobile' => [''],
            'fb_link' => [''],
            'insta_link' => [''],
            'email' => ['email', 'max:255'],
            'password' => ['', 'confirmed', Rules\Password::defaults()],
        ]);

        if($request->has('profile')) {
            $attributes['profile'] = $request->file('profile')->store('agents');
        }


       $user->update($attributes);


        return back()->with('success', 'Agent Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('success', 'Agent deleted!');
    }
}
