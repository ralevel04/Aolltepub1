<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePROFILsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_r_o_f_i_ls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nip')->default('belum diisi');
            $table->string('pangkat')->default('belum diisi');
            $table->string('jabatan')->default('belum diisi');
            $table->string('email')->default('belum diisi');
            $table->string('foto')->default('default.jpg');
            $table->integer('id_atasan')->nullable();
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
        Schema::dropIfExists('p_r_o_f_i_ls');
    }
}
