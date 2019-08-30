<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'role_id' => $faker->numberBetween($min = 1, $max = 3),
        'role_id' => $faker->numberBetween($min = 1, $max = 3),
        'role_id' => $faker->numberBetween($min = 1, $max = 3),
    ];
});
