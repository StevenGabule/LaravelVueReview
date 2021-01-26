<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->paragraph(1),
        'body' => $faker->paragraph(30),
        'author_id' => \App\User::pluck('id')->random(),
        'published' => $faker->date(),
        'status' => random_int(0,1)
    ];
});
