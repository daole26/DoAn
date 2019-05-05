<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoTroTrucTuyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ho_tro_truc_tuyens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hinh_anh');
            $table->string('ten');
            $table->string('url');
            $table->string('sdt');
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
        Schema::dropIfExists('ho_tro_truc_tuyens');
    }
}
