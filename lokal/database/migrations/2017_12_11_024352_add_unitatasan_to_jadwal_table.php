<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUnitatasanToJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('j_a_d_w_a_ls', function (Blueprint $table) {
            $table->integer('id_atasan')->nullable()->after('agenda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('j_a_d_w_a_ls', function (Blueprint $table) {
            $table->integer('id_atasan')->nullable()->after('agenda');
        });
    }
}
