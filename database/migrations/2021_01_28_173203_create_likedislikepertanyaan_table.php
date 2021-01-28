<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikedislikepertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likedislikepertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('pertanyaan_id');
            $table->unsignedBigInteger('profil_id');
            $table->integer('poin', 11);
            $table->timestamps();

            $table->foreign('pertanyaan_id')->references('id')->on('jawaban');
            $table->foreign('profil_id')->references('id')->on('profil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likedislikepertanyaan');
    }
}
