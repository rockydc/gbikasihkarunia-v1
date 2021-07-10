<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJemaatTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jemaat_tbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('pekerjaan')->nullable();
            $table->string('no_telp')->nullable();
            $table->date('tgl_lahir');
            $table->string('gender');
            $table->string('status_menikah');
            $table->text('alamat')->nullable();
            $table->date('tgl_diberkati')->nullable();
            $table->date('tgl_pernikahan')->nullable();
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
        Schema::dropIfExists('jemaat_tbl');
    }
}
