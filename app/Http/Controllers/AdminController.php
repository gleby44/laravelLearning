<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function __construct(){
		$this->middleware('admin');
	}
	public function getIndex(Request $request){
		echo 'Hello Admin';
		dd($request->products);
		if($request->products>0)return view('layouts.formtoproduct', $request);
		else return view('layouts.showallproduct', $request);
	}
}
