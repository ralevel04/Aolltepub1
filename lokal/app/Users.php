<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    
    protected $table = 'users';

    public function UnitKerja(){
    	return $this->belongsTo('App\UnitKerja','id_atasan');
    }
}
