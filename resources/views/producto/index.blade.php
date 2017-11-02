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
			<h2>Listado de productos </h2> &nbsp&nbsp&nbsp
						
			<button type="button" class="btn btn-warning " data-toggle="modal" data-target=".create_producto">Nuevo Producto</button>
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
						<th>Detalle Producto</th>
						<th>Categoria Producto</th>
						<th>Unidad de Almacen</th>
						<th>Unidades de Empaque</th>
						<th>Fecha. Creado</th>
						<th>Fecha. Modificado</th>
						<th>Opciones </th>
						
					</tr>
				  </thead>
				  <tbody>
					@foreach($productos as $producto)
					<tr>
					  <td>{{ $producto->id}} </td>
						<td>{{ $producto->des_prd}} </td>
						<td>{{ $producto->categoria->des_cat }} </td>
						<td>
							{{ $producto->unidad->des_und }}
						</td>
						<td>
							@foreach($producto->unidades as $unidad)
							{{ $unidad->des_und }}
								</br>
							@endforeach 
						</td>
						<td>{{ $producto->created_at->format('Y-m-d') }}</td>	
						<td>{{ $producto->updated_at->format('Y-m-d') }}</td>	
						<td>
							<button type="button" class="btn btn-sm btn-primary glyphicon glyphicon-edit btn-xs" data-desc-prd="{{$producto->des_prd}}" data-id-prd="{{$producto->id}}" data-id-cat="{{$producto->categoria->id}}" data-id-und="{{$producto->unidad->id}}" data-id-unds="{{$producto->unidades}}" data-toggle="modal" data-target=".edit_producto"></button>
							<button type="button" class="btn btn-sm btn-danger glyphicon glyphicon-remove btn-xs" data-toggle="modal" data-target=".delete_producto"></button>
						</td>
					</tr>
					@endforeach 
				  </tbody>
				</table>
			</div>
        </div>
		
		 <!-- create producto modal -->		  

		  <div class="modal fade create_producto" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Nuevo Producto </h4>
				</div>
				<form class="form-horizontal" method="POST" action="{{ url('/producto') }}">
						{{ csrf_field() }}
					<div class="modal-body">
						<label for="des_prd">Detalle Producto</label>
						<div class="form-group ">
							<input class="form-control " id="des_prd" name="des_prd" placeholder="Producto" type="text">
						</div>
						<label for="categoria_id">Categorias</label>
						<div class="form-group">
							@if(!$categorias->isEmpty())
								<select id="categoria_id"  name="categoria_id" class="form-control col-md-7 col-xs-12" >
									<option value="" selected>Seleccionar</option>
									@foreach($categorias as $categoria)
										<option value="{{$categoria->id}}">{{$categoria->des_cat}} </option>
									@endforeach
								</select>
							@endif
						</div>
						<label for="unidades">Unidad Almacen</label>
						<div class="form-group">
							@if(!$unidades->isEmpty())
								<select id="unidad_id"  name="unidad_id" class="form-control col-md-7 col-xs-12" >
									@foreach($unidades as $unidad)
										<option value="{{$unidad->id}}">{{$unidad->des_und}} </option>
									@endforeach
								</select>
							@endif
						</div>
						<label for="unidades">Unidades de Empaque</label>
						<div class="form-group">
							@if(!$unidades->isEmpty())
								<select multiple="multiple" id="unidades"  name="unidades[]" class="form-control col-md-7 col-xs-12" >
									@foreach($unidades as $unidad)
										<option value="{{$unidad->id}}">{{$unidad->des_und}} </option>
									@endforeach
								</select>
							@endif
						</div>
					</div>
					<div class="modal-footer"><!--
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
						<button type="reset" class="btn btn-primary">Deshacer</button>
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</form>
			  </div>
			</div>
		  </div>
		 <!-- /modals -->
		 
		   <!-- edit producto modal -->		  

		  <div id="edit_producto_modal" class="modal fade edit_producto" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Editar Producto </h4>
				</div>
				<form id ="edit_producto_form" class="form-horizontal" role="form" method="POST">
					<input name="_method" type="hidden" value="PUT">
					{{ csrf_field() }}
					<div class="modal-body">
						<label for="edit_des_prd">Detalle Producto</label>
						<div class="form-group ">
							<input class="form-control " id="edit_des_prd" name="edit_des_prd" placeholder="Producto" type="text">
						</div>
						<label for="categorias">Categorias</label>
						<div class="form-group">
							@if(!$categorias->isEmpty())
								<select id="edit_cat_prd"  name="edit_cat_prd" class="form-control col-md-7 col-xs-12" >
									@foreach($categorias as $categoria)
										<option value="{{$categoria->id}}">{{$categoria->des_cat}} </option>
									@endforeach
								</select>
							@endif
						</div>
						<label for="edit_und_prd">Unidad de Almacen</label>
						<div class="form-group">
							@if(!$unidades->isEmpty())
								<select id="edit_und_prd"  name="edit_und_prd" class="form-control col-md-7 col-xs-12" >
									@foreach($unidades as $unidad)
										<option value="{{$unidad->id}}" >{{$unidad->des_und}} </option>
									@endforeach
								</select>
							@endif
						</div>
						<label for="edit_unds_prd">Unidades de Empaque</label>
						<div class="form-group">
							@if(!$unidades->isEmpty())
								<select multiple="multiple" id="edit_unds_prd"  name="edit_unds_prd[]" class="form-control col-md-7 col-xs-12" >
									@foreach($unidades as $unidad)
										<option value="{{$unidad->id}}">{{$unidad->des_und}} </option>
									@endforeach
								</select>
							@endif
						</div>
					</div>
					<div class="modal-footer"><!--
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
					  <button type="reset" class="btn btn-primary">Deshacer</button>
					  <button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</form>
			  </div>
			</div>
		  </div>
		  <!-- /modals -->
		  
		    <!-- delete producto modal -->		  

		  <div class="modal fade delete_producto" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Eliminar Producto </h4>
				</div>
				<div class="modal-body">
						
				
					<label for="">Cod. Producto</label>
					<div class="form-group ">
						<input class="form-control " id="inputsm" disabled="disabled" placeholder="01" type="text">
					</div>
					<br/>
					<label for="">Detalle Producto</label>
					<div class="form-group ">
						<input class="form-control " id="inputsm"  disabled="disabled" placeholder="Producto" type="text">
					</div>
					<hr>
						<h4>¿Deseas eliminar el Producto?</h4>	
				</div>

				<div class="modal-footer"><!--
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				  <button type="reset" class="btn btn-primary">Deshacer</button>
				  <button type="submit" class="btn btn-success">Guardar</button>
				</div>

			  </div>
			</div>
		  </div>
		  <!-- /modals -->
		
	</div>		
@stop
@section('postscripts')
<script>
$('#edit_producto_modal').on('shown.bs.modal', function(e) {
	var des_prd = $(e.relatedTarget).data('desc-prd');
	var edit_id = $(e.relatedTarget).data('id-prd');
	var cat_id = $(e.relatedTarget).data('id-cat');
	var und_id = $(e.relatedTarget).data('id-und');
	var unds = $(e.relatedTarget).data('id-unds');
	var unds_id_str = "";
	var unds_id = new Array();
	$.each(unds, function(key,val) {
            //unds_id_str = unds_id_str + val['id'] + ",";
			unds_id.push(val['id']);
        });
		//unds_id_str= unds_id_str.substring(0, unds_id_str.length - 1);
		//unds_id = unds_id_str.split(",");
		
	$("#edit_producto_form").attr("action", $(location).attr('protocol') + "//" + $(location).attr('host') +"/producto/" + edit_id);
	$(e.currentTarget).find('input[name="edit_des_prd"]').val(des_prd);
	$(e.currentTarget).find('input[name="edit_cat_prd"]').val(cat_id);
	$(e.currentTarget).find('input[name="edit_und_prd"]').val(und_id);
	$(e.currentTarget).find('input[name="edit_unds_prd"]').select2();
	alert($(e.currentTarget).find('input[name="edit_unds_prd"]').find('option:[value="1"]').prop('selected', true));
	//$(e.currentTarget).find('input[name="edit_unds_prd"]').select2('val',unds_id);
	
});
</script>
@stop