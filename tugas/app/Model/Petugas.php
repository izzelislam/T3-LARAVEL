<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $tabble='petugas';
    protected $fillable=['nama','no_petugas','email','alamat'];
}
