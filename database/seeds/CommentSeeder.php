<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'id_users'=>2,
                'noi_dung'=>'1lorem ipsum dolo sit amet',
                'id_tour'=>1
            ],
            [
                'id_users'=>2,
                'noi_dung'=>'2lorem ipsum dolo sit amet',
                'id_tour'=>1
            ],
            [
                'id_users'=>2,
                'noi_dung'=>'3lorem ipsum dolo sit amet',
                'id_tour'=>1
            ],
            [
                'id_users'=>2,
                'noi_dung'=>'4lorem ipsum dolo sit amet',
                'id_tour'=>1
            ],
            [
                'id_users'=>2,
                'noi_dung'=>'5lorem ipsum dolo sit amet',
                'id_tour'=>1
            ],
            [
                'id_users'=>2,
                'noi_dung'=>'6lorem ipsum dolo sit amet',
                'id_tour'=>1
            ],
            [
                'id_users'=>2,
                'noi_dung'=>'7lorem ipsum dolo sit amet',
                'id_tour'=>1
            ],
            [
                'id_users'=>2,
                'noi_dung'=>'8lorem ipsum dolo sit amet',
                'id_tour'=>1
            ]
        ]);
    }
}
