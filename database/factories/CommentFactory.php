<?php

use Faker\Generator as Faker;

$factory->define('App\comment', function (Faker $faker) {
    return [
        'noi_dung' => $faker->text,
        'users_id' => function() {
            return factory('App\User')->create([
                'level' => 2,
            ])->id;
        },
        'tour_id' => function() {
            return factory('App\tour')->create()->id;
        },
    ];
});
