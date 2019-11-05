<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->first_name, 
        'last_name' => $faker->last_name,
        'student_number' => $faker->numberBetween($min = '10000000', $max = '99999999')
    ];
});

$factory->define(User::class, function (Faker $faker) {
    $studentNumber = $faker->numberBetween($min = '10000000', $max = '99999999');
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'student_number' => $studentNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
