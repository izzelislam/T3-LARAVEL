<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('keluar');
        $this->middleware('auth')->only('keluar');
    }
    public function login()
    {
    	return view('Auth.login');
    }

    public function loginProses(Request $request)
    {
    	$op=$request->only('email','password');
    	$sukses=Auth::attempt($op);

    	if ($sukses) {
    		return redirect()->intended('/Anggota');
    	}else{
    		return redirect()->back();
    	}
    }

    public function daftar()
    {
    	return view('Auth.register');
    }

    public function daftarProses(Request $request)
    {
    	$enkrip=bcrypt($request->password);
    	$request->merge(['password'=>$enkrip]);

    	User::create($request->all());
    	return redirect('/login');

    }

    public function keluar()
    {
        Auth::logout();
        return redirect('/login');
    }
}
