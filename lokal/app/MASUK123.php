<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keluar123ß extends Model
{
    protected $table = 'm_a_s_u_ks';

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
}
