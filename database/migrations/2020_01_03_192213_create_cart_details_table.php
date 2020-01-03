<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            //fk header   card_id
            $table->unsignedBigInteger('card_id')->unsigned();// admiten valoren nulos
            $table->foreign('card_id')->references('id')->on('carts')->onDelete('cascade');

            // fk product_id
            $table->unsignedBigInteger('product_id')->unsigned();// admiten valoren nulos
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->float('quantity');
            $table->integer('discount'); // %
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
        Schema::dropIfExists('cart_details');
    }
}
