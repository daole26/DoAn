<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChiTietDatTour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_dat_tours', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_tour');
            $table->unsignedBigInteger('id_dat_tour');
            $table->decimal('gia_tien');
            $table->text('ghi_chu')->nullable();
            $table->foreign('id_tour')->references('id')->on('tours')->onDelete('cascade');
            $table->foreign('id_dat_tour')->references('id')->on('dat_tours')->onDelete('cascade');
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
        Schema::dropIfExists('chi_tiet_dat_tours');
    }
}
