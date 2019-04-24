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
            ['password' => bcrypt('123456'),
            'email' => 'demo@gmail.com',
            'ten_hien_thi' => 'Admin',
            'so_dien_thoai' => '1234567890',
            'dia_chi' => 'Da Nang',
            'token'=>'7162951503',
            'level' => 1,],
            ['password' => bcrypt('123456'),
            'email' => 'daole9797@gmail.com',
            'ten_hien_thi' => 'Dao Le',
            'so_dien_thoai' => '0397863184',
            'dia_chi' => 'Hà Tĩnh',
            'token'=>'7162951504',
            'level' => 0,],
            ['password' => bcrypt('123456'),
            'email' => 'luke26021997@gmail.com',
            'ten_hien_thi' => 'Le Duy',
            'so_dien_thoai' => '0935308876',
            'dia_chi' => 'Đà Nẵng',
            'token'=>'7162951505',
            'level' => 0,]
        ]);
        $this->call([
            ChiTietSeeder::class,
            CommentSeeder::class,
            DanhMucSeeder::class,
            DatTourSeeder::class,
            HinhAnhSeeder::class,
            HinhThucTourSeeder::class,
            KhuyenMaiSeeder::class,
            LienHeSeeder::class,
            TinTucSeeder::class,
            TourSeeder::class
        ]);
        factory('App\comment', 2) ->create();
    }
}
