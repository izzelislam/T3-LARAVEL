<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $data=Category::all();
        return view('admin.categori.index',['category'=>$data]);
    }

    public function create()
    {
        return view('admin.categori.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'required'
        ]);
        Category::create([
            'name'=>$request->nama
        ]);

        return redirect()->route('categori')->with('status','berhasil insert');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $categori=Category::find($id);
        return view('admin.categori.edit')->with(['categori'=>$categori]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama'=>'required'
        ]);

        $nama=$request->nama;
        $categori=Category::find($id);
        $categori->name=$nama;
        $categori->save();

        return redirect()->route('categori')->with('berhasil','data berhasil di update');
    }

    public function destroy($id)
    {
        $categori=Category::find($id);
        $categori->delete();

        return redirect()->route('categori')->with('hapus','data berhasil di hapus');
    }
}
