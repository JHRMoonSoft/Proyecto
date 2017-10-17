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
			</ul>
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<div class="table-responsive">
				<table id="datatable-buttons" class="table table-striped table-bordered ">
				  <thead>
				   <tr>
						<th>Cod. Categoría</th>
						<th>Detalle Categoría</th>
						<th>Fecha. Creado</th>
						<th>Fecha. Modificado</th>
						<th>Opciones </th>
						<!--<th>Eliminar</th>-->
					</tr>
				  </thead>
				  <tbody>
					
					<tr>
					  <td>01</td>
						<td>Compra peoductos</td>
						<td>22-10-2017</td>	
						<td>12-11-2017</td>	
						<td>
								
							<button type="button" class="btn btn-sm btn-primary glyphicon glyphicon-edit btn-xs" data-toggle="modal" data-target=".edit_categoria"></button>
							<button type="button" class="btn btn-sm btn-danger glyphicon glyphicon-remove btn-xs" data-toggle="modal" data-target=".delete_categoria"></button>
								
						</td>
						
				
					</tr>                       
					
				  </tbody>
				</table>
			</div>
        </div>
		
		 <!-- create Categoria modal -->		  

		  <div class="modal fade create_categoria">" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Nueva Categoria </h4>
				</div>
				<div class="modal-body">
				
					<label for="">Cod. Categoria</label>
					<div class="form-group ">
						<input class="form-control " id="inputsm" disabled="disabled" placeholder="01" type="text">
					</div>
					<br>
					<label for="">Detalle Categoria</label>
					<div class="form-group ">
						<input class="form-control " id="inputsm" placeholder="Categoria" type="text">
					</div>
				
				</div>
				<div class="modal-footer"><!--
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				  <button type="submit" class="btn btn-primary">Deshacer</button>
				  <button type="button" class="btn btn-success">Guardar</button>
				</div>

			  </div>
			</div>
		  </div>
		 <!-- /modals -->
		 
		   <!-- edit Categoria modal -->		  

		  <div class="modal fade edit_categoria">" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Editar Categoria </h4>
				</div>
				<div class="modal-body">
				
					<label for="">Cod. Categoria</label>
					<div class="form-group ">
						<input class="form-control " id="inputsm" disabled="disabled" placeholder="01" type="text">
					</div>
					<br>
					<label for="">Detalle Categoria</label>
					<div class="form-group ">
						<input class="form-control " id="inputsm" placeholder="Categoria" type="text">
					</div>
				
				</div>
				<div class="modal-footer"><!--
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				  <button type="submit" class="btn btn-primary">Deshacer</button>
				  <button type="button" class="btn btn-success">Guardar</button>
				</div>

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