<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table='Peminjaman';
    protected $fillable=['buku_id', 'anggota_id', 'petugas_id',];
}
