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
            $table->string('ten_tour');
            $table->string('ma_dat_tour');
            $table->string('hinh_anh');
            $table->string('thoi_gian');
            $table->string('diem_khoi_hanh');
            $table->text('lich_trinh');
            $table->string('phuong_tien');
            $table->decimal('gia_tour');
            $table->text('chuong_trinh');
            $table->text('dieu_kien');
            $table->text('phu_luc');
            $table->string('slug');
            $table->unsignedBigInteger('danh_muc_id');
            $table->foreign('danh_muc_id')->references('id')->on('danh_mucs')->onDelete('cascade');
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
        $table->dropForeign(['danh_muc_id']);
    }
}
