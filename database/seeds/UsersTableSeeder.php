<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

			'tipo_identidad' => '1',
			'no_identidad' => '12345',
			'nombre' => '12345',
			'apellido' => '12345',
			'usuario'=> '12345',
			'cargo' => '12345',
			'tipo_ dependencia' => '12345',
			'dependencia' => '12345',
			'coordinacion' => '12345',
			'telefono_fijo' => '12345',
			'telefono_celular' => '12345',
			'direccion_email' => '12345@gmail.com',
			'password'=> bcrypt('12345'), 

        ]);
    }
}


