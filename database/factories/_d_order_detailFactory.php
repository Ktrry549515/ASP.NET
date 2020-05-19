<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\_d_order_detail;
use Faker\Generator as Faker;

$factory->define(_d_order_detail::class, function (Faker $faker) {
    return [
        'fOrderGuid' => $faker->name(),
        'fUserId' => $faker->name(),
        'fPId' => $faker->name(),
        'fName' => $faker->email(),
        'fPrice' => $faker->name(),
        'fQty' => $faker->dateTime(),
        'fIsApproved' => $faker->dateTime(),
    ];
});
