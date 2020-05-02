<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Country;
use App\Entities\State;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(State::class, function (Faker $faker) {
    return [
        'country_id' => factory(Country::class),
        'name' => $faker->name,
        'status' => 1,
    ];
});
