<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\_d_order;
use Faker\Generator as Faker;

$factory->define(_d_order::class, function (Faker $faker) {
    return [
        'fOrderGuid' => $faker->name(),
        'fUserId' => $faker->name(),
        'fReceiver' => $faker->name(),
        'fEmail' => $faker->email(),
        'fAddress' => $faker->name(),
        'fDate' => $faker->dateTime(),
    ];
});
