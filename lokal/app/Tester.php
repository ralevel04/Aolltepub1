<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tester extends Model
{
    protected $table = 'testers';

    //buat excel
    protected $fillable =
    					[
							'name',
							'jabatan',
							'nip',
							'pangkat'
    					];


}
