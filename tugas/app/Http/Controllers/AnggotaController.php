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

   public function create()
   {
   	return view('Anggota.create');
   }

   public function store(Request $request)
   {
   	 $request->validate([
   	 	'nama'=>'required',
   	 	'no_anggota'=>'required |size:20',
   	 	'email'=>'required',
   	 	'alamat'=>'required'
   	 ]);
   	 Anggota::create($request->all());

   	 return redirect('/Anggota');

   }
}
