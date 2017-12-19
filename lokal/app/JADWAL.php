<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JADWAL extends Model
{
    
    protected $table = 'j_a_d_w_a_ls';

    //buat excel
    protected $fillable =
    					[
    						'name',
    						'tgl',
    						'jam',
    						'tempat',
    						'agenda'
    					];
    public function UnitKerja(){
        return $this->belongsTo('App\UnitKerja','id_atasan');
    }
    
}
