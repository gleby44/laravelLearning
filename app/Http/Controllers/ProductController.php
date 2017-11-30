<?php

namespace App\Http\Controllers;

use App\product;

class ProductController extends Controller
{
    public function getAll(){
		$all=Product::all();
		return view('products',compact('all'));
	}
	public function getOne($id){
		$all=Product::find($id);
		return view('product',compact('all'));
	}
}
