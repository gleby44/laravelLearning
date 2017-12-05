<?php

namespace App\Http\Controllers;

use App\product;
use App\Catalog;

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
	public function getCat($id=0){
		$cat=Catalog::find($id);
		//$products =Product::where('catalog_id',$id)->get();
		//->all()
		//->first()
		//->paginate()
		return view('catalog',compact('cat'));
	
	}
	
	
}
