<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data=Article::all();
        return view('admin.article.index')->with(['article'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();
        return view('admin.article.create')->with(['category'=>$data]);
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'category'=>'required',
            'title'=>'required',
            'article'=>'required',
        ]);

        Article::create([
            'category_id'=>$request->category,
            'title'=>$request->title,
            'articles'=>$request->article,
        ]);

        return redirect()->route('article')->with('berhasil','berhasil insert data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Article::find($id);
        $data->delete();

        return redirect()->route('article')->with('hapus','data berhasil di hapus');
    }
}
