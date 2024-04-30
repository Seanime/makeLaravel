<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        $showDashboard = auth()->user()->isAdmin();

        $title = 'Peringatan !';
        $text = "Apakah anda yakin ingin menghapus ?";
        $icon ="Question";
        confirmDelete($title, $text);

        //mengirim data profile ke view index
        return view('user.index', compact('user', 'showDashboard'));

    }
}
