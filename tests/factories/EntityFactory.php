<?php

use Stubs\User;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(Str::random(10)),
        'remember_token' => Str::random(10),
    ];
});

$factory->state(User::class, 'custom', function (Faker\Generator $faker) {

    return [
        'custom' => 'custom',
    ];
});
