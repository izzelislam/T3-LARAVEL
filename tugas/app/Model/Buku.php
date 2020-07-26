<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table='buku';
    protected $fillable=['judul','penulis','penerbit','jumlah','kondisi'];
}
