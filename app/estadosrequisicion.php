<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadosrequisicion extends Model
{
	protected $table = 'estadosrequisicions';	
	protected $fillable = array('desc_est_req');
}
