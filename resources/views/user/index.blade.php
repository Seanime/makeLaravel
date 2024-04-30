@extends('layouts.admin')

@section('judul', 'Data User')

@section('tabel')
<div class="container-fluid">
    {{-- Kelola Profile Pelanggan --}}
 
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col" class="sortable">No</th>
                <th scope="col" class="sortable">Nama</th>
                <th scope="col" class="sortable">Email</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($user as $key => $users)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                {{-- <td class="mr-3">
                    <a href="/user/{{ $users->id }}" class="btn btn-primary" title="Lihat Detail"><i class="fas fa-eye mr-2"></i>Lihat Data</a>
                    <a href="/user/{{ $users->id }}/edit" class="btn btn-warning" title="Edit Data"><i class="fas fa-edit mr-2"></i>Edit</a>
                    <form action="/user/{{ $users->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-1" title="Hapus Data" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt mr-2"></i>Hapus</button>
                    </form>
                </td> --}}
            </tr>
            @empty
            <tr>
                <td colspan="5">No data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"
@endsection
