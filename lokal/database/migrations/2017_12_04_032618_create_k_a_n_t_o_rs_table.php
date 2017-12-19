<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKANTORsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k_a_n_t_o_rs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kantor');
            $table->string('alamat_kantor');
            $table->string('logo_kantor');
            $table->string('telp_kantor');
            $table->string('fax_kantor');
            $table->string('email_kantor');
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
        Schema::dropIfExists('k_a_n_t_o_rs');
    }
}
