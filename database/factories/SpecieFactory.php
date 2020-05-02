<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Specie;
use Faker\Generator as Faker;

$factory->define(Specie::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
