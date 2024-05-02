<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index()
    {
        $showDashboard = auth()->user()->isAdmin();
        return view('absensi.indexabsensi', compact('showDashboard'));
    }
}
