@extends('layouts.admin')

@section('judul', 'profile')

@section('content')

<div class="container-fluid">
    {{-- Kelola profile --}}
    <!-- <a href="/tambahbarang" class="btn btn-primary my-3">Tambah Data Barang</a> -->
 
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col" class="sortable">No</th>
                <th scope="col" class="sortable">Nama</th>
                <th scope="col" class="sortable">No HP</th> <!-- Added No HP -->
                <th scope="col" class="sortable">Alamat</th> <!-- Added Alamat -->
                <th scope="col" class="sortable">Tanggal Lahir</th> <!-- Added Tanggal Lahir -->
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($profile as $key => $value)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$value->nama}}</td>
                <td>{{$value->nohp}}</td> <!-- Display No HP -->
                <td>{{$value->alamat}}</td> <!-- Display Alamat -->
                <td>{{$value->tanggal_lahir}}</td> <!-- Display Tanggal Lahir -->
                <td class="mr-3">
                    <a href="/karyawan/{{$value->id}}" class="btn btn-primary" title="Lihat Detail"><i class="fas fa-eye mr-2"></i>Lihat Data</a>
                    <a href="/karyawan/{{$value->id}}/edit" class="btn btn-warning" title="Edit Data"><i class="fas fa-edit mr-2"></i>Edit</a>
                    <a href="/karyawan/{{$value->id}}" class="btn btn-danger mt-1" title="Hapus Data" data-confirm-delete="true"><i class="fas fa-trash-alt mr-2"></i>Hapus</a>                    
                    <form action="/karyawan/{{$value->id}}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-1" title="Hapus Data" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt mr-2"></i>Hapus</button>
                    </form> 
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection