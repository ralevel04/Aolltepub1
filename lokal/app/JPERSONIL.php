<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JPERSONIL extends Model
{
    //
    protected $table = 'j_p_e_r_s_o_n_i_ls';

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
