<?php

use Faker\Generator as Faker;

$factory->define('App\tour', function (Faker $faker) {
    return [
        'ten_tour' =>$faker->name,
        'ma_dat_tour' => $faker->randomLetter() . $faker->randomNumber(),
        'danh_muc_id' => function() {
            return factory('App\danh_muc')->create()->id;
        },
        'hinh_anh' => $faker->url,
        'thoi_gian' => '1 ngay 1 dem',
        'diem_khoi_hanh' => $faker->city,
        'lich_trinh' => $faker->text,
        'phuong_tien' =>$faker->word,
        'gia_tour' => $faker->randomNumber(),
        'chuong_trinh' => $faker->text,
        'dieu_kien' => $faker->text,
        'phu_luc' => $faker->text,
        'slug' => $faker->slug
    ];
});
