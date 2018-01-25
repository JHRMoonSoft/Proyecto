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
			<h2>Listado Unidad de Empaque </h2> &nbsp&nbsp&nbsp
						
			<button type="button" class="btn btn-warning " data-toggle="modal" data-target=".create_unidad">Nueva Und. Empaque  </button>
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
						<th>Código</th>
						<th>Unidad Almacén</th>
						<th>Cantidad</th>
						<th>Unidad Empaque</th>
						<th>Fecha. Creado</th>
						<th>Fecha. Modificado</th>
						<th>Opciones </th>
						<!--<th>Eliminar</th>-->
					</tr>
				  </thead>
				  <tbody>
					@foreach($conversiones as $conversion)
						<tr>
							<td>{{$conversion->id}}</td>
							<td>{{$conversion->unidadinicial->des_und}}</td>
							<td>{{$conversion->cnt_fin_prd}}</td>	
							<td>{{$conversion->unidadfinal->des_und}}</td>
							<td>{{$conversion->created_at->format('Y-m-d') }}</td>	
							<td>{{$conversion->updated_at->format('Y-m-d') }}</td>	
							<td>
								<button type="button" class="btn btn-sm btn-primary glyphicon glyphicon-edit btn-xs" data-conv="{{$conversion}}" data-toggle="modal" data-target=".edit_conversion"></button>
								<!--<button type="button" class="btn btn-sm btn-danger glyphicon glyphicon-remove btn-xs" data-toggle="modal" data-target=".delete_unidad"></button>-->
							</td>
						</tr>                       
					@endforeach
				  </tbody>
				</table>
			</div>
        </div>
		
		 <!-- create Unidad modal -->		  

		  <div class="modal fade create_unidad">" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Nueva  Unidad Empaque</h4>
				</div>
				<form class="form-horizontal" method="POST" action="{{ url('/conversion') }}">
					{{ csrf_field() }}
					<div class="modal-body">					
						<label for=""> Unidad de Almacén</label>
						<div class="form-group ">
								@if(!empty($unidadesAlmacen))
								<select id="unidad_inicial_id"  name="unidad_inicial_id" class="form-control col-md-7 col-xs-12" >
									@foreach($unidadesAlmacen  as $unidadAlmacen)
										<option value="{{$unidadAlmacen->id}}">{{$unidadAlmacen->des_und}} </option>
									@endforeach
								</select>
							@endif
						</div>
						<br/>
						<label for="">Cantidad</label>
						<div class="form-group">
							<input class="form-control " id="cnt_fin_prd" name="cnt_fin_prd" placeholder="Cantidad" type="text">
						</div>
						<br/>
						<label for=""> Unidad Empaque</label>
						<div class="form-group ">
							@if(!$unidades->isEmpty())
								<select id="unidad_final_id"  name="unidad_final_id" class="form-control col-md-7 col-xs-12" >
									@foreach($unidades as $unidad)
										<option value="{{$unidad->id}}">{{$unidad->des_und}} </option>
									@endforeach
								</select>
							@endif
						</div>
					</div>
					<div class="modal-footer"><!--
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
					<button type="reset" class="btn btn-primary">Borrar</button>
					<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</form>
			  </div>
			</div>
		  </div>
		 <!-- /modals -->
		 
		   <!-- edit Unidad modal -->		  

		  <div id="edit_conversion_modal" class="modal fade edit_conversion" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Editar Unidad Empaque</h4>
				</div>
				<form id="edit_conversion_form" class="form-horizontal" role="form" method="POST">
					<input name="_method" type="hidden" value="PUT">
					{{ csrf_field() }}
					<div class="modal-body">					
						<label for="edit_und_ini_id"> Unidad de Almacén</label>
						<div class="form-group ">
								@if(!empty($unidadesAlmacen))
								<select id="edit_und_ini_id"  name="edit_und_ini_id" class="form-control col-md-7 col-xs-12" >
									@foreach($unidadesAlmacen as $unidadAlmacen)
										<option value="{{$unidadAlmacen->id}}">{{$unidadAlmacen->des_und}} </option>
									@endforeach
								</select>
							@endif
						</div>
						<br/>
						<label for="">Cantidad</label>
						<div class="form-group">
							<input class="form-control " id="edit_cnt_fin_prd" name="edit_cnt_fin_prd" placeholder="Cantidad" type="text">
						</div>
						<br/>
						<label for="edit_und_fin_id"> Unidad Empaque</label>
						<div class="form-group ">
							@if(!$unidades->isEmpty())
								<select id="edit_und_fin_id"  name="edit_und_fin_id" class="form-control col-md-7 col-xs-12" >
									@foreach($unidades as $unidad)
										<option value="{{$unidad->id}}">{{$unidad->des_und}} </option>
									@endforeach
								</select>
							@endif
						</div>
					</div>
					<div class="modal-footer"><!--
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
					 <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</form>
			  </div>
			</div>
		  </div>
		  <!-- /modals -->
		  
		    <!-- delete Unidad modal -->		  

		  <div class="modal fade delete_unidad" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Eliminar  Unidad Empaque</h4>
				</div>
				<div class="modal-body">					
					
					<label for="">Cod. Conversion</label>
					<div class="form-group ">
						<input class="form-control " id="inputsm" disabled="disabled" disabled placeholder="codigo" type="text">
					</div>
						<br/>
					<label for=""> Unidad Empaque</label>
					<div class="form-group ">
						<select class="form-control" id="educationDate" name="educationDate[]" disabled>
							<option value="" selected>Seleccionar</option>
							<option name="" value="">Barra</option>
							<option name="" value="">Bloque</option>
							<option name="" value="">Bolsa</option>
							<option name="" value="">Botella</option>
							<option name="" value="">Caja</option>
							<option name="" value="">Frasco</option>
							<option value="">Lata</option>
							<option value="">Paquete</option>
							<option value="">Pote</option>
							<option value="">Tarro</option>
							<option value="">Tubo</option>
							<option value="">Vaso</option>
							<option name="" value="">Unidad</option>
							<option value="">Kg</option>
							<option value="">Kilo</option>
							<option value="">Litro</option>
							<option value="">Lonjas</option>
						</select>
					</div>
					<br/>
					<label for="">Cantidad</label>
					<div class="form-group ">
						<input class="form-control " id="inputsm" placeholder="Cantidad" type="text" disabled>
					</div>
					<br/>
					<label for=""> Unidad de Almacén</label>
					<div class="form-group ">
						<select class="form-control" id="exampleSelect1" disabled>
						  <option value="" selected>Seleccionar</option>
						  <option> caja</option>
						  <option>lata</option>
						</select>
					</div>
				
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
$('#edit_conversion_modal').on('shown.bs.modal', function(e) {
	var conv = $(e.relatedTarget).data('conv');
	var und_ini_id = conv['unidadinicial']['id'];
	var und_fin_id = conv['unidadfinal']['id'];
	<!--alert(conv['unidadfinal']['id']);-->
	$(e.currentTarget).find('input[name="edit_und_ini_id"]').val(und_ini_id);
	$(e.currentTarget).find('input[name="edit_und_fin_id"]').val(und_fin_id);
	$(e.currentTarget).find('input[name="edit_cnt_fin_prd"]').val(conv['cnt_fin_prd']);
	$("#edit_conversion_form").attr("action", $(location).attr('protocol') + "//" + $(location).attr('host') +"/conversion/" + conv['id']);
});
</script>
@stop