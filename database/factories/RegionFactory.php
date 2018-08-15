<?php

use Faker\Generator as Faker;
use App\Model\Country;


$factory->define(App\Model\Region::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->word,
        'country_id' => function(){
        	return Country::all()->random();
        }
    ];
});
