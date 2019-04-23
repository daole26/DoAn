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
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_tour');
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_tour')->references('id')->on('tours')->onDelete('cascade');
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
