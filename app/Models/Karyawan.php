<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan_tabel';

    protected $fillable = [
        'nama',
        'jabatan',
        'departemen',
        'alamat',
        'jenis_kelamin',
        'tanggal_lahir',
    ];
}
