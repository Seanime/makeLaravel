@extends('layouts.admin')

@section('judul', 'Data Karyawan')

@section('tabel')
<div class="container-fluid">
    @if(Auth::user() && Auth::user()->isAdmin())
    <a href="/karyawan/export/excel" class="btn btn-success my-3">
        <i class="fas fa-print mr-2"></i>Export Excel
    </a>
    @endif
    {{-- Kelola Profile Pelanggan --}}
    <a href="/tambahkaryawan" class="btn btn-primary my-3">Tambah Data Karyawan</a>
 
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col" class="sortable">No</th>
                <th scope="col" class="sortable">Nama</th>
                <th scope="col" class="sortable">Jabatan</th>
                <th scope="col" class="sortable">Departemen</th>
                <th scope="col" class="sortable">Alamat</th>
                <th scope="col" class="sortable">Jenis Kelamin</th>
                <th scope="col" class="sortable">Tanggal Lahir</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($karyawan as $key => $value)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$value->nama}}</td>
                <td>{{$value->jabatan}}</td>
                <td>{{$value->departemen}}</td>
                <td>{{$value->alamat}}</td>
                <td>{{$value->jenis_kelamin}}</td>
                <td>{{$value->tanggal_lahir}}</td>
                <td class="mr-3">
                    <a href="/karyawan/{{$value->id}}" class="btn btn-primary" title="Lihat Detail"><i class="fas fa-eye mr-2"></i>Lihat Data</a>
                    <a href="/karyawan/{{$value->id}}/edit" class="btn btn-warning" title="Edit Data"><i class="fas fa-edit mr-2"></i>Edit</a>
                    <a href="/karyawan/{{$value->id}}" class="btn btn-danger mt-1" title="Hapus Data" data-confirm-delete="true"><i class="fas fa-trash-alt mr-2"></i>Hapus</a>                    
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="9">No data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"
@endsection