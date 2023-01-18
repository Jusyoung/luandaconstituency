<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class McaController extends Controller
{
    public function dashboard()
    {
        return view('mca.dashboard');
    }
}
