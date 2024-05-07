@extends('layouts.admin')

@section('content')
<div class="p-3">
    <h2>Edit Data Profil Karyawan {{ $user->id }}</h2>
    <form action="/user/{{ $user->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $user->name }}" id="nama" placeholder="Masukkan Nama">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}" id="email" placeholder="Masukkan Email">
            @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Role</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="role" id="admin" value="admin" {{ $user->role === 'admin' ? 'checked' : '' }}>
                <label class="form-check-label" for="admin">Admin</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="role" id="user" value="user" {{ $user->role === 'user' ? 'checked' : '' }}>
                <label class="form-check-label" for="user">User</label>
            </div>
            @error('role')
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
