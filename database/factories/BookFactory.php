<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\book;
use Faker\Generator as Faker;
use App\Author;

//mendefinisikan untuk mengisi db book
$factory->define(book::class, function (Faker $faker) {
    // variabel random number
    $randomNumber = rand(1,100);
    //Varibel cover yg nanti digunkan buat input cover
    $cover = "https://picsum.photos/id/{$randomNumber}/200/300";
    
    return [
        'author_id' => Author::inRandomOrder()->first()->id,
        'title' => $faker->sentence(4),
        'description'=> $faker->sentence(50),
        'cover' => $cover,
        'qty' => rand(10,20),
    ];
});
  