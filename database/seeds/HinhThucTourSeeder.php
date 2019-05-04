<?php

use Illuminate\Database\Seeder;

class HinhThucTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hinh_thuc_tours')->insert([
            ['hinh_thuc'=>'Tour riêng','slug'=>'tour-rieng'],
            ['hinh_thuc'=>'Tour ghép','slug'=>'tour-ghep'],
            ['hinh_thuc'=>'Tour ghép đoàn','slug'=>'tour-ghep-doan'],
            ['hinh_thuc'=>'Tour ghép tiêu chuẩn','slug'=>'tour-ghep-tieu-chuan'],
            ['hinh_thuc'=>'Tour nước ngoài','slug'=>'tour-nuoc-ngoai']
        ]);
    }
}
