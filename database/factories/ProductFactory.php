<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        /*'name' => $faker->words(3),*/
        'name' => substr($faker->sentence(3),0,-1),
        'description' => $faker->sentence(10),
        'long_description' => $faker->text,
        'price' => $faker->randomFloat(2,5,150),
        'category_id' => $faker->numberBetween(1,5)
    ];
});
/*para buscar informacion acerca de faker
*/
