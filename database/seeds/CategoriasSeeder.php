<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;
class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('categorias')->insert([
			'des_cat' => 'Categoria de Prueba',
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
    }
}
