<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BasicController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard', [
            'agents' => User::all()
        ]);
    }
}
