<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class UnidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('unidads')->insert(['des_und' => 'Litro','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Paquete','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Und','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Lata','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Caja','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Kilo','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Kg','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Unidad','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Sobre','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Barra','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Frasco','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Gramos','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Tarro','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Botella','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Tubo','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Lonjas','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Vaso','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Bolsa','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Bloque','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Rollo','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Pote','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Kit','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Par','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Pliego','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Unidades','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Lámina','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Hojas','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('unidads')->insert(['des_und' => 'Tarros','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);

		
    }
}
