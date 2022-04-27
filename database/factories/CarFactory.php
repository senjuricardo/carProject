<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand_id' => rand(1, 10),
        'owner_id' => rand(1, 50),
        'registration' => $faker->city,
        'year_of_registration' => $faker->dateTimeBetween('1990-01-01', '2020-12-31')->format('Y/m/d'),
        'color' => $faker->colorName


    ];
});
