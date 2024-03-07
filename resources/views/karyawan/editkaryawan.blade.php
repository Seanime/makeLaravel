@extends('layouts.admin')

@section('content')
<div class="p-3">
    <h2>Edit Data Profil Karyawan {{$karyawan->id}} </h2>
    <form action="/karyawan/{{$karyawan->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{$karyawan->nama}}" id="nama" placeholder="Masukkan Nama">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" value="{{$karyawan->jabatan}}" id="jabatan" placeholder="Masukkan Jabatan">
            @error('jabatan')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="departemen">Departemen</label>
            <input type="text" class="form-control" name="departemen" value="{{$karyawan->departemen}}" id="departemen" placeholder="Masukkan Departemen">
            @error('departemen')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{$karyawan->alamat}}" id="alamat" placeholder="Masukkan Alamat">
            @error('alamat')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                <option value="Laki-laki" {{$karyawan->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                <option value="Perempuan" {{$karyawan->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="{{$karyawan->tanggal_lahir}}" id="tanggal_lahir">
            @error('tanggal_lahir')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <a href="/karyawan" class="btn btn-danger my-3">Kembali</a>
        <button type="submit" class="btn btn-success">Update Data</button>
    </form>
</div>

@endsection
