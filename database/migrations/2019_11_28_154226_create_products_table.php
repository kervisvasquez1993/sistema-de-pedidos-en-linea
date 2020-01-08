<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->text('long_description')->nullable();
            $table->float('price');
            /*fk*/
            /*codigo para generar llave foranea*/
            $table->unsignedBigInteger('category_id')->nullable();// admiten valoren nulos
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            /*fin de llave foranea*/
            $table->timestamps();
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
