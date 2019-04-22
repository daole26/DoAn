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
            $table->string('ma_dat_tour');
            $table->integer('ngay_dat');
            $table->integer('thang');
            $table->integer('nam');
            $table->string('ho_ten_KH');
            $table->string('email');
            $table->string('dia_chi');
            $table->integer('nguoi_lon')->default (1);
            $table->integer('tre_em')->default (0);
            $table->integer('em_be')->default (0);
            $table->text('ghi_chu')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        $table->dropForeign(['users_id']);
    }
}
