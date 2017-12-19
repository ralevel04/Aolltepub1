<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    protected $table = 'unit_kerjas';

    public function srtmsk(){
    	return $this->hasMany('App\CIN');
    }

    public function srtklr(){
    	return $this->hasMany('App\COT');
    }

    public function jdwl(){
    	return $this->hasMany('App\JADWAL');
    }

    public function jpers(){
    	return $this->hasMany('App\JPERSONIL');
    }

    

    protected $fillable = ['kode','deskripsi'];
}
