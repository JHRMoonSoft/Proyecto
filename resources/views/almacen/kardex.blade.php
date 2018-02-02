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
			<h2>Movimientos  en Almacén   </h2> &nbsp&nbsp&nbsp
			
			<div class=" col-md-2 col-sm-2 col-xs-6 right">
					<a  data-toggle="modal" data-target=".descargar" class="btn btn-primary  left" role="button"><i class="glyphicon glyphicon-cloud-download" aria-hidden="true"></i>&nbsp&nbsp Descargar </a>
			</div>
			<div class=" col-md-3 col-sm-3 col-xs-6 right">
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
							<th class="text-center">Fecha</th>
							<th class="text-center">Detalle</th>
							<th class="text-center">Producto</th>
							<th class="text-center">Unidad</th>
							<th class="text-center">Cant. Entrada</th>
							<th class="text-center">Cant. Salida</th>
							<th class="text-center">Saldo</th>
						</tr>
					</thead>
					<tbody>
						@foreach($registroalmacen as $regalm)
							<tr>
								<td>{{$regalm->id}}</td>					
								<td>{{$regalm->created_at->format('Y-m-d')}}</td>
								<td>{{$regalm->accionalmacen->des_acc_alm}}</td>
								<td>{{$regalm->almacen->producto->des_prd}}</td>
								<td>{{$regalm->almacen->producto->unidad->des_und}}</td>
								@if($regalm->accionalmacen->tip_acc_alm==1)
									<td>{{$regalm->cnt_prd}}</td>		
									<td></td>
								@else	
									<td></td>
									<td>{{$regalm->almacen->producto->des_prd}}</td>
								@endif
								<td> {{$regalm->almacen->cnt_prd}}</td>
							</tr> 
						@endforeach
					</tbody>
				</table>
			</div>
        </div>
		
	</div>
	
<!-- create Descargar modal -->		  

	<div class="modal fade descargar">
		<div class="modal-dialog modal-sm"style="width:210px;">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h5 class="modal-title" id="myModalLabel2">Seleccionar formato </h5><br/>
					<div class="content">
						<ul class="list-unstyled">
						  <li><input type="radio" name="radio1" id="radio1" value="option1" checked=""><label for="radio1">PDF</label></li>
						  <li><input type="radio" name="radio1" id="radio2" value="option2"><label for="radio2">Excel</label></li>
						</ul>       
						<button type="submit" class="btn-link btn-lg  ">Descargar Ahora</button>
					</div>	
				</div>
			</div>
		</div>
	</div>
 <!-- /modals -->
@endsection
@endsection



