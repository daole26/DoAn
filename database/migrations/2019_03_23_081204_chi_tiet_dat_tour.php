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
            $table->decimal('gia_tour');
            $table->decimal('tong_tien');
            $table->text('ghi_chu')->nullable();
            $table->unsignedBigInteger('tour_id');
            $table->unsignedBigInteger('dat_tour_id');
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
            $table->foreign('dat_tour_id')->references('id')->on('dat_tours')->onDelete('cascade');
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
        $table->dropForeign(['tour_id']);
        $table->dropForeign(['dat_tour_id']);
    }
}
