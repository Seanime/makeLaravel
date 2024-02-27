<!-- resources/views/karyawan.blade.php -->

@extends('layouts.admin')
@section('judul', 'Data Karyawan')

@section('tabel')
<div class="p-3">
    <div class="mb-3 text-right">
        <a href="#" class="btn btn-success">Tambah Karyawan</a>
    </div>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Gaji</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($karyawan as $data)
            <tr>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->jabatan }}</td>
                <td>{{ $data->gaji }}</td>
                <td>
                    <a href="{{ route('karyawan.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('karyawan.destroy', $data->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
