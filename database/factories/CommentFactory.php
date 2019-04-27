<?php

use Faker\Generator as Faker;

$factory->define('App\comment', function (Faker $faker) {
    return [
        'noi_dung' => 'Hướng dẫn viên rất dễ thương, nhiệt tình, vui vẻ. Xe chạy êm và thoải mái. Cảnh quan tuyệt vời. Một chuyến đi đáng nhớ. Nếu có dịp quay lại tôi vẫn sẽ đi tour của công ty.',
        'id_users' => function() {
            return factory('App\User')->create([
                'level' => 2,
            ])->id;
        },
        'id_tour' => function() {
            return factory('App\tour')->create([
                'ten_tour' => 'tour đi Đà Nẵng' . random_int(1, 10),
                'slug' => 'tour' . random_int(1, 10),
            ])->id;
        },
    ];
});
