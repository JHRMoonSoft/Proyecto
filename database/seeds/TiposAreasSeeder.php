<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class TiposAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('tipos_areas')->insert(['des_tip_are' => 'Area','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('tipos_areas')->insert(['des_tip_are' => 'Departamento','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
    }
}
