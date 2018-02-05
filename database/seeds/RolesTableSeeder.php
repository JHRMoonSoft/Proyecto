<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class RolesTableSeeder extends Seeder
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
        DB::table('roles')->insert([
			'name' => 'admin',
			'display_name' => 'Administrador',
			'description' => 'Administrador del Sistema',
			'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()
		]);
		DB::table('roles')->insert([
			'name' => 'jefatura',
			'display_name' => 'Jefatura',
			'description' => 'Jefatura de Departamento',
			'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()
		]);
		
		DB::table('roles')->insert([
			'name' => 'compras',
			'display_name' => 'Compras',
			'description' => 'Auxiliar de Compras',
			'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()
		]);
		
		DB::table('roles')->insert([
			'name' => 'direccion',
			'display_name' => 'Dirección',
			'description' => 'Dirección de Departamento',
			'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()
		]);
		
						
		DB::table('roles')->insert([
			'name' => 'funcionario',
			'display_name' => 'Funcionarios',
			'description' => '',
			'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()
		]);
		
		DB::table('role_user')->insert([
			'user_id' => 1,
			'role_id' => 1
		]);
		DB::table('role_user')->insert([
			'user_id' => 2,
			'role_id' => 1
		]);
		
		DB::table('role_user')->insert([
			'user_id' => 1,
			'role_id' => 2
		]);
		
		DB::table('role_user')->insert([
			'user_id' => 1,
			'role_id' => 3
		]);
		
		DB::table('role_user')->insert([
			'user_id' => 1,
			'role_id' => 4
		]);
		
    }
}


