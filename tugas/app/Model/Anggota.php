<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table='anggota';
    protected $fillable=['nama','no_anggota','email','alamat'];

    public function Peminjaman()
    {
    	return $this->hasMany('App\Model\Peminjaman');
    }
}
