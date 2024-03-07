@extends('layouts.admin')

@section('judul')
Detail Profil Karyawan
@endsection

@section('content')

<div class="p-3">
    <div class="card" style="width: 29rem;">
        <div class="card-body">
            <h3 class="card-title">Detail Data Profil Karyawan ke-{{$karyawan->id}}</h3>
            <h6>Nama: {{ $karyawan->nama }}</h6>
            <h6>Jabatan: {{ $karyawan->jabatan }}</h6>
            <h6>Departemen: {{ $karyawan->departemen }}</h6>
            <h6>Alamat: {{ $karyawan->alamat }}</h6>
            <h6>Jenis Kelamin: {{ $karyawan->jenis_kelamin }}</h6>
            <h6>Tanggal Lahir: {{ $karyawan->tanggal_lahir }}</h6>
        </div>
    </div>

    <a href="/karyawan" class="btn btn-primary my-3">Kembali</a>
</div>

@endsection
