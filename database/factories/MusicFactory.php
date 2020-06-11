<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Music;
use Faker\Generator as Faker;

$factory->define(Music::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'genres' => $faker->word,
        'listens' => $faker->randomNumber
    ];
});
