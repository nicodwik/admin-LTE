<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_jawaban', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isi', 255)->nullable();
            $table->integer('jawaban_id')->unsigned();
            $table->integer('profil_id')->unsigned();
            $table->timestamps();

            $table->foreign('jawaban_id')->references('id')->on('jawaban')->onDelete('cascade');
            $table->foreign('profil_id')->references('id')->on('profil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_jawaban');
    }
}
