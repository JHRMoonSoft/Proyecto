<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TiposAreasSeeder::class);
		$this->call(AreasSeeder::class);
		$this->call(CargosSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(RolesTableSeeder::class);
		$this->call(CategoriasSeeder::class);
		$this->call(UnidadesSeeder::class);
		$this->call(ProductosSeeder::class);
		$this->call(EstadosRQSSeeder::class);
		$this->call(AccionesRQSSeeder::class);
    }
}
