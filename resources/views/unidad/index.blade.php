@extends('layouts.app')
@section('content')  
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
			<h2>Listado de Unidades </h2> &nbsp&nbsp&nbsp
						
			<button type="button" class="btn btn-warning " data-toggle="modal" data-target=".create_unidad">Nueva unidad </button>
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
						<th>Código</th>
						<th>Detalle Unidad</th>
						<th>Fecha. Creado</th>
						<th>Fecha. Modificado</th>
						<th>Opciones </th>
						<!--<th>Eliminar</th>-->
					</tr>
				  </thead>
				  <tbody>
					@foreach($unidads as $unidad)
					<tr>
						<td>{{ $unidad->id }}</td>
						<td>{{ $unidad->des_und }}</td>
						<td>{{ $unidad->created_at->format('Y-m-d') }}</td>	
						<td>{{ $unidad->updated_at->format('Y-m-d') }}</td>		
						<td>
								
							<button type="button" class="btn btn-sm btn-primary glyphicon glyphicon-edit btn-xs" data-desc-und="{{$unidad->des_und}}" data-id-und="{{$unidad->id}}" data-toggle="modal" data-target=".edit_unidad"></button>
							<!--<button type="button" class="btn btn-sm btn-danger glyphicon glyphicon-remove btn-xs" data-toggle="modal" data-target=".delete_unidad"></button>-->
								
						</td>
						
				
					</tr>                       
					@endforeach
				  </tbody>
				</table>
			</div>
        </div>
		
		 <!-- create Unidad modal -->		  

		<div class="modal fade create_unidad" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Nueva Unidad </h4>
				</div>
				<form class="form-horizontal" role="form" method="POST" action="{{ url('/unidad') }}">
					{{ csrf_field() }}
					<div class="modal-body">
						<label for="des_und">Detalle Unidad</label>
						<div class="form-group ">
							<input class="form-control " id="des_und" name="des_und" placeholder="Unidad" type="text">
						</div>
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-primary" >Deshacer</button>
						<button type="submit" class="btn btn-success">Guardar</button>
					<!--	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>-->
					</div>
				</form>
			  </div>
			</div>
		</div>
		 <!-- /modals -->
		 
		   <!-- edit Unidad modal -->		  

		  <div id="edit_unidad_modal" class="modal fade edit_unidad" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Editar Unidad </h4>
				</div>
				<form id ="edit_unidad_form" class="form-horizontal" role="form" method="POST">
					<input name="_method" type="hidden" value="PUT">
					{{ csrf_field() }}
					<div class="modal-body">
						<label for="edit_des_und">Detalle Unidad</label>
						<div class="form-group ">
							<input class="form-control " id="edit_des_und"  name="edit_des_und" placeholder="Unidad" type="text">
						</div>
					</div>
					<div class="modal-footer"><!--
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
					 <button type="reset" class="btn btn-primary" data-dismiss="modal">Deshacer</button>
					 <button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</form>
			  </div>
			</div>
		  </div>
		  <!-- /modals -->
		  
		    <!-- delete Unidad modal -->		  

		  <div class="modal fade delete_unidad"tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Eliminar Unidad </h4>
				</div>
				<div class="modal-body">
						
				
					<label for="">Cod. Unidad</label>
					<div class="form-group ">
						<input class="form-control " id="inputsm" disabled="disabled" placeholder="01" type="text">
					</div>
					<br/>
					<label for="">Detalle Unidad</label>
					<div class="form-group ">
						<input class="form-control " id="inputsm"  disabled="disabled" placeholder=" Unidad" type="text">
					</div>
					<hr>
						<h4>¿Deseas eliminar la Unidad?</h4>	
				</div>

				<div class="modal-footer"><!--
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				  <button type="reset" class="btn btn-primary">Deshacer</button>
				  <button type="submit" class="btn btn-danger"> Eliminar</button>
				</div>

			  </div>
			</div>
		  </div>
		  <!-- /modals -->
		
	</div>		
@stop
@section('postscripts')
<script>
$('#edit_unidad_modal').on('shown.bs.modal', function(e) {
	var des_cat = $(e.relatedTarget).data('desc-und');
	var edit_id = $(e.relatedTarget).data('id-und');
	$("#edit_unidad_form").attr("action", $(location).attr('protocol') + "//" + $(location).attr('host') +"/unidad/" + edit_id);
	$(e.currentTarget).find('input[name="edit_des_und"]').val(des_cat);
});
</script>
@stop