<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class COT extends Model
{
    protected $table = 'c_o_ts';

    //buat excel
    protected $fillable =
    					[
    						'no_agenda',
							'tujuan_surat',
							'tgl_keluar',
							'no_surat',
							'tgl_surat',							
							'perihal',
							'pembuat',
							'posisi',
							'keterangan',
							'berkas', 
							'id_atasan'
    					];

    public function UnitKerja(){
    	return $this->belongsTo('App\UnitKerja','id_atasan');
    }
}
