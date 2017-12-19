<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCINsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_i_ns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_agenda');
            $table->string('asal_surat');
            $table->string('tgl_keluar');
            $table->string('no_surat');
            $table->string('tgl_surat');
            $table->string('perihal');
            $table->string('penerima');
            $table->string('posisi');
            $table->string('keterangan');
            $table->string('berkas')->nullable();
            //$table->integer('id_atasan')->nullable();
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
        Schema::dropIfExists('c_i_ns');
    }
}
