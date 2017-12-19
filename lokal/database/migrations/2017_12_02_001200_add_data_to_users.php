<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDataToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nip')->nullable()->after('name');
            $table->string('pangkat')->nullable()->after('nip');
            $table->string('jabatan')->nullable()->after('nip');
            $table->string('gelar')->nullable()->after('jabatan');
            $table->string('foto')->default('default.jpg')->after('gelar');
            $table->integer('id_atasan')->nullable()->after('foto');
            $table->string('role')->default('user')->after('id_atasan');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users');
    }
}


/*
1. Nama
2. NIP
3. Pangkat
4. Jabatan
5. Gelar
6. Role
7. id_atasan
8. Foto




*/