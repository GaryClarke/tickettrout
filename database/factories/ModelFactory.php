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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker)
{
    static $password;

    return [
        'first_name'     => $faker->firstName,
        'last_name'      => $faker->lastName,
        'email'          => $faker->unique()->safeEmail,
        'gender'         => 'male',
        'avatar'         => '/avatars/1.jpeg',
        'dob'            => '14/07/1984',
        'points'         => 100,
        'region'         => 'London',
        'password'       => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Artist::class, function (Faker\Generator $faker)
{
    return [
        'name' => $faker->name,
    ];
});
