<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            // $table->integer("product_id")->unsigned()->index();
            // $table->foreign("product_id")->references("id")->on("reviews")->onDelete("cascade");
            $table->string("name");
            $table->text("detail");
            $table->integer("price");
            $table->integer("discount");
            $table->string("stock");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
