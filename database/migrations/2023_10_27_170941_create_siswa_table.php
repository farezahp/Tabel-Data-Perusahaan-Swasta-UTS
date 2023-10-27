<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->string('no_pendaftaran', 9)->unique()->primary();
            $table->string('nama', 50);
            $table->string('alamat', 255);
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin', 1);
            $table->string('asal_sekolah', 50);
            $table->integer('agama_id');
            $table->decimal('nilai_ind', 8, 2);
            $table->decimal('nilai_ipa', 8, 2);
            $table->decimal('nilai_mtk', 8, 2);
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
        Schema::dropIfExists('siswa');
    }
}