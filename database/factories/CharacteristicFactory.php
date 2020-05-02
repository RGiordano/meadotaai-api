<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Characteristic;
use Faker\Generator as Faker;

$factory->define(Characteristic::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
