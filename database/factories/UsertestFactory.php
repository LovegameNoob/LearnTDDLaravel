<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Usertest;
use Faker\Generator as Faker;

$factory->define(Usertest::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'age' => rand(10,20),
        'sex' => rand(0,1),
        'created_at' => time(),
        'updated_at' => time()
    ];
});
