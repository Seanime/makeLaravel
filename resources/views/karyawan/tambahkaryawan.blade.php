@extends('layouts.admin')
@section('judul', 'Tambah Data Karyawan')

@section('content')
<div class="p-3">
    <form action="/karyawan" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama karyawan">
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan jabatan karyawan">
            @error('jabatan')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="departemen" class="form-label">Departemen</label>
            <input type="text" class="form-control" id="departemen" name="departemen" placeholder="Masukkan departemen karyawan">
            @error('departemen')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat karyawan">
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <div class="form-check form-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki">
                <label class="form-check-label mr-3" for="laki-laki">
                    Laki-laki
                </label>
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                <label class="form-check-label" for="perempuan">
                    Perempuan
                </label>
            </div>
            
            @error('jenis_kelamin')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>        
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
            @error('tanggal_lahir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mr-2">Tambah</button>
        <a href="/karyawan" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
