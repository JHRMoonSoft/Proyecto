@extends('layouts.app')
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
			<h2>Historial de Facturas</h2> &nbsp&nbsp&nbsp
						
			<a  href="/factura/create" class="btn btn-warning" role="button">Nueva Factura </a>
			<div class="col-md-3 col-sm-3 col-xs-12 right">
				<div id="reportrange" class="pull-center" style="background: #fff; cursor: pointer; padding: 8px 10px; border: 1px solid #ccc">
					<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
					<span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
				</div>
			</div>
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
						<th class="text-center">Código </th>
						<th class="text-center">No. Documento </th>
						<th class="text-center">Concepto</th>
						<th class="text-center">Proveedor</th>
						<th class="text-center">Doc. Proveedor</th>
						<th class="text-center">Forma de pago </th>
						<th class="text-center">Comprado por</th>
						<th class="text-center">Fecha Creación </th>
						<th class="text-center">Fecha Edición </th>
						<th>Opciones  </th>
						<!--<th>Eliminar</th>-->
					</tr>
				  </thead>
				  <tbody>
					
					@foreach($facturas as $fact)
						<tr>
							<td>{{$fact->id}}</td>
							<td>{{$fact->no_fact}}</td>
							<td>{{$fact->cnp_fact}}</td>
							<td>{{$fact->proveedor->raz_soc}}</td>
							<td>{{$fact->proveedor->tip_doc}}. {{$fact->proveedor->num_doc}}</td>
							<td>{{$fact->form_pag}}</td>
							<td>{{$fact->comp_fact}}</td>
							<td>
								@if($fact->created_at)
									{{$fact->created_at->format('Y-m-d') }}
								@endif
							</td>	
							<td>
								@if($fact->modified_at)
									{{$fact->modified_at->format('Y-m-d') }}
								@endif
							</td>
														
							<td>
		
								<a href="{{ url('/factura/'.$fact->id) }}" title="Detalle" class="btn btn-success glyphicon glyphicon-file btn-xs" data-title="Detalle"></a>
							</td>
					
						</tr>
					@endforeach                       
					
				  </tbody>
				</table>
			</div>
        </div>
		
	</div>
@endsection
