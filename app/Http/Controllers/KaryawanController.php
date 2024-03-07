<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $title = 'Peringatan!';
        $text = 'Apakah anda yakin ingin menghapus?';
        $icon = "Question";
        confirmDelete($title, $text);
        $karyawan = DB::table('karyawan_tabel')->get();
        return view('karyawan.indexkaryawan', compact('karyawan'));
    }

    public function tambahkaryawan()
    {
        return view('karyawan.tambahkaryawan');
    }

    public function karyawan(Request $request)
    {
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
        $karyawan = DB::table('karyawan_tabel')->find($id);
        return view('karyawan.detailkaryawan', compact('karyawan'));
    }

    public function edit($id)
    {
        $karyawan = DB::table('karyawan_tabel')->find($id);
        return view('karyawan.editkaryawan', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
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

    public function destroy($id) {
        $karyawan = DB::table('karyawan_tabel')->where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil di Hapus');
        return redirect('/karyawan');
    }
}

