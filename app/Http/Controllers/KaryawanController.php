<?php
// app/Http/Controllers/KaryawanController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('pages.karyawan', compact('karyawan'));
    }

    public function create()
    {
        return view('pages.karyawan-create');
    }

    public function store(Request $request)
    {
        // Validasi data inputan jika diperlukan
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gaji' => 'required|numeric',
        ]);

        // Simpan data karyawan ke dalam database
        Karyawan::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'gaji' => $request->gaji,
        ]);

        // Redirect ke halaman index karyawan
        return redirect()->route('pages.karyawan')->with('success', 'Data karyawan berhasil ditambahkan!');
    }
}
