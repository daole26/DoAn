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
                'ten_tour'=>'adfadsf',
                'ma_tour'=>'123ABC',
                'thoi_gian'=>'fadsfadsf',
                'diem_khoi_hanh'=>'dfasdf',
                'lich_trinh'=>'<p>dfasdfasd</p>',
                'phuong_tien'=>'adfasdf',
                'gia_tour'=>1.23,
                'chuong_trinh'=>'<p>adfadfa</p>',
                'dieu_kien'=>'<p>adfadfa</p>',
                'phu_luc'=>'<p>adfadfa</p>',
                'slug'=>'adfadsf'
            ]
        ]);
    }
}
