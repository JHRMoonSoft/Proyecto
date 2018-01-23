<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;
class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('permissions')->insert(['name'=>'ver-menu-requisicion','display_name'=>'1.Ver-menu-requisicion','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menu-nueva-rqs','display_name'=>'1.1.Ver-menu-nueva-rqs ','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-registrar-rqs','display_name'=>'1.1.1.Ver-registrar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-registrar-lista-productos','display_name'=>'1.1.2.Ver-registrar-lista-productos','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-registrar-proveedores-sugeridos','display_name'=>'1.1.3.Ver-registrar-proveedores-sugeridos','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'enviar-nueva-rqs','display_name'=>'1.1.4.Enviar-nueva-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-recibir-rqs','display_name'=>'1.2.Ver-menú-recibir-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-editar-recibir-rqs','display_name'=>'1.2.1.Ver-editar-recibir-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-detalle-recibir-rqs','display_name'=>'1.2.2. Ver-detalle-recibir-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-recibir-rqs','display_name'=>'1.2.3. Ver-descargar-recibir-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-todo-recibir-rqs','display_name'=>'1.2.4.Ver-descargar-todo-recibir-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-registrar-recibir-rqs','display_name'=>'1.2.5.Ver-registrar-recibir-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'enviar-recibir-rqs','display_name'=>'1.2.6.Enviar-recibir-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-historial-rqs-usuarios','display_name'=>'1.3.Ver-menú-historial-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-nueva-rqs-historial-rqs-usuarios','display_name'=>'1.3.1.Ver-nueva-rqs-historial-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-buscar-historial-rqs-usuarios','display_name'=>'1.3.2.Ver-buscar-historial-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-editar-historial-rqs-usuarios','display_name'=>'1.3.3.Ver-editar-historial-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'editar-lista-de-productos-rqs-usuarios','display_name'=>'1.3.3.1.Editar-lista-de-productos-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'editar-lista-de-proveedores-sugeridos-rqs-usuarios','display_name'=>'1.3.3.2.Editar-lista-de-proveedores-sugeridos-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'guardar-botón-rqs-usuarios','display_name'=>'1.3.3.3.Guardar-botón-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-detalle-historial-rqs-usuarios','display_name'=>'1.3.4.Ver-detalle-historial-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-historial-rqs-usuarios','display_name'=>'1.3.5.Ver-descargar-historial-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-todo-historial-rqs-usuarios','display_name'=>'1.3.6.Ver-descargar-todo-historial-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-empresa','display_name'=>'2.Ver-menú-empresa','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-empresa(crearoverempresa)','display_name'=>'2.1.Ver-menú-empresa(crearoVerempresa)','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'editar-empresa','display_name'=>'2.1.1.Editar-empresa','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-área-programa','display_name'=>'2.2.Ver-menú-área-programa','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-cargos','display_name'=>'2.3.Ver-menú-cargos','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-usuarios','display_name'=>'3.Ver-menú-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-nuevo-usuario','display_name'=>'3.1.Ver-menú-nuevo-usuario','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-listado-de-usuarios','display_name'=>'3.2.Ver-menú-listado-de-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-detalle-usuario','display_name'=>'3.2.1.Ver-detalle-usuario','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'editar-usuario','display_name'=>'3.2.2.Editar-usuario','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-roles','display_name'=>'4.Ver-menú-roles','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-nuevo-rol','display_name'=>'4.1.Ver-menú-nuevo-rol','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-listado-de-roles','display_name'=>'4.2.Ver-menú-listado-de-roles','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-detalle-rol','display_name'=>'4.2.1.Ver-detalle-rol','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'editar-rol','display_name'=>'4.2.2.Editar-rol','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-permisos','display_name'=>'5.Ver-menú-permisos','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-nuevo-permisos','display_name'=>'5.1.Ver-menú-nuevo-permisos','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-listado-de-permisos','display_name'=>'5.2.Ver-menú-listado-de-permisos','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-detalle-permiso','display_name'=>'5.2.1.Ver-detalle-permiso','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'editar-permiso','display_name'=>'5.2.2.Editar-permiso','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-proveedores','display_name'=>'6.Ver-menú-proveedores','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-nuevo-proveedor','display_name'=>'6.1.Ver-menú-nuevo-proveedor','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-listado-de-proveedores','display_name'=>'6.2.Ver-menú-listado-de-proveedores','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-detalle-proveedor','display_name'=>'6.2.1.Ver-detalle-proveedor','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'editar-proveedor','display_name'=>'6.2.2.Editar-proveedor','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-almacén','display_name'=>'7.Ver-menú-almacén','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-categorías','display_name'=>'7.1.Ver-menú-categorías','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'crear-categoría','display_name'=>'7.1.1.Crear-categoría','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'editar-categoría','display_name'=>'7.1.2.Editar-categoría','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-productos','display_name'=>'7.2.Ver-menú-productos','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'crear-producto','display_name'=>'7.2.1.Crear-producto','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'editar-producto','display_name'=>'7.2.2.Editar-producto','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-unidades','display_name'=>'7.3.Ver-menú-unidades','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'crear-unidad','display_name'=>'7.3.1.Crear-unidad','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'editar-unidad','display_name'=>'7.3.2.Editar-unidad','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-unidades-empaque','display_name'=>'7.4.Ver-menú-unidades-empaque','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'crear-unidad-empaque','display_name'=>'7.4.1.Crear-unidad-empaque','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'editar-unidad-empaque','display_name'=>'7.4.2.Editar-unidad-empaque','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-producto-almacén','display_name'=>'7.5.Ver-menú-producto-almacén','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'crear-producto-almacén','display_name'=>'7.5.1.Crear-producto-almacén','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'editar-producto-almacén','display_name'=>'7.5.2.Editar-producto-almacén','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-kardex-almacén','display_name'=>'7.6.Ver-menú-kardex-almacén','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'crear-ingreso-almacén','display_name'=>'7.6.1.Crear-ingreso-almacén','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-todo-kardex-almacén','display_name'=>'7.6.2.Ver-descargar-todo-kardex-almacén','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-buscar-kardex-almacén','display_name'=>'7.6.3.Ver-buscar-kardex-almacén','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-gestionar-rqs','display_name'=>'8.Ver-menú-gestionar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-autorizar-rqs','display_name'=>'8.1.Ver-menú-autorizar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-editar-autorizar-rqs','display_name'=>'8.1.1.Ver-editar-autorizar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-registro-autorizar-rqs','display_name'=>'8.1.1.1.Ver-registro-autorizar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-detalle-requisición-autorizar-rqs','display_name'=>'8.1.1.2.Ver-detalle-requisición-autorizar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-lista-de-productos-autorizar-rqs','display_name'=>'8.1.1.3.Ver-lista-de-productos-autorizar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-lista-de-proveedores-autorizar-rqs','display_name'=>'8.1.1.4.Ver-lista-de-proveedores-autorizar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-guardar-autorizar-rqs','display_name'=>'8.1.1.5.Ver-guardar-autorizar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-enviar-autorizar-rqs','display_name'=>'8.1.1.6.Ver-enviar-autorizar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-detalle-autorizar-rqs','display_name'=>'8.1.2.Ver-detalle-autorizar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-autorizar-rqs','display_name'=>'8.1.3.Ver-descargar-autorizar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-todo-autorizar-rqs','display_name'=>'8.1.4.Ver-descargar-todo-autorizar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-entregar-rqs','display_name'=>'8.2.Ver-menú-entregar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-editar-entregar-rqs','display_name'=>'8.2.1.Ver-editar-entregar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-registro-entregar-rqs','display_name'=>'8.2.1.1.Ver-registro-entregar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-lista-productos-entregar-rqs','display_name'=>'8.2.1.2.Ver-lista-productos-entregar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-guardar-entregar-rqs','display_name'=>'8.2.1.3.Ver-guardar-entregar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-enviar-entregar-rqs','display_name'=>'8.2.1.4.Ver-enviar-entregar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-detalle-entregar-rqs','display_name'=>'8.2.2.Ver-detalle-entregar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-entregar-rqs','display_name'=>'8.2.3.Ver-descargar-entregar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-todo-entregar-rqs','display_name'=>'8.2.4.Ver-descargar-todo-entregar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-buscar-entregar-rqs','display_name'=>'8.2.5.Ver-buscar-entregar-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-historial-rqs','display_name'=>'8.3.Ver-menú-historial-rqs','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		//DB::table('permissions')->insert(['name'=>'ver-nueva-rqs-historial-rqs-usuarios','display_name'=>'8.3.1.Ver-nueva-rqs-historial-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		//DB::table('permissions')->insert(['name'=>'ver-buscar-historial-rqs-usuarios','display_name'=>'8.3.2.Ver-buscar-historial-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		//DB::table('permissions')->insert(['name'=>'ver-editar-historial-rqs-usuarios','display_name'=>'8.3.3.Ver-editar-historial-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		//DB::table('permissions')->insert(['name'=>'editar-lista-de-productos','display_name'=>'8.3.3.1.Editar-lista-de-productos','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		//DB::table('permissions')->insert(['name'=>'editar-lista-de-proveedores-sugeridos','display_name'=>'8.3.3.2.Editar-lista-de-proveedores-sugeridos','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		//DB::table('permissions')->insert(['name'=>'guardar-botón','display_name'=>'8.3.3.3.Guardar-botón','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		//DB::table('permissions')->insert(['name'=>'ver-detalle-historial-rqs-usuarios','display_name'=>'8.3.4.Ver-detalle-historial-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		//DB::table('permissions')->insert(['name'=>'ver-descargar-historial-rqs-usuarios','display_name'=>'8.3.5.Ver-descargar-historial-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		//DB::table('permissions')->insert(['name'=>'ver-descargar-todo-historial-rqs-usuarios','display_name'=>'8.3.6.Ver-descargar-todo-historial-rqs-usuarios','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);
		DB::table('permissions')->insert(['name'=>'ver-menú-solicitud-de-compras','display_name'=>'9.Ver-menú-solicitud-de-compras','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-nueva-scp','display_name'=>'9.1.Ver-menú-nueva-scp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-historial-scp','display_name'=>'9.2.Ver-menú-historial-scp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-nueva-scp','display_name'=>'9.2.1.Ver-nueva-scp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-editar-scp','display_name'=>'9.2.2.Ver-editar-scp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-detalle-scp','display_name'=>'9.2.3.Ver-detalle-scp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-scp','display_name'=>'9.2.4.Ver-descargar-scp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-todo-scp','display_name'=>'9.2.5.Ver-descargar-todo-scp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-buscar-scp','display_name'=>'9.2.6.Ver-buscar-scp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-orden-de-compras','display_name'=>'10.Ver-menú-orden-de-compras','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-nueva-ocp','display_name'=>'10.1.Ver-menú-nueva-ocp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-historial-ocp','display_name'=>'10.2.Ver-menú-historial-ocp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-nueva-ocp','display_name'=>'10.2.1.Ver-nueva-ocp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-editar-ocp','display_name'=>'10.2.2.Ver-editar-ocp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-detalle-ocp','display_name'=>'10.2.3.Ver-detalle-ocp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-ocp','display_name'=>'10.2.4.Ver-descargar-ocp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-todo-ocp','display_name'=>'10.2.5.Ver-descargar-todo-ocp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-buscar-ocp','display_name'=>'10.2.6.Ver-buscar-ocp','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-facturas','display_name'=>'11.Ver-menú-facturas','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-nueva-factura','display_name'=>'11.1.Ver-menú-nueva-factura','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-menú-historial-factura','display_name'=>'11.2.Ver-menú-historial-factura','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-nueva-factura','display_name'=>'11.2.1.Ver-nueva-factura','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-editar-factura','display_name'=>'11.2.2.Ver-editar-factura','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-detalle-factura','display_name'=>'11.2.3.Ver-detalle-factura','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-factura','display_name'=>'11.2.4.Ver-descargar-factura','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-descargar-todo-factura','display_name'=>'11.2.5.Ver-descargar-todo-factura','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-buscar-factura','display_name'=>'11.2.6.Ver-buscar-factura','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	
		DB::table('permissions')->insert(['name'=>'ver-ingreso-almacén','display_name'=>'11.2.7.Ver-ingreso-almacén','description'=>'','created_at'=>Carbon::now()->subDays(1),'updated_at'=>Carbon::now()]);	

		//1.	ver-menu-requisicion: A,C, D, J, F
		DB::table('permission_role')->insert([
			'permission_id' => 1,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 1,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 1,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 1,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 1,
			'role_id' => 5
		]);
		
		//1.1.	ver-menu-nueva-rqs  A,C, D, J, F
		DB::table('permission_role')->insert([
			'permission_id' => 2,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 2,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 2,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 2,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 2,
			'role_id' => 5
		]);
		
		//1.1.1.	ver-registrar-rqs A,D, J, C, F
			
			DB::table('permission_role')->insert([
			'permission_id' => 3,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 3,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 3,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 3,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 3,
			'role_id' => 5
		]);

		// 1.1.2.	ver-registrar-lista-productos A,D, J, C, F
		
		DB::table('permission_role')->insert([
			'permission_id' => 4,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 4,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 4,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 4,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 4,
			'role_id' => 5
		]);
		
		// 1.1.3.	ver-registrar-proveedores-sugeridos A, D, J, C, F
		
			DB::table('permission_role')->insert([
			'permission_id' => 5,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 5,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 5,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 5,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 5,
			'role_id' => 5
		]);
		//1.1.4.	enviar-nueva-rqs D, J, C, F
		
		DB::table('permission_role')->insert([
			'permission_id' => 6,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 6,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 6,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 6,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 6,
			'role_id' => 5
		]);
		// 1.2.	ver-menu-recibir-rqs. A, D, J, C, F
		DB::table('permission_role')->insert([
			'permission_id' => 7,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 7,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 7,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 7,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 7,
			'role_id' => 5
		]);
		//1.2.1.	ver-editar-recibir-rqs A, C, D, J, F
		DB::table('permission_role')->insert([
			'permission_id' => 8,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 8,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 8,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 8,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 8,
			'role_id' => 5
		]);
	//	1.2.2.	ver-detalle-recibir-rqs A, C, D, J, F
	DB::table('permission_role')->insert([
			'permission_id' => 9,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 9,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 9,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 9,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 9,
			'role_id' => 5
		]);
		//1.2.3.	ver-descargar-recibir-rqs A, C, D, J, F
		DB::table('permission_role')->insert([
			'permission_id' => 10,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 10,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 10,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 10,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 10,
			'role_id' => 5
		]);
		//1.2.4.	ver-descargar-todo-recibir-rqs A, C, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 11,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 11,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 11,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 11,
			'role_id' => 4
		]);
	
		//1.2.5.	ver-registrar-recibir-rqs A, C, D, J, F
		DB::table('permission_role')->insert([
			'permission_id' => 12,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 12,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 12,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 12,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 12,
			'role_id' => 5
		]);
		//1.2.6.	enviar-recibir-rqs A, C, D, J, F
		DB::table('permission_role')->insert([
			'permission_id' => 13,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 13,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 13,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 13,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 13,
			'role_id' => 5
		]);
		//1.3.	ver-menu-historial-rqs-usuarios A, C, D, J, F
		DB::table('permission_role')->insert([
			'permission_id' => 14,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 14,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 14,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 14,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 14,
			'role_id' => 5
		]);
		//1.3.1.	ver-nueva-rqs-historial-rqs-usuarios A, C, D, J, F
		DB::table('permission_role')->insert([
			'permission_id' => 15,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 15,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 15,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 15,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 15,
			'role_id' => 5
		]);
		//1.3.2.	ver-buscar-historial-rqs-usuarios A, C, D, J, F
		
		DB::table('permission_role')->insert([
			'permission_id' => 16,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 16,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 16,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 16,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 16,
			'role_id' => 5
		]);
		//1.3.3.	ver-editar-historial-rqs-usuarios A, C, D, J, F
		DB::table('permission_role')->insert([
			'permission_id' => 17,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 17,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 17,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 17,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 17,
			'role_id' => 5
		]);
		//1.3.3.1.	editar-lista-de-productos A, C, D, J, F
		DB::table('permission_role')->insert([
			'permission_id' => 18,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 18,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 18,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 18,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 18,
			'role_id' => 5
			]);
		//1.3.3.2.	editar-lista-de-proveedores-sugeridos A, C, D, J, F
		DB::table('permission_role')->insert([
			'permission_id' => 19,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 19,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 19,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 19,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 19,
			'role_id' => 5
			]);
		//1.3.3.3.	guardar-boton A, C, D, J, F
		DB::table('permission_role')->insert([
			'permission_id' => 20,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 20,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 20,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 20,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 20,
			'role_id' => 5
			]);
		//1.3.4.	ver-detalle-historial-rqs-usuarios A, C, D, J, F
		DB::table('permission_role')->insert([
			'permission_id' => 21,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 21,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 21,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 21,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 21,
			'role_id' => 5
			]);
		//1.3.5.	ver-descargar-historial-rqs-usuarios A, C, D, J, F
		DB::table('permission_role')->insert([
			'permission_id' => 22,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 22,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 22,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 22,
			'role_id' => 4
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 22,
			'role_id' => 5
			]);
		//1.3.6.	ver-descargar-todo-historial-rqs-usuarios A, C, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 23,
			'role_id' => 1
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 23,
			'role_id' => 2
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 23,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 23,
			'role_id' => 4
		]);

			//2.	ver-menu-empresa: C, A
		DB::table('permission_role')->insert([
			'permission_id' => 24,
			'role_id' => 1
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 24,
			'role_id' => 2
		]);
			//2.1.	ver-menu-empresa (crear o ver empresa) C, A
			DB::table('permission_role')->insert([
			'permission_id' => 25,
			'role_id' => 1
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 25,
			'role_id' => 2
		]);
			//2.1.1.	editar-empresa: C, A
			DB::table('permission_role')->insert([
			'permission_id' => 26,
			'role_id' => 1
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 26,
			'role_id' => 2
		]);
			//2.2.	ver-menu-area-programa: A
			DB::table('permission_role')->insert([
			'permission_id' => 27,
			'role_id' => 1
		]);
	
			//2.3.	ver-menu-cargos: A
			DB::table('permission_role')->insert([
			'permission_id' => 28,
			'role_id' => 1
		]);
	//3.	ver-menu-usuarios: A
	DB::table('permission_role')->insert([
			'permission_id' => 29,
			'role_id' => 1
		]);
	//3.1.	ver-menu-nuevo-usuario: A
	DB::table('permission_role')->insert([
			'permission_id' => 30,
			'role_id' => 1
		]);
	//3.2.	ver-menu-listado-de-usuarios: A
	DB::table('permission_role')->insert([
			'permission_id' => 31,
			'role_id' => 1
		]);
	//3.2.1.	ver-detalle-usuario: A
	DB::table('permission_role')->insert([
			'permission_id' => 32,
			'role_id' => 1
		]);
	//3.2.2.	editar-usuario: A 
	DB::table('permission_role')->insert([
			'permission_id' => 33,
			'role_id' => 1
		]);
		
		//4.	ver-menu-roles: A
		DB::table('permission_role')->insert([
			'permission_id' => 34,
			'role_id' => 1
		]);
		
		//4.1.	ver-menu-nuevo-rol: A
		DB::table('permission_role')->insert([
			'permission_id' => 35,
			'role_id' => 1
		]);
		
		//4.2.	ver-menu-listado-de-roles: A
		DB::table('permission_role')->insert([
			'permission_id' => 36,
			'role_id' => 1
		]);
		
		//4.2.1.	ver-detalle-rol: A
		DB::table('permission_role')->insert([
			'permission_id' => 37,
			'role_id' => 1
		]);
		
		//4.2.2.	editar-rol: A 
		DB::table('permission_role')->insert([
			'permission_id' => 38,
			'role_id' => 1
		]);
		//5.	ver-menu-permisos: A
		DB::table('permission_role')->insert([
			'permission_id' => 39,
			'role_id' => 1
		]);
		//5.1.	ver-menu-nuevo-permisos: A
		DB::table('permission_role')->insert([
			'permission_id' => 40,
			'role_id' => 1
		]);
		//5.2.	ver-menu-listado-de-permisos: A
		DB::table('permission_role')->insert([
			'permission_id' => 41,
			'role_id' => 1
		]);
		//5.2.1.	ver-detalle-permiso: A
		DB::table('permission_role')->insert([
			'permission_id' => 42,
			'role_id' => 1
		]);
		//5.2.2.	editar-rol: A 
		DB::table('permission_role')->insert([
			'permission_id' => 43,
			'role_id' => 1
		]);

		//6.	ver-menu-proveedores: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 44,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 44,
			'role_id' => 2
		]);
		//6.1.	ver-menu-nuevo-proveedor: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 45,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 45,
			'role_id' => 2
		]);
		//6.2.	ver-menu-listado-de-proveedores: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 46,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 46,
			'role_id' => 2
		]);
		//6.2.1.	ver-detalle-proveedor: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 47,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 47,
			'role_id' => 2
		]);
		//6.2.2.	editar-proveedor: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 48,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 48,
			'role_id' => 2
		]);

	//7.	ver-menu-almacen:A, D, J, C}
		DB::table('permission_role')->insert([
			'permission_id' => 49,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 49,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 49,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 49,
			'role_id' => 4
		]);
		//7.1.	ver-menu-categorias: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 50,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 50,
			'role_id' => 2
		]);
		//7.1.1.	crear-categoria: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 51,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 51,
			'role_id' => 2
		]);
		//7.1.2.	editar-categoria: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 52,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 52,
			'role_id' => 2
		]);
		//7.2.	ver-menu-productos: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 53,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 53,
			'role_id' => 2
		]);
		//7.2.1.	crear-producto: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 54,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 54,
			'role_id' => 2
		]);
		//7.2.2.	editar-producto: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 55,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 55,
			'role_id' => 2
		]);
		//7.3.	ver-menu-unidades: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 56,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 56,
			'role_id' => 2
		]);
		//7.3.1.	crear-unidad: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 57,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 57,
			'role_id' => 2
		]);
		//7.3.2.	editar-unidad: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 58,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 58,
			'role_id' => 2
		]);
		//7.4.	ver-menu-unidades-empaque: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 59,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 59,
			'role_id' => 2
		]);
		//7.4.1.	crear-unidad-empaque: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 60,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 60,
			'role_id' => 2
		]);
		//7.4.2.	editar-unidad-empaque: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 61,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 61,
			'role_id' => 2
		]);
		//7.5.	ver-menu-producto-almacen:A, C, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 62,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 62,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 62,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 62,
			'role_id' => 4
		]);
		//7.5.1.	crear-producto-almacen: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 63,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 63,
			'role_id' => 2
		]);
		//7.5.2.	editar-producto-almacen: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 64,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 64,
			'role_id' => 2
		]);
		//7.6.	ver-menu-kardex-almacen: A, C, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 65,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 65,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 65,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 65,
			'role_id' => 4
		]);
		//7.6.1.	crear-ingreso-almacen: A, C
		DB::table('permission_role')->insert([
			'permission_id' => 66,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 66,
			'role_id' => 2
		]);
		//7.6.2.	ver-descargar-todo-kardex-almacen: A, C, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 67,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 67,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 67,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 67,
			'role_id' => 4
		]);
		//7.6.3.	ver-buscar-kardex-almacen A, C, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 68,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 68,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 68,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 68,
			'role_id' => 4
		]);
		//8.	ver-menu-gestionar-rqs: A, C, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 69,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 69,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 69,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 69,
			'role_id' => 4
		]);
		//8.1.	ver-menu-autorizar-rqs: A, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 70,
			'role_id' => 1
	]);
		DB::table('permission_role')->insert([
			'permission_id' => 70,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 70,
			'role_id' => 4
		]);
		//8.1.1.	ver-editar-autorizar-rqs:A, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 71,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 71,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 71,
			'role_id' => 4
		]);
		//8.1.1.1.	ver-registro-autorizar-rqs A, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 72,
			'role_id' => 1
			]);
			
		DB::table('permission_role')->insert([
			'permission_id' => 72,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 72,
			'role_id' => 4
		]);
		//8.1.1.2.	ver-detalle-requisicion-autorizar-rqs A,D, J
		DB::table('permission_role')->insert([
			'permission_id' => 73,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 73,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 73,
			'role_id' => 4
		]);
		//8.1.1.3.	ver-lista-de-productos-autorizar-rqs A,D, J
		DB::table('permission_role')->insert([
			'permission_id' => 74,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 74,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 74 ,
			'role_id' => 4
		]);
		//8.1.1.4.	ver-lista-de-proveedores-autorizar-rqs A,D, J
		DB::table('permission_role')->insert([
			'permission_id' => 75,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 75,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 75,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 75 ,
			'role_id' => 4
			]);
		//8.1.1.5.	ver-guardar-autorizar-rqs A,D, J
		DB::table('permission_role')->insert([
			'permission_id' => 76,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 76,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 76 ,
			'role_id' => 4
			]);
		//8.1.1.6.	ver-enviar-autorizar-rqs A, C, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 77,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 77,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 77,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 77 ,
			'role_id' => 4
			]);
		//8.1.2.	ver-detalle-autorizar-rqs:A, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 78,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 78,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 78,
			'role_id' => 4
		]);
		//8.1.3.	ver-descargar-autorizar-rqs:A, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 79,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 79,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 79,
			'role_id' => 4
		]);
		//8.1.4.	ver- descargar-todo-autorizar-rqs:A, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 80,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 80,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 80,
			'role_id' => 4
		]);
		//8.2.	ver-menu-entregar-rqs:A, D, J, C
		DB::table('permission_role')->insert([
			'permission_id' => 81,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 81,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 81,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 81 ,
			'role_id' => 4
			]);
		//8.2.1.	ver-editar-autorizar-rqs: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 82,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 82,
			'role_id' => 2
		]);
		//8.2.1.1.	ver-registro-entregar-rqs: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 83,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 83,
			'role_id' => 2
		]);
		//8.2.1.2.	ver-lista-productos-entregar-rqs: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 84,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 84,
			'role_id' => 2
		]);
		//8.2.1.3.	ver-guardar-entregar-rqs A, C
		DB::table('permission_role')->insert([
			'permission_id' => 85,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 85,
			'role_id' => 2
		]);
		//8.2.1.4.	ver-enviar- entregar -rqs A, C
		DB::table('permission_role')->insert([
			'permission_id' => 86,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 86,
			'role_id' => 2
		]);
		//8.2.2.	ver-detalle- entregar -rqs A, C, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 87,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 87,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 87,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 87 ,
			'role_id' => 4
			]);
		//8.2.3.	ver-descargar- entregar -rqs A, C, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 88,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 88,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 88,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 88 ,
			'role_id' => 4
			]);
		//8.2.4.	ver- descargar-todo-entregar -rqs A, C, D, J
		DB::table('permission_role')->insert([
			'permission_id' => 89,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 89,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 89,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 89 ,
			'role_id' => 4
			]);
		//8.2.5.	ver-buscar- entregar-rqs:A, D, J, C
		DB::table('permission_role')->insert([
			'permission_id' => 90,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 90,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 90,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 90,
			'role_id' => 4
			]);
		//8.3.	ver-menu-historial-rqs: A,D, J, C
		DB::table('permission_role')->insert([
			'permission_id' => 91,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 91,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 91,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 91 ,
			'role_id' => 4
			]);
		/*8.3.1.	ver-nueva-rqs-historial-rqs-usuarios
		DB::table('permission_role')->insert([
			'permission_id' => 92,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 92,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 92 ,
			'role_id' => 4
			]);
		//8.3.2.	ver-buscar-historial-rqs-usuarios
		DB::table('permission_role')->insert([
			'permission_id' => 93,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 93,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 93 ,
			'role_id' => 4
			]);
		//8.3.3.	ver-editar-historial-rqs-usuarios.
		DB::table('permission_role')->insert([
			'permission_id' => 94,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 94,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 94 ,
			'role_id' => 4
			]);
		//8.3.3.1.	editar-lista-de-productos
		DB::table('permission_role')->insert([
			'permission_id' => 95,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 95,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 95 ,
			'role_id' => 4
			]);
		//8.3.3.2.	editar-lista-de-proveedores-sugeridos
		DB::table('permission_role')->insert([
			'permission_id' => 96,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 96,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 96 ,
			'role_id' => 4
			]);
		//8.3.3.3.	guardar-boton
		DB::table('permission_role')->insert([
			'permission_id' => 97,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 97,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 97,
			'role_id' => 4
			]);
		//8.3.4.	ver-detalle-historial-rqs-usuarios
		DB::table('permission_role')->insert([
			'permission_id' => 98,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 98,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 98 ,
			'role_id' => 4
			]);
		//8.3.5.	ver-descargar-historial-rqs-usuarios
		DB::table('permission_role')->insert([
			'permission_id' => 99,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 99,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 99 ,
			'role_id' => 4
			]);
		//8.3.6.	ver-descargar-todo-historial-rqs-usuarios
		DB::table('permission_role')->insert([
			'permission_id' => 100,
			'role_id' => 2
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 100,
			'role_id' => 3
		]);
		
		DB::table('permission_role')->insert([
			'permission_id' => 100 ,
			'role_id' => 4
			]);
			*/
		//9.	ver-menu-solicitud-de-compras: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 92,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 92,
			'role_id' => 2
		]);
		//9.1.	ver-menu-nueva-scp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 93,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 93,
			'role_id' => 2
		]);
		//9.2.	ver-menu-historial-scp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 94,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 94,
			'role_id' => 2
		]);
		//9.2.1.	ver-nueva-scp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 95,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 95,
			'role_id' => 2
		]);
		//9.2.2.	ver-editar-scp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 96,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 96,
			'role_id' => 2
		]);
		//9.2.3.	ver-detalle-scp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 97,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 97,
			'role_id' => 2
		]);
		//9.2.4.	ver-descargar-scp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 98,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 98,
			'role_id' => 2
		]);
		//9.2.5.	ver-descargar-todo-scp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 99,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 99,
			'role_id' => 2
		]);
		//9.2.6.	ver-buscar-scp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 100,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 100,
			'role_id' => 2
		]);
		//10.	ver-menu-orden-de-compras: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 101,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 101,
			'role_id' => 2
		]);
		//10.1.	ver-menu-nueva-ocp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 102,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 102,
			'role_id' => 2
		]);
		//10.2.	ver-menu-historial-ocp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 103,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 103,
			'role_id' => 2
		]);
		//10.2.1.	ver-nueva-ocp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 104,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 104,
			'role_id' => 2
		]);
		//10.2.2.	ver-editar-ocp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 105,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 105,
			'role_id' => 2
		]);
		//10.2.3.	ver-detalle-ocp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 106,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 106,
			'role_id' => 2
		]);
		//10.2.4.	ver-descargar-ocp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 107,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 107,
			'role_id' => 2
		]);
		//10.2.5.	ver-descargar-todo-ocp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 108,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 108,
			'role_id' => 2
		]);
		//10.2.6.	ver-buscar-ocp: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 109,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 109,
			'role_id' => 2
		]);
		//11.	ver-menu-facturas A,C
		DB::table('permission_role')->insert([
			'permission_id' => 110,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 110,
			'role_id' => 2
		]);
		//11.1.	ver-menu-nueva-factura A,C
		DB::table('permission_role')->insert([
			'permission_id' => 111,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 111,
			'role_id' => 2
		]);
		//11.2.	ver-menu-historial-factura A,C
		DB::table('permission_role')->insert([
			'permission_id' => 112,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 112,
			'role_id' => 2
		]);
		//11.2.1.	ver-nueva-factura: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 113,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 113,
			'role_id' => 2
		]);
		//11.2.2.	ver-editar-factura: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 114,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 114,
			'role_id' => 2
		]);
		//11.2.3.	ver-detalle-factura: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 115,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 115,
			'role_id' => 2
		]);
		//11.2.4.	ver-descargar-factura: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 116,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 116,
			'role_id' => 2
		]);
		//11.2.5.	ver-descargar-todo- factura: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 117,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 117,
			'role_id' => 2
		]);
		//11.2.6.	ver-buscar- factura: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 118,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 118,
			'role_id' => 2
		]);
		//11.2.7.	ver-ingreso-almacén: A,C
		DB::table('permission_role')->insert([
			'permission_id' => 119,
			'role_id' => 1
			]);
		DB::table('permission_role')->insert([
			'permission_id' => 119,
			'role_id' => 2
		]);



    }
}
