<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // model factories
        factory(Product::class,100)->create();
            // make crea objeto mientras create crea objeto pero los guarda en la base de datos


    }
}
