<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class AccionesAlmacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('acciones_almacens')->insert([
			'des_acc_alm' => 'Ingreso por Almacén',
			'tip_acc_alm' => 1,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('acciones_almacens')->insert([
			'des_acc_alm' => 'Ingreso por Compras',
			'tip_acc_alm' => 1,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);

		
		DB::table('acciones_almacens')->insert([
			'des_acc_alm' => 'Salida por Requisición',
			'tip_acc_alm' => 2,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);


		
    }
}
