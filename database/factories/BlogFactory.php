<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\blog;
use Faker\Generator as Faker;

$factory->define(blog::class, function (Faker $faker) {
    return [
        'title'=>$faker->word, 
        'description'=>$faker->paragraph(15),   ];
});
