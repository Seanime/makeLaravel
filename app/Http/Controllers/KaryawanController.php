<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        //mengambil data dari tabel profile
        $karyawan = DB::table('karyawan')->get();

        //mengirim data profile ke view index
        return view('karyawan.indexkaryawan', compact('karyawan'));
    }

    public function tambahkaryawan (){
        return view ('karyawan.tambahkaryawan');
    }



}
