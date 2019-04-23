<?php

use Faker\Generator as Faker;

$factory->define('App\danh_muc', function (Faker $faker) {
    return [
        'ten_danh_muc' => $faker->name,
        'slug' => $faker->slug
    ];
});
