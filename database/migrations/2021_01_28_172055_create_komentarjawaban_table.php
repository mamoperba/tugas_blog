<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarjawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentarjawaban', function (Blueprint $table) {
            $table->id();
            $table->string('isi', 255);
            $table->date('tanggal_dibuat');
            $table->timestamps();

            $table->unsignedBigInteger('jawaban_id');
            $table->unsignedBigInteger('profil_id');

            $table->foreign('jawaban_id')->references('id')->on('jawaban');
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
        Schema::dropIfExists('komentarjawaban');
    }
}
