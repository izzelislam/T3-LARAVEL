<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Anggota;

class AnggotaController extends Controller
{
   public function index()
   {
   	$anggota=Anggota::all();

   	return view('Anggota.index',compact('anggota'));
   }
}
