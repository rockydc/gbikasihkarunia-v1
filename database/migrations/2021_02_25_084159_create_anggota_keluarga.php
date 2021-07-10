<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaKeluarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_kk_tbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kepala_id');
            $table->string('nama_anggota')->nullable();
            $table->date('tgl_baptis')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('hubungan')->nullable();
            $table->string('gender')->nullable();
            $table->string('status_menikah')->nullable();
            $table->string('pekerjaan')->nullable();
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
        Schema::dropIfExists('anggota_kk_tbl');
    }
}
