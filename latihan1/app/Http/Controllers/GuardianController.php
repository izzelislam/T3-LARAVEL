<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Guardian;

class GuardianController extends Controller
{
    public function index()
    {
    	$guardians = Guardian::all();

    	return view('guardian.index',compact('guardians'));
    }

    public function create()
    {
    	return view('guardian.create');
    }

    public function store(Request $request)
    {
    	// $guar=new Guardian();
    	// $guar->name=$request->name;
    	// $guar->nik=$request->nik;
    	// $guar->gender=$request->gender;
    	// $guar->phone=$request->phone;
    	// $guar->birth_date=$request->date;
    	// $guar->address=$request->address;
    	// $guar->is_parent=$request->is_parent;

    	// $guar->save();
    	Guardian::create($request->all());
    	return redirect('/guardians');

    }
}
