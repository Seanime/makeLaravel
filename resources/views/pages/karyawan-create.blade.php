<!-- resources/views/create.blade.php -->

@extends('layouts.admin')
@section('judul', 'Tambah Data Karyawan')

@section('content')
<div class="p-3">
    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama karyawan">
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan jabatan karyawan">
        </div>
        <div class="mb-3">
            <label for="gaji" class="form-label">Gaji</label>
            <input type="text" class="form-control" id="gaji" name="gaji" placeholder="Masukkan gaji karyawan">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection
