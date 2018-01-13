<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
	
	use EntrustUserTrait; // add this trait to your user model
	

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tip_doc', 'num_doc', 'nom_usr', 'ape_usr', 'usuario', 	'crg_usr', 'dep_usr', 	'crd_usr', 'tel_fij', 'tel_cel', 'dir_mail', 'sta_usr', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	
	public function cargo(){
		
	     return $this->belongsTo('App\Cargo', 'crg_usr');
	}
	
	public function area(){
		
	     return $this->belongsTo('App\Area', 'dep_usr');
	}
	
	public function tipoarea(){
		
	     return $this->belongsTo('App\TiposArea', 'tip_dep');
	}
	
	
}
