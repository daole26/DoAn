<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_khuyen_mai');
            $table->unsignedBigInteger('id_hinh_thuc_tour');
            $table->unsignedBigInteger('id_danh_muc');
            $table->string('ten_tour');
            $table->string('ma_tour');
            $table->string('thoi_gian');
            $table->string('diem_khoi_hanh');
            $table->text('lich_trinh');
            $table->string('phuong_tien');
            $table->decimal('gia_tour');
            $table->text('chuong_trinh');
            $table->text('dieu_kien');
            $table->text('phu_luc');
            $table->string('slug');
            $table->foreign('id_danh_muc')->references('id')->on('danh_mucs');
            $table->foreign('id_hinh_thuc_tour')->references('id')->on('hinh_thuc_tours');
            $table->foreign('id_khuyen_mai')->references('id')->on('khuyen_mais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
