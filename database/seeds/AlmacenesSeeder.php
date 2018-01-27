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
		
		DB::table('almacens')->insert(['cnt_prd' => 20,'lot_prd'=>1,'producto_id'=>175,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 10,'lot_prd'=>1,'producto_id'=>176,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 5,'lot_prd'=>1,'producto_id'=>177,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 2,'lot_prd'=>1,'producto_id'=>184,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 6,'lot_prd'=>1,'producto_id'=>185,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 2,'lot_prd'=>1,'producto_id'=>309,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 3,'lot_prd'=>1,'producto_id'=>314,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 2,'lot_prd'=>1,'producto_id'=>68,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 1,'lot_prd'=>1,'producto_id'=>70,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 4,'lot_prd'=>1,'producto_id'=>78,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 1,'lot_prd'=>1,'producto_id'=>90,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 1,'lot_prd'=>1,'producto_id'=>578,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 10,'lot_prd'=>1,'producto_id'=>580,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 1,'lot_prd'=>1,'producto_id'=>649,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 3,'lot_prd'=>1,'producto_id'=>644,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 15,'lot_prd'=>1,'producto_id'=>272,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 10,'lot_prd'=>1,'producto_id'=>276,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 5,'lot_prd'=>1,'producto_id'=>277,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 1.5,'lot_prd'=>1,'producto_id'=>143,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		DB::table('almacens')->insert(['cnt_prd' => 3,'lot_prd'=>1,'producto_id'=>144,'created_at' => Carbon::now()->subDays(1),'updated_at' => Carbon::now()]);
		
    }
}
