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
            $table->timestamp('ngay_dat');
            $table->integer('thoi_gian');
            $table->integer('nguoi_lon')->default (1);
            $table->integer('tre_em')->default (0);
            $table->integer('em_be')->default (0);
            $table->integer('giam_gia')->default (0);
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
