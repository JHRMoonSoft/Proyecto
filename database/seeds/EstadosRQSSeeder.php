<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class EstadosRQSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('estadosrequisicions')->insert([
			//1
			'desc_est_req' => 'Creada',
			'asu_est_req' => 'Requisición Interna',
			'tip_est_req' => 1,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('estadosrequisicions')->insert([
			//2
			'desc_est_req' => 'Autorizada',
			'asu_est_req' => 'Requisición Autorizada',
			'tip_est_req' => 2,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);

		
		DB::table('estadosrequisicions')->insert([
			//3		
			'desc_est_req' => 'Rechazada',
			'asu_est_req' => 'Requisición Rechazada',
			'tip_est_req' => 3,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);

		DB::table('estadosrequisicions')->insert([
			//4			
			'desc_est_req' => 'En Proceso',
			'asu_est_req' => 'Requisición En Proceso',
			'tip_est_req' => 2,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);

		DB::table('estadosrequisicions')->insert([
			//5			
			'desc_est_req' => 'Entrega Parcial',
			'asu_est_req' => 'Requisición Entrega Parcial',
			'tip_est_req' => 2,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('estadosrequisicions')->insert([
			//6			
			'desc_est_req' => 'Entregada',
			'asu_est_req' => 'Requisición Entrega',
			'tip_est_req' => 2,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('estadosrequisicions')->insert([
			//7			
			'desc_est_req' => 'Recibo Parcial',
			'asu_est_req' => 'Requisición Recibo Parcial',
			'tip_est_req' => 2,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('estadosrequisicions')->insert([
			//8
			'desc_est_req' => 'Recibida',
			'asu_est_req' => 'Requisición Recibida',
			'tip_est_req' => 3,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);		
    }
}
