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
		DB::table('areas')->insert(['tipos_area_id' => 1,'des_are' => 'Educacion','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('areas')->insert(['tipos_area_id' => 2,'des_are' => 'Compras','created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
    }
}
