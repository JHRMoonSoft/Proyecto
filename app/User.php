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
        'tip_doc', 'num_doc', 'nom_usr', 'ape_usr', 'usuario', 	'crg_usr', 	'tip_dep', 'dep_usr', 	'crd_usr', 'tel_fij', 'tel_cel', 'dir_mail', 'sta_usr'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
