<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class ConfiguracionTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('configuracions')->insert([
				
			 'tip_empr'=> 'Fundación',
			 'raz_soc'=> 'FUNDACION ALUNA',
			 'tip_doc'=> 'RUT',
			 'num_doc'=> '806.014.972-9',
			 'tel_fij'=> '6746444',
			 'tel_cel'=> '',
			 'dir_mail'=> '',
			 'dir_empr'=> 'diag 26 # 47 - 49',
			 'brr_empr'=> 'Barrio Chile',
			 'ciu_empr'=> 'Cartagena',
			 'pai_empr'=> 'Colombia',
			 'created_at' => Carbon::now()->subDays(1),
			 'updated_at' => Carbon::now()
        ]);
    }
}


