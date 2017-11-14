<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->word . "@unet.edu.ve",
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'dni' => $faker->unique()->numberBetween(1000,100000),
        'avatar' => $faker->imageUrl(300,300),
    ];
});
