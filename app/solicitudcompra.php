<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitudcompra extends Model
{
    protected $table = 'solicitudcompras';	
	protected $fillable = array('asn_scp','obv_scp');
}
