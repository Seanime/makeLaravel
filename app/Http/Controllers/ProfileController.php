<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $showDashboard = auth()->user()->isAdmin();
        return view('profile.index', compact('showDashboard'));
    }
}
