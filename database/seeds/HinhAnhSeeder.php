<?php

use Illuminate\Database\Seeder;

class HinhAnhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('hinh_anhs')->insert([
            'image_type'=>'tour',
            'image_id'=>1,
            'hinh_anh'=>'1556708337.jpg'
        ]);
    }
}
