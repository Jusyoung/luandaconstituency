<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function dashboard()
    {
        return view('resident.dashboard');
    }
}
