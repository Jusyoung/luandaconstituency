<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MpController extends Controller
{
    public function dashboard()
    {
        return view('mp.dashboard');
    }
}
