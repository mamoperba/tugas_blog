<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarpertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentarpertanyaan', function (Blueprint $table) {
            $table->id();
            $table->string('isi', 255);
            $table->date('tanggal_dibuat');
            $table->timestamps();
            $table->unsignedBigInteger('pertanyaan_id');
            $table->unsignedBigInteger('profil_id');

            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
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
        Schema::dropIfExists('komentarpertanyaan');
    }
}
