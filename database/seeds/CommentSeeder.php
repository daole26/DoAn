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
                'name'=>'test',
                'email'=>'test@somemail.com',
                'noi_dung'=>'lorem ipsum dolo sit amet',
                'id_tour'=>1
            ],
            [
                'name'=>'test2',
                'email'=>'test@somemail.com',
                'noi_dung'=>'lorem ipsum dolo sit amet',
                'id_tour'=>1
            ],
            [
                'name'=>'test3',
                'email'=>'test@somemail.com',
                'noi_dung'=>'lorem ipsum dolo sit amet',
                'id_tour'=>1
            ],
            [
                'name'=>'test4',
                'email'=>'test@somemail.com',
                'noi_dung'=>'lorem ipsum dolo sit amet',
                'id_tour'=>1
            ],
            [
                'name'=>'test5',
                'email'=>'test@somemail.com',
                'noi_dung'=>'lorem ipsum dolo sit amet',
                'id_tour'=>1
            ],
            [
                'name'=>'test6',
                'email'=>'test@somemail.com',
                'noi_dung'=>'lorem ipsum dolo sit amet',
                'id_tour'=>1
            ],
            [
                'name'=>'test7',
                'email'=>'test@somemail.com',
                'noi_dung'=>'lorem ipsum dolo sit amet',
                'id_tour'=>1
            ],
        ]);
    }
}
