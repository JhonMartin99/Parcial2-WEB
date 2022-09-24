<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\cliente;
use Faker\Generator as Faker;

$factory->define(cliente::class, function (Faker $faker) {
    return [
        'dpi' =>  $faker->unique()->numberBetween(1111111111111, 9999999999999),
        'nombre' => $faker->firstName(),
        'apellido' => $faker->lastName(),
        'email' => $faker->unique()->email,
        'tel' => $faker->phoneNumber('+502 #### ####'),
        'direccion' => $faker->sentence
    ];
});
