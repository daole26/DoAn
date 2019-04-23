<?php

use Faker\Generator as Faker;

$factory->define('App\tour', function (Faker $faker) {
    return [
        'ten_tour' =>$faker->name,
        'ma_tour' => $faker->randomLetter() . $faker->randomNumber(),
        'id_danh_muc' => function() {
            return factory('App\danh_muc')->create()->id;
        },
        'id_khuyen_mai' => 1,
        'id_hinh_thuc_tour' => 1,
        'thoi_gian' => '1 ngay 1 dem',
        'diem_khoi_hanh' => $faker->city,
        'lich_trinh' => $faker->text,
        'phuong_tien' =>$faker->word,
        'gia_tour' => random_int(100, 500),
        'chuong_trinh' => $faker->text,
        'dieu_kien' => $faker->text,
        'phu_luc' => $faker->text,
        'slug' => $faker->slug
    ];
});
