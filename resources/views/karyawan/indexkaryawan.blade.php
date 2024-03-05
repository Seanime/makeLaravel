@extends('layouts.admin')

@section('judul')
Data Pelanggan
@endsection
<!-- Page Heading -->

@section('tabel')

<div class="p-3">
    {{-- Kelola Profile Pelanggan --}}
    <a href="/tambahkaryawan" class="btn btn-primary my-3">Tambah Data Karyawan</a>
 
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Gaji</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($karyawan as $key => $value)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$value->nama}}</td>
                <td>{{ $value->alamat}}</td>
                <td>{{ $value->Gaji}}</td>
                <td class="mr-3">
                    <a href="/karyawan/{{$value->id}}" class="btn btn-info">Show </a>
                    <a href="/karyawan/{{$value->id}}/edit" class="btn btn-success">Edit</a>
                    <a href="/karyawan/ {{$value->id }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                </td>
</div>
</tr>
{{--tidak ada data --}}
</tbody>
@empty
<tr colspan="6">
    <td>No data</td>
</tr>
@endforelse
</table>
</div>
@endsection


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />