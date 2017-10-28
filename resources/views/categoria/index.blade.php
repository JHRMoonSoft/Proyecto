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
			<h2>Listado de Categorías </h2> &nbsp&nbsp&nbsp
						
			<button type="button" class="btn btn-warning " data-toggle="modal" data-target=".create_categoria">Nueva Categoria </button>
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
						<th>Detalle Categoría</th>
						<th>Fecha de Creación</th>
						<th>Fecha de Modificación</th>
						<th>Opciones</th>
						<!--<th>Eliminar</th>-->
					</tr>
				  </thead>
				  <tbody>
					@foreach($categorias as $categoria)
					<tr>
					  <td>{{ $categoria->id }}</td>
						<td>{{ $categoria->des_cat }}</td>
						<td>{{ $categoria->created_at->format('Y-m-d') }}</td>	
						<td>{{ $categoria->updated_at->format('Y-m-d') }}</td>	
						<td>
								
							<button type="button" class="btn btn-sm btn-primary glyphicon glyphicon-edit btn-xs" data-desc-cat="{{$categoria->des_cat}}" data-id-cat="{{$categoria->id}}" data-toggle="modal" data-target=".edit_categoria"></button>
							<button type="button" class="btn btn-sm btn-danger glyphicon glyphicon-remove btn-xs" data-toggle="modal" data-target=".delete_categoria"></button>
								
						</td>
						
				
					</tr>                       
					@endforeach
				  </tbody>
				</table>
			</div>
        </div>
		
		 <!-- create Categoria modal -->		  

		  <div class="modal fade create_categoria" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Nueva Categoria </h4>
				</div>
				<form class="form-horizontal" role="form" method="POST" action="{{ url('/categoria') }}">
					{{ csrf_field() }}
					<div class="modal-body">
						<label for="des_cat">Detalle Categoria</label>
						<div class="form-group ">
							<input class="form-control " id="des_cat" name="des_cat" placeholder="Categoria" type="text">
						</div>
					</div>
					<div class="modal-footer"><!--
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
					<button type="button" class="btn btn-primary" data-dismiss="modal">Deshacer</button>
					<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</form>
			  </div>
			</div>
		  </div>
		 <!-- /modals -->
		 
		   <!-- edit Categoria modal -->		  

		  <div id="edit_categoria_modal" class="modal fade edit_categoria" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Editar Categoria </h4>
				</div>
				<form id ="edit_categoria_form" class="form-horizontal" role="form" method="POST">
					<input name="_method" type="hidden" value="PUT">
					{{ csrf_field() }}
					<div class="modal-body">
						<label for="">Detalle Categoria</label>
						<div class="form-group ">
							<input class="form-control " name="edit_des_cat" id="edit_des_cat" type="text">
						</div>
					</div>
					<div class="modal-footer"><!--
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
					<button type="button" class="btn btn-primary" data-dismiss="modal">Deshacer</button>
					<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</form>
			  </div>
			</div>
		  </div>
		  <!-- /modals -->
		  
		    <!-- delete Categoria modal -->		  

		  <div class="modal fade delete_categoria">" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Eliminar Categoria </h4>
				</div>
				<div class="modal-body">
						
				
					<label for="">Cod. Categoria</label>
					<div class="form-group ">
						<input class="form-control " id="inputsm" disabled="disabled" placeholder="01" type="text">
					</div>
					<br/>
					<label for="">Detalle Categoria</label>
					<div class="form-group ">
						<input class="form-control " id="inputsm"  disabled="disabled" placeholder="Categoria" type="text">
					</div>
					<hr>
						<h4>¿Deseas eliminar la Categoria?</h4>	
				</div>

				<div class="modal-footer"><!--
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				  <button type="button" class="btn btn-primary">Deshacer</button>
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
$('#edit_categoria_modal').on('shown.bs.modal', function(e) {
	var des_cat = $(e.relatedTarget).data('desc-cat');
	var edit_id = $(e.relatedTarget).data('id-cat');
	$("#edit_categoria_form").attr("action", $(location).attr('protocol') + "//" + $(location).attr('host') +"/categoria/" + edit_id);
	$(e.currentTarget).find('input[name="edit_des_cat"]').val(des_cat);
});
</script>
@stop