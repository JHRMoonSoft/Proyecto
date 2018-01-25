@extends('layouts.app')
@section('content')
@section('pagetitle')
  <h3></h3> 
@endsection
@section('x_search')<!--
	<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search"> 
						
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Buscar ...">
		<span class="input-group-btn">
				  <button class="btn btn-default glyphicon glyphicon-search" type="button"></button> 
			  </span> 
		</div>
	</div>-->
	
@endsection
@section('x_content')
  <div class="x_panel">
	    <div class="x_title">
			<h2>Listado de Proveedores</h2> &nbsp&nbsp&nbsp
			<a  href="{{ url('/proveedor/create') }}" class="btn btn-info  right" role="button"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp&nbspNuevo Proveedor </a>
			
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
		<div class="x_content"><br/>
			<div class="table-responsive">
				<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
				  <thead>
				   <tr>
						<th class="text-center">Código</th>
						<th class="text-center">Proveedor</th>
						<th class="text-center">Tipo. Doc</th>
						<th class="text-center">No. Doc </th>
						<th class="text-center">Teléfono </th>
						<th class="text-center">Categoría </th>
						<th class="text-center">Fecha Creación </th>
						<th class="text-center">Fecha Edición </th>
						<th>Opciones  </th>
						<!--<th>Eliminar</th>-->
					</tr>
				  </thead>
				  <tbody>
					@foreach($proveedors as $proveedor)
					<tr>
					  <td>{{$proveedor->id}}</td>
						<td>
							{{$proveedor->raz_soc}}
						</td>
						<td>{{$proveedor->tip_doc}}</td>
						<td>{{$proveedor->num_doc}}</td>
						<td>{{$proveedor->tel_fij}}</td>
						<td> 
							@foreach($proveedor->categorias as $categoria)
								<span class="label label-danger">
									{{$categoria->des_cat}}
								</span>&nbsp
							@endforeach
						</td>						
						<td>{{ $proveedor->created_at->format('Y-m-d') }}</td>	
						<td>{{ $proveedor->updated_at->format('Y-m-d') }}</td>									
						<td><a href="{{ url('/proveedor/'.$proveedor->id) }}" title="Detalle" class="btn btn-success glyphicon glyphicon-file btn-xs" data-title="Detalle"></a>
							<a href="{{ url('/proveedor/'.$proveedor->id.'/edit') }}" title="Editar" class="btn btn-primary glyphicon glyphicon-pencil btn-xs" data-title="Editar"></a></td><!--
						<td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><a href="" class="btn btn-danger btn-xs" data-title="Eliminar"><span class=" glyphicon glyphicon-trash"></span></a></p></td>-->
				
					</tr>                       
					@endforeach
				  </tbody>
				</table>
			</div>
        </div>
		
	</div>
@endsection
