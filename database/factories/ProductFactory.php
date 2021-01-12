<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->sentence(2),
        'product_detail' => $faker->sentence(20),
        'product_price' => $faker->numberBetween(100, 5000),

    ];
});
