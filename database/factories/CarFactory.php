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

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElements($array= array('Ford','Honda','Toyota'),1,true),
        'Model' => $faker->randomElements($array= array('Taurus','Mustang','Escape','Camry','Yaris','Prius','Accord','Corolla','Civic','Pilot'),1,true),
        'Year' => $faker->year,
    ];
});
