<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class AccionesRQSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Crear Requisición',
			'asn_rqs' => 'Requisición Interna',
			'est_rqs_id' => 1,
			'est_ant_rqs_id' => null,
			'rol_asg_rqs_id' => 2,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Rechazar Requisición',
			'asn_rqs' => 'Requisición Rechazada',
			'est_rqs_id' => 3,
			'est_ant_rqs_id' => 1,
			'rol_asg_rqs_id' => 2,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);

		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Autorizar Requisición',
			'asn_rqs' => 'Requisición Autorizada',
			'est_rqs_id' => 2,
			'est_ant_rqs_id' => 1,
			'rol_asg_rqs_id' => 2,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);

		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'En Proceso',
			'asn_rqs' => 'Requisición en Proceso',
			'est_rqs_id' => 4,
			'est_ant_rqs_id' => 2,
			'rol_asg_rqs_id' => 3,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Entrega Parcial',
			'asn_rqs' => 'Requisición Entrega Parcial',
			'est_rqs_id' => 5,
			'est_ant_rqs_id' => 4,
			'rol_asg_rqs_id' => 3,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Entrega Total',
			'asn_rqs' => 'Requisición Entregada',
			'est_rqs_id' => 6,
			'est_ant_rqs_id' => 4,
			'rol_asg_rqs_id' => 3,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Recibo Parcial',
			'asn_rqs' => 'Requisición Recibo Parcial',
			'est_rqs_id' => 7,
			'est_ant_rqs_id' => 5,
			'rol_asg_rqs_id' => 4,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'En Proceso',
			'asn_rqs' => 'Requisición en Proceso',
			'est_rqs_id' => 4,
			'est_ant_rqs_id' => 7,
			'rol_asg_rqs_id' => 4,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Entrega Parcial',
			'asn_rqs' => 'Requisición Entrega Parcial',
			'est_rqs_id' => 5,
			'est_ant_rqs_id' => 5,
			'rol_asg_rqs_id' => 3,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Entrega Total',
			'asn_rqs' => 'Requisición Entregada',
			'est_rqs_id' => 6,
			'est_ant_rqs_id' => 5,
			'rol_asg_rqs_id' => 3,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Recibo Total',
			'asn_rqs' => 'Requisición Recibida',
			'est_rqs_id' => 8,
			'est_ant_rqs_id' => 6,
			'rol_asg_rqs_id' => 4,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
    }
}
