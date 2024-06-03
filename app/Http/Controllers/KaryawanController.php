<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Exports\KaryawanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Karyawan; // Add this line

class KaryawanController extends Controller
{

    public function index()
    {
        $showDashboard = auth()->user()->isAdmin();
        $title = 'Peringatan!';
        $text = 'Apakah anda yakin ingin menghapus?';
        $icon = "Question";
        confirmDelete($title, $text);
        $karyawan = Karyawan::all(); // Change this line
        return view('karyawan.indexkaryawan', compact('karyawan', 'showDashboard'));
    }

    public function tambahkaryawan()
    {
        $showDashboard = auth()->user()->isAdmin();
        return view('karyawan.tambahkaryawan', compact('showDashboard'));
    }

    public function karyawan(Request $request)
    {
        $showDashboard = auth()->user()->isAdmin();
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'departemen' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        Karyawan::create([ // Change this line
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'departemen' => $request->departemen,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        Alert::success('Success', 'Data Berhasil ditambahkan');
        return redirect('/karyawan');
    }

    public function show($id)
    {
        $showDashboard = auth()->user()->isAdmin();
        $karyawan = Karyawan::find($id); // Change this line
        return view('karyawan.detailkaryawan', compact('karyawan', 'showDashboard'));
    }

    public function edit($id)
    {
        $showDashboard = auth()->user()->isAdmin();
        $karyawan = Karyawan::find($id); // Change this line
        return view('karyawan.editkaryawan', compact('karyawan', 'showDashboard'));
    }

    public function update(Request $request, $id)
    {
        $showDashboard = auth()->user()->isAdmin();
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'departemen' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        $karyawan = Karyawan::find($id); // Change this line
        $karyawan->update([ // Change this line
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'departemen' => $request->departemen,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        Alert::success('Success', 'Data Berhasil diupdate');
        return redirect('/karyawan');
    }

    public function destroy($id)
    {
        $showDashboard = auth()->user()->isAdmin();
        $karyawan = Karyawan::find($id); // Change this line
        $karyawan->delete(); // Change this line
        Alert::success('Success', 'Data Berhasil di Hapus');
        return redirect('/karyawan');
    }

    public function export_excel() 
    {
        return Excel::download(new KaryawanExport, 'karyawan.xlsx');
    }
}
