<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SMasuk extends Model
{
    protected $table = 'srt-masuk';

    //buat excel
    protected $fillable =
    					[
    					'no_agenda',
							'asal_surat',
							'perihal',
							'tgl_masuk',
							'no_surat',
							'tgl_surat',
							'penerima',
							'pengolah',
							'posisi',
							'keterangan',
              				'id_atasan',
							'berkas'
    					];

    public function UnitAtasan(){
    	return $this->belongsTo('App\UnitAtasan','id_atasan');
    }
}
