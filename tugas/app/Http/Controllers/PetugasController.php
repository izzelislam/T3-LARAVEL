<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Petugas;

class PetugasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       $this->model=new Petugas();
    }

    public function index()
    {
    	$Petugas=$this->model->all();

    	return view('Petugas.index',compact('Petugas'));
    }

    public function create()
    {
    	return view('Petugas.create');
    }

    public function store(Request $request)
    {
    	 $request->validate([
    	 	'nama'=>'required',
    	 	'no_petugas'=>'required |size:8',
    	 	'email'=>'required',
    	 	'alamat'=>'required'
    	 ]);
    	 $this->model->create($request->all());

    	 return redirect('/Petugas');

    }

    public function edit($id)
    {
       $Petugas=$this->model->find($id);
       return view('Petugas.edit',compact('Petugas'));
    }

    public function update(Request $request,$id)
    {
       $this->model->find($id)->update($request->all());
       return redirect('/Petugas');
    }

    public function delete($id)
    {
       $this->model->find($id)->delete();
       return redirect('/Petugas');
    }
}
