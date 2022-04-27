<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Owner;
use Faker\Generator as Faker;

$factory->define(Owner::class, function (Faker $faker) {
    return [
        'country_id'=> rand(1,4),
        'name' => $faker->firstName,
        'birth_date' =>  $faker->dateTimeBetween('1990-01-01', '2020-12-31')->format('Y/m/d'),
        'wallet' => $faker-> numberBetween(2000,100000),

    ];
});
