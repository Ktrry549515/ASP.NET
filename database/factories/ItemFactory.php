<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'title' => $faker->name(),
        'price' => $faker->numberBetween(0, 100),
        'size' => $faker->randomNumber($nbDigits = null, $strict = false),
        'pic' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
