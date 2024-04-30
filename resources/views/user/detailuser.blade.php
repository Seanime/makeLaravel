@extends('layouts.admin')

@section('judul')
Detail Profil Karyawan
@endsection

@section('content')

<div class="p-3">
    <div class="card" style="width: 29rem;">
        <div class="card-body">
            <h3 class="card-title">Detail Data Profil User ke-{{$user->id}}</h3>
            <h6>Nama: {{ $user->name }}</h6>
            <h6>Email: {{ $user->email }}</h6>
        </div>
    </div>

    <a href="/user" class="btn btn-primary my-3">Kembali</a>
</div>

@endsection
