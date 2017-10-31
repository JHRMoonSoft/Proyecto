@extends('layouts.app')
@section('pagetitle')
  <h3></h3> 
@endsection
@section('x_search')
	<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search"> 
						
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Buscar ...">
		<span class="input-group-btn">
				  <button class="btn btn-default glyphicon glyphicon-search" type="button"></button> 
			  </span> 
		</div>
	</div>
	
@endsection 

@section('x_content')
  <div class="x_panel">
	    <div class="x_title">
			<h2>Listado de Usuarios</h2> &nbsp&nbsp&nbsp
			<a  href="{{ url('/register') }}" class="btn btn-info  right" role="button"><i class="fa fa-user" aria-hidden="true"></i>&nbsp&nbspNuevo Usuario </a>			
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
						<th class="text-center">Cod. user</th>
						<th class="text-center">Usuario</th>
						<th class="text-center">Nombre Empleado</th>
						<th class="text-center">Cargo</th>
						<th class="text-center">Depen</th>
						<th class="text-center">Rol</th>
						<th class="text-center">Estado</th>
						<th class="text-center">Fecha Creación </th>
						<th class="text-center">Fecha Edición </th>
						<th>Opciones  </th>
						<!--<th>Eliminar</th>-->
					</tr>
				  </thead>
				  <tbody>
					@foreach($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td> {{$user->usuario}}	</td>
						<td>{{$user->nom_usr}} &nbsp&nbsp&nbsp {{$user->ape_usr}} </td>
						<td>{{$user->dep_usr}}</td>
						<td> {{$user->crg_usr}}</td>
						<td>
							@foreach($user->roles as $role)
								{{$role->name}} 
							@endforeach
						</td>	
						<td>{{$user->sta_usr}}</td>	
						<td>{{ $user->created_at->format('Y-m-d') }}</td>	
						<td>{{ $user->updated_at->format('Y-m-d') }}</td>								
						<td><a href="{{ url('/users/'.$user->id) }}" title="Detalle" class="btn btn-success glyphicon glyphicon-file btn-xs" data-title="Detalle"></a>
							<a href="{{ url('/users/'.$user->id.'/edit') }}" title="Editar" class="btn btn-primary glyphicon glyphicon-pencil btn-xs" data-title="Editar"></a></td><!--
						<td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><a href="" class="btn btn-danger btn-xs" data-title="Eliminar"><span class=" glyphicon glyphicon-trash"></span></a></p></td>-->
					</tr>                       
					@endforeach
				  </tbody>
				</table>
			</div>
        </div>
		
	</div>
@endsection
