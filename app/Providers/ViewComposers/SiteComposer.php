<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Catalog;

class SiteComposer
{
    public function compose(View $view){
		$url=url()->full();
		$arr=explode('/',$url);
		$end=end($arr);
		$view->with('end',$end);
		$catalogs=Catalog::all();
		$view->with('catalogs',$catalogs);
	}
}
