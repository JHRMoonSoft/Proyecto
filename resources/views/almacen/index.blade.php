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
			<h2>Productos Almacén </h2> &nbsp&nbsp&nbsp
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
			<button type="button" class="btn btn-warning " data-toggle="modal" data-target=".create_unidad">Nueva unidad </button>
		
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
						<th>Producto</th>
						<th>Categoría</th>
						<th>Esatado </th>
						<th>Cant.Disponible </th>
						<th>Unidad</th>
						<!--<th>Eliminar</th>-->
					</tr>
				  </thead>
				  <tbody>
					
					<tr>
					  <td>01</td>
						<td>Producto</td>
						<td>Categoría</td>	
						<td>disponibe / agotado</td>
						<td>15</td>	
						<td> Unidad	</td>
						
				
					</tr>                       
					
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
				  <h4 class="modal-title" id="myModalLabel2">Nueva Unidad </h4>
				</div>
				<div class="modal-body">
				
					<label for="">Cod. Unidad</label>
					<div class="form-group input-sm">
						<input class="form-control input-sm" id="inputsm" disabled="disabled" placeholder="01" type="text">
					</div>
					<label for="">Detalle Unidad</label>
					<div class="form-group input-sm">
						<input class="form-control input-sm" id="inputsm" placeholder="Nombre completo" type="text">
					</div>
				
				</div>
				<div class="modal-footer"><!--
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				  <button type="submit" class="btn btn-danger">Deshacer</button>
				  <button type="button" class="btn btn-primary">Guardar</button>
				</div>

			  </div>
			</div>
		  </div>
		 <!-- /modals -->
		 
		   <!-- edit Unidad modal -->		  

		  <div class="modal fade edit_unidad">" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Editar Unidad </h4>
				</div>
				<div class="modal-body">
				
					<label for="">Cod. Unidad</label>
					<div class="form-group input-sm">
						<input class="form-control input-sm" id="inputsm" disabled="disabled" placeholder="01" type="text">
					</div>
					<label for="">Detalle Unidad</label>
					<div class="form-group input-sm">
						<input class="form-control input-sm" id="inputsm" placeholder="Nombre completo" type="text">
					</div>
				
				</div>
				<div class="modal-footer"><!--
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				  <button type="submit" class="btn btn-danger">Deshacer</button>
				  <button type="button" class="btn btn-primary">Guardar</button>
				</div>

			  </div>
			</div>
		  </div>
		  <!-- /modals -->
		  
		    <!-- delete Unidad modal -->		  

		  <div class="modal fade delete_unidad">" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Eliminar Unidad </h4>
				</div>
				<div class="modal-body">
						
				
					<label for="">Cod. Unidad</label>
					<div class="form-group input-sm">
						<input class="form-control input-sm" id="inputsm" disabled="disabled" placeholder="01" type="text">
					</div>
					<label for="">Detalle Unidad</label>
					<div class="form-group input-sm">
						<input class="form-control input-sm" id="inputsm"  disabled="disabled" placeholder="Nombre completo" type="text">
					</div>
					<hr>
						<h4>¿Deseas eliminar esta Unidad?</h4>	
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
        <!-- /page content -->
		<!--
		<script type="text/javascript">
			$(document).ready(function(){
				function onFinishCallback(){
				$('#wizard').smartWizard('showMessage','Finish Clicked');
			} 
			});
			
			
		</script>
		-->
@stop
<!--6581128-->
<!--229392650-->