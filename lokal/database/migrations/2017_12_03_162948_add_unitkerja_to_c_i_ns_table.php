<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUnitkerjaToCINsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('c_i_ns', function (Blueprint $table) {
            $table->integer('id_atasan')->nullable()->after('berkas');
            $table->string('author')->nullable()->after('id_atasan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('c_i_ns', function (Blueprint $table) {
            $table->integer('id_atasan');
            $table->string('author');
            
        });
    }
}
