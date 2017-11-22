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
			'des_acc_rqs' => 'Crear RQS',
			'est_rqs_id' => 1,
			'est_ant_rqs_id' => null,
			'rol_asg_rqs_id' => 2,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Rechazar RQS',
			'est_rqs_id' => 3,
			'est_ant_rqs_id' => 1,
			'rol_asg_rqs_id' => 2,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);

		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Autorizacion RQS',
			'est_rqs_id' => 2,
			'est_ant_rqs_id' => 1,
			'rol_asg_rqs_id' => 2,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);

		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Proceso RQS',
			'est_rqs_id' => 4,
			'est_ant_rqs_id' => 2,
			'rol_asg_rqs_id' => 3,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Entrega RQS Parcial',
			'est_rqs_id' => 5,
			'est_ant_rqs_id' => 4,
			'rol_asg_rqs_id' => 3,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Entrega RQS Total',
			'est_rqs_id' => 6,
			'est_ant_rqs_id' => 4,
			'rol_asg_rqs_id' => 3,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Recibo RQS Parcial',
			'est_rqs_id' => 7,
			'est_ant_rqs_id' => 5,
			'rol_asg_rqs_id' => 4,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Proceso RQS',
			'est_rqs_id' => 4,
			'est_ant_rqs_id' => 7,
			'rol_asg_rqs_id' => 4,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Entrega RQS Parcial',
			'est_rqs_id' => 5,
			'est_ant_rqs_id' => 5,
			'rol_asg_rqs_id' => 3,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Entrega RQS Total',
			'est_rqs_id' => 6,
			'est_ant_rqs_id' => 5,
			'rol_asg_rqs_id' => 3,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
		DB::table('accionesrequisicions')->insert([
			'des_acc_rqs' => 'Recibo RQS Total',
			'est_rqs_id' => 8,
			'est_ant_rqs_id' => 6,
			'rol_asg_rqs_id' => 4,
            'created_at' => Carbon::now()->subDays(1),
			'updated_at' => Carbon::now()		
		]);
		
    }
}
