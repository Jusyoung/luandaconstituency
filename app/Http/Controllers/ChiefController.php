<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChiefController extends Controller
{
    public function dashboard()
    {
        return view('chief.dashboard');
    }
}
