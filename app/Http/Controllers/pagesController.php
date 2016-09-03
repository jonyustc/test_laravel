<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pagesController extends Controller
{
    //
    public function home(){
    	$people=['jony','noman','wasi'];
    	return view('welcome',compact('people'));
    }

    public function about($name=null)
    {
    	return view('about',array('name'=>$name));
    }

    public function test()
    {
    	# code...
    	return view('test');
    }

}
