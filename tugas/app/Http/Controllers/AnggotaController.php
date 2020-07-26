<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Anggota;

class AnggotaController extends Controller
{
   public function __construct()
   {
      $this->model=new Anggota();
   }

   public function index()
   {
   	$anggota=$this->model->all();

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
   	 $this->model->create($request->all());

   	 return redirect('/Anggota');

   }

   public function edit($id)
   {
      $anggota=$this->model->find($id);
      return view('Anggota.edit',compact('anggota'));
   }

   public function update(Request $request,$id)
   {
      $this->model->find($id)->update($request->all());
      return redirect('/Anggota');
   }

   public function delete($id)
   {
      $this->model->find($id)->delete();
      return redirect('/Anggota');
   }
}
