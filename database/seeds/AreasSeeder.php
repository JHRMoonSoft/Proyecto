<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		//DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Contabilidad','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Ayudas Técnicas','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Fisioterapia','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Fonoaudiología','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Hipnoterapia','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Musicoterapia','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Pedagogía','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Psicología','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Trabajo social','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Terapia Ocupacional','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Terapia Acuática','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Contabilidad','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Cocina','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Compras','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Mantenimiento','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Servicios Generales','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Sistemas','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		
		DB::table('areas')->insert(['tipos_area_id' => 2,'des_are' => 'Atención Temprana','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 2,'des_are' => ' Aluna Móvil','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 2,'des_are' => 'Policarpa','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);



    }
}
