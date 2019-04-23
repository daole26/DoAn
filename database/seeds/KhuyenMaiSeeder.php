<?php

use Illuminate\Database\Seeder;

class KhuyenMaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khuyen_mais')->insert([
            ['khuyen_mai'=>'Tặng 50 balo cho 50 du khách đầu tiên khi đăng ký tour tại website vào ngày 1/6/2019'],
            ['khuyen_mai'=>'Tặng voucher giảm giá 20% cho du khách đăng ký tour đi Bà Nà tại website vào ngày 25/5/2019']
        ]);
    }
}
