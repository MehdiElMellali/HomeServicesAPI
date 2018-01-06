<?php

use Faker\Generator as Faker;
use App\User;
use App\Service;
use App\Order;
use App\Review;

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

$factory->define(User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'verified' => $verified = $faker->randomElement([User::VERIFIED_USER, User::UNVERIFIED_USER]),
        'verificatoin_token' => $verified == User::VERIFIED_USER ? null : User::generateVerificationCode(),
        'admin' =>  $faker->randomElement([User::ADMIN_USER, User::REGULAR_USER]),
    ];
});

$factory->define(Service::class, function (Faker $faker) {
    static $password;

    return [
        'title' => $faker->word	,
        'description' => $faker->paragraph(1),
        'images' => $faker->randomElement(['1.jpg','2.jpg','3.jpg']),
        
    ];
});

$factory->define(Order::class, function (Faker $faker) {
    static $password;

    return [
        'customer_id' => User::all()->random()->id	,
        'service_id' => Service::all()->random()->id,
    ];
});

$factory->define(Review::class, function (Faker $faker) {
    static $password;

    return [
        'customer_id' => User::all()->random()->id,
        'service_id' => Service::all()->random()->id,
        'rating' => $faker->randomElement([Review::UNRATING,Review::RATING]),
        'comment' => $faker->paragraph(1),
        'approved' => $faker->randomElement([Review::UNAPPROVED,Review::APPROVED]),
    ];
});
