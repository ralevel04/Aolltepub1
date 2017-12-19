<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CIN extends Model
{
    protected $table = 'c_i_ns';

    //buat excel
    protected $fillable =
    					[
    						'no_agenda',
							'asal_surat',
							'tgl_keluar',
							'no_surat',
							'tgl_surat',							
							'perihal',
							'penerima',
							'posisi',
							'keterangan',
							'berkas', 
							'id_atasan'
    					];

   	public function UnitKerja(){
    	return $this->belongsTo('App\UnitKerja','id_atasan');
    }
}
