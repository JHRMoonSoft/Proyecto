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
		<div class="x_content">
			<div class="table-responsive">
				<table id="datatable-buttons" class="table table-striped table-bordered ">
				  <thead>
				   <tr>
						<th>Cod. Conversion</th>
						<th>Unidad Empaque </th>
						<th>Cantidad</th>
						<th> Unidad Almacén</th>
						<th>Fecha. Creado</th>
						<th>Fecha. Modificado</th>
						<th>Opciones </th>
						<!--<th>Eliminar</th>-->
					</tr>
				  </thead>
				  <tbody>
					
					<tr>
					  <td>01</td>
						<td>paquete</td>
						<td>30</td>	
						<td>paños</td>
						<td>22-10-2017</td>	
						<td>12-11-2017</td>	
						<td>
								
							<button type="button" class="btn btn-sm btn-primary glyphicon glyphicon-edit btn-xs" data-toggle="modal" data-target=".edit_unidad"></button>
							<button type="button" class="btn btn-sm btn-danger glyphicon glyphicon-remove btn-xs" data-toggle="modal" data-target=".delete_unidad"></button>
								
						</td>
						
				
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
				  <h4 class="modal-title" id="myModalLabel2">Nueva  Unidad Empaque</h4>
				</div>
				<div class="modal-body">					
					
						<label for="">Cod. Conversion</label>
						<div class="form-group ">
							<input class="form-control " id="inputsm" disabled="disabled" placeholder="codigo" type="text">
						</div>
							<br/>
						<label for=""> Unidad Empaque</label>
						<div class="form-group ">
							<input class="form-control " id="inputsm" placeholder=" Unidad Empaque" type="text">
						</div>
							<br/>
						<label for="">Cantidad</label>
						<div class="form-group ">
							<input class="form-control " id="inputsm" placeholder="Cantidad" type="text">
						</div>
						<br/>
						<label for=""> Unidad de Almacén</label>
						<div class="form-group ">
							<select class="form-control" id="exampleSelect1">
							  <option value="" selected>Seleccionar</option>
							  <option> caja</option>
							  <option>lata</option>
							</select>
						</div>
				
				</div>
				<div class="modal-footer"><!--
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				  <button type="submit" class="btn btn-success">Deshacer</button>
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
				  <h4 class="modal-title" id="myModalLabel2">Editar  Unidad Empaque</h4>
				</div>
				<div class="modal-body">					
					
						<label for="">Cod. Conversion</label>
						<div class="form-group ">
							<input class="form-control " id="inputsm" disabled="disabled" placeholder="codigo" type="text">
						</div>
							<br/>
						<label for=""> Unidad Empaque</label>
						<div class="form-group ">
							<input class="form-control " id="inputsm" placeholder=" Unidad Empaque" type="text">
						</div>
							<br/>
						<label for="">Cantidad</label>
						<div class="form-group ">
							<input class="form-control " id="inputsm" placeholder="Cantidad" type="text">
						</div>
						<br/>
						<label for=""> Unidad de Almacén</label>
						<div class="form-group ">
							<select class="form-control" id="exampleSelect1">
							  <option value="" selected>Seleccionar</option>
							  <option> caja</option>
							  <option>lata</option>
							</select>
						</div>
				
				</div>
				<div class="modal-footer"><!--
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				  <button type="submit" class="btn btn-success">Deshacer</button>
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
				  <h4 class="modal-title" id="myModalLabel2">Eliminar  Unidad Empaque</h4>
				</div>
				<div class="modal-body">					
					
						<label for="">Cod. Conversion</label>
						<div class="form-group ">
							<input class="form-control " id="inputsm" disabled="disabled" placeholder="codigo" type="text">
						</div>
							<br/>
						<label for=""> Unidad Empaque</label>
						<div class="form-group ">
							<input class="form-control " id="inputsm" disabled="disabled" placeholder="Unidad Empaque" type="text">
						</div>
							<br/>
						<label for="">Cantidad</label>
						<div class="form-group ">
							<input class="form-control " id="inputsm" disabled="disabled" placeholder="Cantidad" type="text">
						</div>
						<br/>
						<label for=""> Unidad de Almacén</label>
						<div class="form-group ">
							<select class="form-control" id="exampleSelect1" disabled="disabled">
							  <option value="" selected>Seleccionar</option>
							  <option> caja</option>
							  <option>lata</option>
							</select>
						</div>
						<hr>
						<h4>¿Deseas eliminar la Unidad de Empaque?</h4>	
				
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