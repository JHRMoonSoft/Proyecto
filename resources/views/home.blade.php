@extends('layouts.app')

@section('content')
  <div class="x_panel">
	    <div class="x_title">
			<h2>Requisiciones Activas</h2> &nbsp&nbsp&nbsp
						
			<a  href="\workflow\create" class="btn btn-warning" role="button">Nueva Requisición </a>
			<!--
			<ul class="nav navbar-right panel_toolbox">
			
			  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
			  </li>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
				<ul class="dropdown-menu" role="menu">
				  <li><a href="#">Settings 1</a>
				  </li>
				  <li><a href="#">Settings 2</a>
				  </li>
				</ul>
			  </li>
			  <li><a class="close-link"><i class="fa fa-close"></i></a>
			  </li>
			</ul>-->
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<div class="table-responsive">
				<table id="datatable-buttons" class="table table-striped table-bordered ">
				  <thead>
				   <tr>
						<th class="text-center">Código</th>
						<th class="text-center">Fecha</th>
						<th class="text-center">Antiguaedad</th>
						<th class="text-center">Asunto</th>
						<th class="text-center">Estado</th>
						<th class="text-center">Solicitante</th>
						<th class="text-center">Area</th>
						<th class="text-center">Cargo</th>
						<th>Opciones  </th>
						<!--<th>Eliminar</th>-->
					</tr>
				  </thead>
				  <tbody>
					
					<tr>
					  <td>0023933</td>
						<td>
							26-06-2017
						</td>
						<td>3 d</td>
						<td>solicitud compa prueba</td>
						<td>Activo</td>
						<td>Belkis Buelvas</td>	
						<td>Area</td>	
						<td>Cargo</td>	
						<td><a href="" title="Detalle" class="btn btn-success glyphicon glyphicon-file btn-xs" data-title="Detalle"></a>
							<a href="" title="Editar" class="btn btn-info glyphicon glyphicon-pencil btn-xs" data-title="Editar"></a>
							<a href="" title="Acción" class="btn btn-primary glyphicon glyphicon-ok btn-xs" data-title="Acción"></a></td><!--
						<td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><a href="" class="btn btn-danger btn-xs" data-title="Eliminar"><span class=" glyphicon glyphicon-trash"></span></a></p></td>-->
				
					</tr>                       
					
				  </tbody>
				</table>
			</div>
        </div>
		
	</div>
@endsection
