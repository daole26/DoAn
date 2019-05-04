<?php

use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tours')->insert([
            [
                'id_khuyen_mai'=>1,
                'id_hinh_thuc_tour'=>1,
                'id_danh_muc'=>1,
                'ten_tour'=>'Tour Đà Nẵng đi Cù Lao Chàm',
                'ma_tour'=>'123ABC',
                'thoi_gian'=>'1 ngày 2 đêm',
                'diem_khoi_hanh'=>'Đà Nẵng',
                'lich_trinh'=>'<p>Đang cập nhật</p>',
                'phuong_tien'=>'Máy bay trực thăng',
                'gia_tour'=>2000,
                'chuong_trinh'=>'<p>Đang cập nhật</p>',
                'dieu_kien'=>'<p>Không có điều kiện</p>',
                'phu_luc'=>'<p>Đây là phụ lục</p>',
                'slug'=>'tour1'
            ]
        ]);
    }
}
