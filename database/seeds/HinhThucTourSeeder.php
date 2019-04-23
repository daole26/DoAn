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
            ['hinh_thuc'=>'Tour riêng'],
            ['hinh_thuc'=>'Tour ghép'],
            ['hinh_thuc'=>'Tour ghép đoàn'],
            ['hinh_thuc'=>'Tour ghép tiêu chuẩn'],
            ['hinh_thuc'=>'Tour nước ngoài']
        ]);
    }
}
