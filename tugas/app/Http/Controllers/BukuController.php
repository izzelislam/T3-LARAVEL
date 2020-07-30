<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Buku;

class BukuController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
       $this->model=new Buku();
    }

    public function index()
    {
    	$Buku=$this->model->all();

    	return view('Buku.index',compact('Buku'));
    }

    public function create()
    {
    	return view('Buku.create');
    }

    public function store(Request $request)
    {
    	 $request->validate([
    	 	'judul'=>'required',
    	 	'penulis'=>'required',
    	 	'penerbit'=>'required',
            'jumlah'=>'required',
            'kondisi'=>'required'
    	 ]);
    	 $this->model->create($request->all());

    	 return redirect('/Buku');

    }

    public function edit($id)
    {
       $Buku=$this->model->find($id);
       return view('Buku.edit',compact('Buku'));
    }

    public function update(Request $request,$id)
    {
       $this->model->find($id)->update($request->all());
       return redirect('/Buku');
    }

    public function delete($id)
    {
       $this->model->find($id)->delete();
       return redirect('/Buku');
    }
}
