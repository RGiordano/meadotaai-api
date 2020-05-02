<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Country;
use App\Entities\State;
use App\Entities\City;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
    return [
        'country_id' => factory(Country::class),
        'state_id' => factory(State::class),
        'name' => $faker->name,
        'status' => 1,
    ];
});
