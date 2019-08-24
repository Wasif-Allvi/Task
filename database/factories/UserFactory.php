<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
//use App\User;
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

$factory->define(App\Categories::class, function (Faker $faker) {
    return [
        'cat_name' => $faker->name,
        'aisle' => $faker->randomDigit,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});

$factory->define(App\People::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'password' => $faker->password,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});

$factory->define(App\Items::class, function (Faker $faker) {
    return [
        'it_name' => $faker->name,
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});