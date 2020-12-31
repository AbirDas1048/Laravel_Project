<?php

use Faker\Generator as Faker;

$factory->define(App\Assignment::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'address' => $faker->address,
        'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'email' => $faker->email,
		'password' => $faker->password
    ];
});
