<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KANTOR extends Model
{
    protected $table = 'k_a_n_t_o_rs';

    //buat excel
    protected $fillable =
    					[
    						'nama_kantor',
    						'logo_kantor',
    						'alamat_kantor',
    						'telp_kantor',
    						'fax_kantor',
    						'email_kantor'
    					];

}
