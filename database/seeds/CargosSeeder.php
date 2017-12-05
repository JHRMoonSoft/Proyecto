<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;
class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('cargos')->insert(['des_crg' => 'Cargo de Prueba','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
    }
}
