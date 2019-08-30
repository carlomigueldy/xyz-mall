<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
        'department_id' => $faker->numberBetween($min = 1, $max = 6),
        'position_id' => $faker->numberBetween($min = 1, $max = 3),
    ];
});
