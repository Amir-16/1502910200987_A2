<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Engineer;
use Faker\Generator as Faker;

$factory->define(Engineer::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'email'=>$faker->email,
        'date_of_birth'=>$faker->date($format = 'Y-m-d', $max = 'now'),
         'salary'=>$faker->numberBetween($min = 10000, $max = 90000),
         'gender' => $faker->randomElement(['male', 'female']),//the gender does not match the name as it is.
         'status' => $faker->randomElement($array = array('pending','approved')),
         'company' => $faker->company,
        'telephone' => $faker->phoneNumber,
    ];
});
