<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class AlmacenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		//DB::table('producto_unidad')->insert(['producto_id'=>'1','unidad_id'=>'1']);
		DB::table('almacens')->insert(['cnt_prd' => 1.2,'lot_prd'=>1,'producto_id'=>1,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 1.5,'lot_prd'=>1,'producto_id'=>2,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		
		
    }
}
