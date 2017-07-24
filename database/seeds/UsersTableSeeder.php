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
            
			'tipo_identidad' => str_random(10),
			'no_identidad' => str_random(10),
			'nombre' => str_random(10),
			'apellido' => str_random(10),
			'usuario'=> str_random(10),
			'cargo' => str_random(10),
			'tipo_ dependencia' => str_random(10),
			'dependencia' => str_random(10),
			'coordinacion' => str_random(10),
			'telefono_fijo' => str_random(10),
			'telefono_celular' => str_random(10),
			'direccion_email' => str_random(10).'@gmail.com',
			'password'=> bcrypt('secret'), 
			
        ]);
		
		
		$faker = Faker::create();
        DB::table('users')->insert([
          'name' => "administrativo",
          //'area_de_trabajo' => "Personal Administrativo",
          'email' => "administrativo@gmail.com",
          //'role' => 'admin',
          'password' => bcrypt('1234567'),
          'roles' => "administrativo",
          'created_at' => $faker->dateTime(),
          'updated_at' => $faker->dateTime()
      ]);
		
		
    }
}


