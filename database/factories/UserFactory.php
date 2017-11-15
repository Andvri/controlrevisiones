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
$factory->define(App\Revisions::class, function (Faker $faker){
    return [
        'nota_adicional' => $faker->name,
        'revisada' => 1,
        'integrantes' => $faker->name,
        'repositorio' => $faker->name,
    ];
});
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

$factory->define(App\Subject::class, function (Faker $faker) {


    return [
        'name' => $faker->name,
        'NTests' => random_int(2,5),
        'UC' => random_int(1,6),
        'code' => random_int(1000,6000),
    ];
});

$factory->define(App\Section::class, function (Faker $faker) {
    return [
        'NSection' => random_int(1,9),
    ];
});

$factory->define(App\Test::class, function (Faker $faker) {
    return [
       // 'Ntest' => random_int(1,9),
        'percentage' => random_int(20,100),
    ];
});


$factory->define(App\Evaluation::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'evaluation_date' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        'enable' => 1,
        'maximum_participants' => random_int(1,5),
        'maximum_score' => random_int(1,100),
    ];
});