<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJPERSONILsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('j_p_e_r_s_o_n_i_ls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('tgl');
            $table->string('jam');
            $table->string('tempat');
            $table->string('agenda');
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
        Schema::dropIfExists('j_p_e_r_s_o_n_i_ls');
    }
}
