<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
	 
	 1. 1r letra nombre + apellido
	 2. 1r y 2da letra nombre + apellido
	 3. 1r letra nombre + apellido + 1r letra 2do apellido
	 4. apellido + 1r letra nombre
	 5. apellido + 1r y 2da letra nombre
	 TODOS MAS LOS ULTIMOS 4 DIGITOS DE LA CEDULA
	 */
    public function run()
    {
        DB::table('users')->insert([
			'tip_doc' => '1',
			'num_doc' => '1143345408',
			'nom_usr' => 'Belkis del Carmen',
			'ape_usr' => 'Buelvas Castillo',
			'usuario'=> 'bbuelvas5408',
			'crg_usr' => 1,
			'tip_dep' => 1,
			'dep_usr' => 1,
			'crd_usr' => 'UTB',
			'tel_fij' => 'No tiene',
			'tel_cel' => 'No tiene',
			'dir_mail' => 'belkisbuelvasc@gmail.com',
			'password'=> bcrypt('12345'), 
			'sta_usr' => true,
			'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()
        ]);
		DB::table('users')->insert([
			'tip_doc' => '1',
			'num_doc' => '11111111',
			'nom_usr' => 'Administrador',
			'ape_usr' => 'Sistemas',
			'usuario'=> 'admin',
			'crg_usr' => 1,
			'tip_dep' => 1,
			'dep_usr' => 1,
			'crd_usr' => 'Sistemas',
			'tel_fij' => 'No tiene',
			'tel_cel' => 'No tiene',
			'dir_mail' => 'clovis.paternina@aluna.org.co',
			'password'=> bcrypt('admin123'), 
			'sta_usr' => true,
			'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()

        ]);
    }
}


