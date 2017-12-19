<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    //
    protected $table = 'usernew';


    protected $fillable = [
        'name', 'email', 'password','nip','jabatan','pangkat','gelar', 'foto', 'role'
    ];
}
