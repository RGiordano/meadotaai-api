<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\City;
use App\Entities\Photo;
use App\Entities\Shelter;
use Faker\Generator as Faker;

$factory->define(Shelter::class, function (Faker $faker) {
    return [
        'city_id' => factory(City::class),
        'photo_id' => null,
        'name' => $faker->name(),
        'address' => $faker->address,
        'phone_number' => $faker->phoneNumber,
        'description' => $faker->text(),
    ];
});
