<?php

use Illuminate\Database\Seeder;
use App\Catalog;
class CatalogctSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      {
		Catalog::insert([
		'name'=>'Компьютеры',
		'body'=>'Описание',
		'meta'=>'string'
		]);
        
    }
    }
}
