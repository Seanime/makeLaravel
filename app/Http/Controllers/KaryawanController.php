<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{

    public function index()
    {
        $showDashboard = auth()->user()->isAdmin();
        $title = 'Peringatan!';
        $text = 'Apakah anda yakin ingin menghapus?';
        $icon = "Question";
        confirmDelete($title, $text);
        $karyawan = DB::table('karyawan_tabel')->get();
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

        DB::table('karyawan_tabel')->insert([
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
        $karyawan = DB::table('karyawan_tabel')->find($id);
        return view('karyawan.detailkaryawan', compact('karyawan', 'showDashboard'));
    }

    public function edit($id)
    {
        $showDashboard = auth()->user()->isAdmin();
        $karyawan = DB::table('karyawan_tabel')->find($id);
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

        $request = DB::table('karyawan_tabel')->where('id', $id)->update([
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
        $karyawan = DB::table('karyawan_tabel')->where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil di Hapus');
        return redirect('/karyawan');
    }
}
