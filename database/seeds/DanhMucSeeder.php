<?php

use Illuminate\Database\Seeder;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('danh_mucs')->insert([
            ['ten_danh_muc'=>'Tour trong nước','slug'=>''],
            ['ten_danh_muc'=>'Tour hàng ngày','slug'=>''],
            ['ten_danh_muc'=>'Tour Đà Nẵng','slug'=>''],
            ['ten_danh_muc'=>'Tour sự kiện nổi bật','slug'=>''],
            ['ten_danh_muc'=>'Tour nước ngoài','slug'=>''],
            ['ten_danh_muc'=>'Tour Miền Bắc','slug'=>''],
            ['ten_danh_muc'=>'Tour Miền Trung','slug'=>''],
            ['ten_danh_muc'=>'Tour Miền Nam','slug'=>''],
            ['ten_danh_muc'=>'Tour Bà Nà','slug'=>''],
            ['ten_danh_muc'=>'Tour Hội An','slug'=>''],
            ['ten_danh_muc'=>'Tour Huế','slug'=>''],
            ['ten_danh_muc'=>'Tour Cù Lao Chàm','slug'=>''],
            ['ten_danh_muc'=>'Tour nước ngoài','slug'=>''],
            ['ten_danh_muc'=>'Tour Sơn Trà','slug'=>''],
            ['ten_danh_muc'=>'Tour Đà Nẵng 3 ngày 2 đêm','slug'=>''],
            ['ten_danh_muc'=>'Tour Đà Nẵng trong ngày','slug'=>''],
            ['ten_danh_muc'=>'Tour Đà Nẵng 2 ngày 1 đêm','slug'=>''],
            ['ten_danh_muc'=>'Tour Đà Nẵng 4 ngày 3 đêm','slug'=>''],
            ['ten_danh_muc'=>'Tour Đà Nẵng 5 ngày 4 đêm','slug'=>'']
        ]);
    }
}
