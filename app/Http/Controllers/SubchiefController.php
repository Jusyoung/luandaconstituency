<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubchiefController extends Controller
{
    public function dashboard()
    {
        return view('subchief.dashboard');
    }
}
