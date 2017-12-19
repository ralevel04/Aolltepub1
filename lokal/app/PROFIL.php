<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PROFIL extends Model
{
    
    protected $table = 'users';


    protected $fillable = [
        'name', 'email', 'password' , 'nip','jabatan','pangkat','gelar', 'foto', 'role'
    ];


    public function UnitKerja(){
    	return $this->belongsTo('App\UnitKerja','id_atasan');
    }
}
