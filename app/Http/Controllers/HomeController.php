<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	public function postIndex(ProductRequest $r){
		if($_FILES){
			$picture=\App::make('\App\Libs\Imag')->url($_FILES['pic']['tmp_name']);
		}
		else $picture='';
		$r['picture']=$picture;
		Product::create($r->all());
		return redirect('home');
	}
}
