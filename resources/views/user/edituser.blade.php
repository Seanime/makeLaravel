@extends('layouts.admin')

@section('content')
<div class="p-3">
    <h2>Edit Data Profil Karyawan {{ $users->id }}</h2>
    <form action="/user/{{ $users->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $users->name }}" id="nama" placeholder="Masukkan Nama">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $users->email }}" id="email" placeholder="Masukkan Email">
            @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <a href="/user" class="btn btn-danger my-3">Kembali</a>
        <button type="submit" class="btn btn-success">Update Data</button>
    </form>
</div>
@endsection
