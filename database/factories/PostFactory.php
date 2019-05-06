<?php

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Post::class, function (Faker $faker) {
  return [
    'name' => $faker->realText(120,2),
    'link' => $faker->url,
    'picture' => $faker->imageUrl(rand(200,500),rand(200,500)),
    'description' => $faker->realText(rand(10,20)),
    'tags' => $faker->words(4, true),
    'rank' => rand (1*10, 5*10) / 10,
    'views' => rand(10,99),
  ];
});
