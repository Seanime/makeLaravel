@extends('layouts.admin')
@section('judul', 'Dashboard')
@section('content')

<?php
// Mendapatkan jumlah data karyawan tanpa menggunakan model
$countKaryawan = DB::table('karyawan_tabel')->count(); // Sesuaikan dengan nama tabel yang sesuai
// Mendapatkan jumlah data user tanpa menggunakan model
$countUser = DB::table('users')->count(); // Sesuaikan dengan nama tabel yang sesuai
?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Jumlah Data Karyawan -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Jumlah Data Karyawan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countKaryawan }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Jumlah Data Karyawan -->

        <!-- Jumlah Data User (Admin Only) -->
        @if(Auth::user() && Auth::user()->isAdmin())
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Jumlah Data User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countUser }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- End Jumlah Data User -->

        <!-- Earnings (Monthly), Earnings (Annual), Tasks, Pending Requests Cards -->
        <!-- Include your existing card examples here -->

    </div>

    <!-- Content Row -->


</div>
@endsection