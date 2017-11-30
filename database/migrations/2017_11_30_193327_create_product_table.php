<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateProductTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('product',function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->text("body")->nullable();
            $table->integer("catalog_id")->references("id")->on("catalog")->nullable();
            $table->string("photo")->nullable();
            $table->decimal("price", 15, 2)->nullable();
            $table->string("url")->nullable();
            $table->string("vip")->nullable();
            $table->string("product_code")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product');
    }

}