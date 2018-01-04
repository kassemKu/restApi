<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        "name"     => $faker->word,
        "detials"  => $faker->paragraph,
        "price"    => $faker->numberBetween($min = 100, $max = 1000),
        "stock"    => $faker->randomDigit,
        "descount" => $faker->numberBetween($min = 2, $max = 30)
    ];
});
