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

   public function edit($id)
   {
      $anggota=Anggota::find($id);
      return view('Anggota.edit',compact('anggota'));
   }

   public function update(Request $request,$id)
   {
      $anggota=Anggota::find($id);
      $anggota->nama=$request->nama;
      $anggota->no_anggota=$request->no_anggota;
      $anggota->email=$request->email;
      $anggota->alamat=$request->alamat;

      $anggota->save();

      return redirect('/Anggota');
   }

   public function delete($id)
   {
      Anggota::find($id)->delete();
      return redirect('/Anggota');
   }
}
