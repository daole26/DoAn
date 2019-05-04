<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatTour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_tours', function( Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_users');
            $table->string('ma_dat_tour');
            $table->string('email');
            $table->string('diachi');
            $table->string('so_dien_thoai');
            $table->datetime('ngay_dat');
            $table->datetime('ngay_khoi_hanh');
            $table->integer('nguoi_lon');
            $table->integer('tre_em');
            $table->integer('em_be');
            $table->text('ghi_chu')->nullable();
            $table->timestamps();
            $table->foreign('id_users')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dat_tours');
    }
}
