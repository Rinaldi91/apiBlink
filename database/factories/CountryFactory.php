<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Country::class, function (Faker $faker) {
    return [
        'code' => $faker->numberBetween(1,100),
        'name' => $faker->word,
    ];
});
