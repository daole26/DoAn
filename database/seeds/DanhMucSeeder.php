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
            ['ten_danh_muc'=>'Tour trong nước','slug'=>'tour-trong-nuoc','parent_id'=>null],
            ['ten_danh_muc'=>'Tour hàng ngày','slug'=>'tour-hang-ngay','parent_id'=>null],
            ['ten_danh_muc'=>'Tour Đà Nẵng','slug'=>'tour-DN','parent_id'=>null],
            ['ten_danh_muc'=>'Tour sự kiện nổi bật','slug'=>'tour-SKNB','parent_id'=>null],
            ['ten_danh_muc'=>'Tour nước ngoài','slug'=>'tour-nuoc-ngoai','parent_id'=>null],
            ['ten_danh_muc'=>'Tour Miền Bắc','slug'=>'tour-mien-bac','parent_id'=>1],
            ['ten_danh_muc'=>'Tour Miền Trung','slug'=>'tour-mien-trung','parent_id'=>1],
            ['ten_danh_muc'=>'Tour Miền Nam','slug'=>'tour-mien-nam','parent_id'=>1],
            ['ten_danh_muc'=>'Tour Bà Nà','slug'=>'tour-ba-na','parent_id'=>1],
            ['ten_danh_muc'=>'Tour Hội An','slug'=>'tour-hoi-an','parent_id'=>1],
            ['ten_danh_muc'=>'Tour Huế','slug'=>'tour-hue','parent_id'=>1],
            ['ten_danh_muc'=>'Tour Cù Lao Chàm','slug'=>'tour-cu-lao-cham','parent_id'=>null],
            ['ten_danh_muc'=>'Tour Sơn Trà','slug'=>'tour-son-tra','parent_id'=>1],
            ['ten_danh_muc'=>'Tour Đà Nẵng 3 ngày 2 đêm','slug'=>'tour-DN-3-2','parent_id'=>3],
            ['ten_danh_muc'=>'Tour Đà Nẵng trong ngày','slug'=>'tour-trong-ngay','parent_id'=>3],
            ['ten_danh_muc'=>'Tour Đà Nẵng 2 ngày 1 đêm','slug'=>'tour-DN-2-1','parent_id'=>3],
            ['ten_danh_muc'=>'Tour Đà Nẵng 4 ngày 3 đêm','slug'=>'tour-DN-4-3','parent_id'=>3],
            ['ten_danh_muc'=>'Tour Đà Nẵng 5 ngày 4 đêm','slug'=>'tour-DN-5-4','parent_id'=>3]
        ]);
    }
}
