<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function( Blueprint $table){
            $table->bigIncrements('id');
            $table->text('noi_dung');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tour_id');
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('cascade');
            $table->foreign('tour_id')->references('id')->on('tours')->onUpdate('NO ACTION')->onDelete('cascade');
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
        Schema::dropIfExists('comments');
    }
}
