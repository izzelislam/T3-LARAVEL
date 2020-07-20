<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\post;

class PostController extends Controller
{
    public function pos($hasil){
    	$hasil1=post::where('slug',$hasil)->firstOrFail();
    	// dd($hasil1);

    	// if ($hasil1 == null) {
    	// 	abort(404,'nothing');
    	// }

    	return view('post',['post'=>$hasil1]);
    }
}
