<?php

use Illuminate\Database\Seeder;

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
            
			'tipo_identidad' => '1',
			'no_identidad' => '1143345408',
			'nombre' => 'Belkis del Carmen',
			'apellido' => 'Buelvas Castillo',
			'usuario'=> 'bbuelvas5408',
			'cargo' => 'Gerente General de todo!!',
			'tipo_ dependencia' => 'TODAS!!!',
			'dependencia' => 'TODAS!!!',
			'coordinacion' => 'TODAS!!!',
			'telefono_fijo' => 'No tiene',
			'telefono_celular' => 'Menos! ',
			'direccion_email' => 'gerencia.general.aluna@gmail.com',
			'password'=> bcrypt('12345'), 
			
        ]);
		
		
		
		
    }
}


