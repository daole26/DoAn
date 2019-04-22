<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'password' => bcrypt('123456'),
            'email' => 'demo@gmail.com',
            'ten_hien_thi' => 'Admin',
            'so_dien_thoai' => '1234567890',
            'dia_chi' => 'Da Nang',
            'token'=>'7162951503',
            'level' => 1,
        ]);
    }
}
