<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table='Peminjaman';
    protected $fillable=['buku_id', 'anggota_id', 'petugas_id',];

    public function Anggota ()
    {
    	return $this->belongsTo('App\Model\Anggota');
    }

    public function Petugas ()
    {
    	return $this->belongsTo('App\Model\Petugas');
    }
}
