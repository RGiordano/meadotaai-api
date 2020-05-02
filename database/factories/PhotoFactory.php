<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Photo;
use App\Entities\Shelter;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    return [
        'path' => $faker->imageUrl(),
        'title' => $faker->text(),
        'description' => $faker->text(),
        'imageable_type' => 'App\Entities\Shelter',
        'imageable_id' => factory(Shelter::class),
    ];
});
