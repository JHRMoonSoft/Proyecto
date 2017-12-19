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
		DB::table('categorias')->insert(['des_cat' => 'Taller de cocina','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('categorias')->insert(['des_cat' => 'Papeleria','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('categorias')->insert(['des_cat' => 'Didacticos','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('categorias')->insert(['des_cat' => 'Aseo','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('categorias')->insert(['des_cat' => 'Por Definir','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);

    }
}
