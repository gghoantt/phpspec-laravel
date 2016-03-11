<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\PhpSpec\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'name'        => $faker->name,
        'description' => 'description'
    ];
});

$factory->define(App\PhpSpec\Models\Book::class, function (Faker\Generator $faker) {
    return [
        'name'        => $faker->name,
        'category_id' => rand(1,100),
        'author'      => $faker->author,
        'publisher'   => $faker->publisher,
        'year_publish'=> $faker->year_publish,
        'price'       => rand(10000, 100000)
    ];
});
