@extends('layouts.app')
@section('content')  
@section('pagetitle')
  <h3></h3> 
@endsection
@section('x_search')
	
@endsection
@section('x_content')

    <div class="x_panel">
	    <div class="x_title">
			<h2>Productos Almacén </h2> &nbsp&nbsp&nbsp
			@permission('ver-nueva-rqs-historial-rqs-usuarios')			
				<a  href="\almacen\create" class="btn btn-warning" role="button">Ingresar Productos</a>
			@endpermission<!--
			<div class=" col-md-2 col-sm-2 col-xs-6 right">
					<a  data-toggle="modal" data-target=".descargar" class="btn btn-primary  left" role="button"><i class="glyphicon glyphicon-cloud-download" aria-hidden="true"></i>&nbsp&nbsp Descargar </a>
			</div>
			<div class=" col-md-3 col-sm-3 col-xs-6 right">
				<div id="reportrange" class="pull-center" style="background: #fff; cursor: pointer; padding: 8px 10px; border: 1px solid #ccc">
					<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
					<span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
				</div>
			</div>-->
			<div class="clearfix"></div>
	    </div>
		<div class="x_content"><br/>
			<div class="table-responsive">
				<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
				  <thead>
				   <tr>
						<th>Código</th>
						<th>Categoría</th>
						<th>Productos</th>												
						<th>Unidad</th>
						<th>Cantidad</th>
						<th>Esatado</th>
					</tr>
				  </thead>
				  <tbody>
					@foreach($almacen as $almc)											
						<tr>							 
							<td>{{$almc->id}}</td>					
							<td>{{$almc->producto->categoria->des_cat}}</td>
							<td>{{$almc->producto->des_prd}}</td>
							<td>{{$almc->producto->unidad->des_und}}</td>
							<td>{{$almc->cnt_prd}}</td>							
							<td>
								@if($almc->cnt_prd==0)
									Agotado
								@else
									Disponibe
								@endif
							
							</td>
						</tr>
						
					@endforeach
				  </tbody>
				</table>
			</div>
        </div>	
	</div>		
@stop
@section('postscripts')
<script>
	function getalmacen(id) {
		   $.get("{{ url('almacen/cargardetallealmace')}}", 
				{
					option: id,
					
				}, 
				function(data) {
					if(data != null)
						return data;
					else
						return null;
			});
	   }


	$('#lote').on('shown.bs.modal', function(e) {
		alert('entre!!');
		var des_prd = $(e.relatedTarget).data('data-id');
		var res = getalmacen(des_prd);
		$("#loquesea").val(res);  
		alert(JSON.stringify(res));
		
	});
</script>
     
	  
@stop
