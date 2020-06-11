<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    $music = App\Music::pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($users),
        'music_id' => $faker->randomElement($music),
        'body' => $faker->sentence
    ];
});
