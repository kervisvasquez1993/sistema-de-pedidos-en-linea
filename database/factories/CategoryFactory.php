<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;


$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->words(3),
        'description' => $faker->sentence(10,),
        'description' => $faker->text,
        'price' => $faker->randomFloat(2,3,150),
        'category_id' => $faker->numberBetween(1,5)

    ];
});
