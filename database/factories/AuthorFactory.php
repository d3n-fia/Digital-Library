<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

//mendefinisikan untuk mengisi db Author
$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
