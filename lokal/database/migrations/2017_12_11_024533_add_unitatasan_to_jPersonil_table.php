<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUnitatasanToJPersonilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('j_p_e_r_s_o_n_i_ls', function (Blueprint $table) {
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
        Schema::table('j_p_e_r_s_o_n_i_ls', function (Blueprint $table) {
            $table->integer('id_atasan')->nullable()->after('agenda');
            
        });
    }
}
