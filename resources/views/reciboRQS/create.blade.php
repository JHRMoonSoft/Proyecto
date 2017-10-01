@extends('layouts.app')
@section('content')  
@section('pagetitle')
  <h3>Formato de Requisición interna</h3> 
@stop
@section('x_search') 
	<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search"> 
						
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Search for...">
		<span class="input-group-btn">
				  <button class="btn btn-default" type="button">Go!</button>
			  </span> 
		</div>  
	</div> 
	  
@stop   
  
@section('x_content')

    <div class="x_panel">
	    <div class="x_title">
			<h2>Recibo de Requisicion interna</h2>  
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
		  <ul class="list-unstyled timeline">
			<li>
				  <div class="block">
					<div class="tags">
					  <a href="" class="tag">
						<span>Paso 1</span>
					  </a>
					</div>
					<div class="block_content">
							<h2 class="title">
							 <a>Detalle de requisicion autorizada</a><br/>
						</h2>
					
						<br />
						
						<div class="table-responsive">
							<table id="datatable-buttons" class="table table-striped table-bordered ">
								<thead>
								   <tr>
										<th>Código</th>
										<th>Fecha</th>																																																				
										<th>Asunto</th>	
										<th>Estado</th>
										<th>Solicitante</th>
										<th>Autorizado</th>
										<th>Recibe</th>
										<th>Fecha recibo </th>
										<th>Observaciones </th>
									</tr>
								</thead>
								<tbody>
									
									<tr>
									  <td>0023933</td>
										<td>26-06-2017</td>
										<td> compa prueba</td>
										<td>entrega</td>
										<td>pepito</td>
										<td>pepito</td>
										<td>pepito</td>	
										<td>06-07-2017</td>	
										<td>Entrega parcial en espera de nueva compra</td>
										
									</tr> 
								</tbody>
							</table>
						</div>
						<br/>
							<h2 class="title">
							<a for="checkbox1">
								Mensaje  
							</a> 
						</h2><br/>
							<div class="panel panel-default">
								<div class="panel-body">
									ejemplo
								</div>
							</div>
						<br/>
						<div class="row ">
						
						<br/>
						
							<div class="btn-group  col-md-12">
								<label for="success" class="btn btn-success">Solicitud Consumo  <input type="checkbox" disabled id="success" class="badgebox"><span class="badge">&check;</span></label>
								<label for="warning" class="btn btn-warning">Solicitud Inversión  <input type="checkbox" disabled id="warning" class="badgebox"><span class="badge">&check;</span></label>
							<br/><br/><br/>
					
							
							
							</div><!--
							-->
								<div class="btn-group  col-md-2 " data-toggle="buttons"><br>
									
									
									<h5>Aprobado en comite</h5>
									<label class="btn btn-primary ">
										<input type="radio" name="options" disabled id="option2" autocomplete="off" chacked>SI
										<span class="glyphicon glyphicon-ok"></span>
									</label>

									<label class="btn btn-danger">
										<input type="radio" name="options" readonly="readonly" id="option1" autocomplete="off">No
										<span class="glyphicon glyphicon-ok"></span>
									</label>
								
								</div>	
							
								<div class="btn-group   col-md-3" data-toggle="buttons"><br>
									<h5>Proveedor Autorizado</h5>
									
									<label class="btn btn-primary ">
										<input type="radio" name="options" readonly="readonly" id="option2" autocomplete="off" chacked>SI
										<span class="glyphicon glyphicon-ok"></span>
									</label>

									<label class="btn btn-danger">
										<input type="radio" name="options" readonly="readonly" id="option1" autocomplete="off">No
										<span class="glyphicon glyphicon-ok"></span>
									</label>
								
								</div>
							
							<div class="btn-group  col-md-3 " data-toggle="buttons"><br>
								<div class="form-group ">
									<h5>Fecha de aprobación</h5>
									<div class="input-group registration-date-time">
										<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
										<input class="form-control" name="registration_date" disabled id="registration-date" type="date">
										<span class="input-group-btn">
										</span>
									</div>
								</div>	
							</div>	
							<div class="btn-group  col-md-4 " data-toggle="buttons"><br>
								<div class="form-group">
									<h5>Estado del sugerido<h5>
									<select class="form-control " disabled id="exampleSelect1">
									  <option value="" selected>Seleccionar</option>
									  <option> AUTORIZAR / REQUISICION</option>
									  <option>RECHAZAR / REQUISICION</option>
									</select>
								</div>
							</div>
						</div>
						<br/>
						
					
							
						
					</div>
				  </div>
				</li>
				<li>
				  <div class="block">
					<div class="tags">
					  <a href="" class="tag">
						<span>Paso 2</span>
					  </a>
					</div>
					<div class="block_content"><br/>
					
						
					
						<h2 class="title">
							 <a>Detalle de  requisición  </a><br/>
						</h2><br/>
						
							<div class="table-responsive">
							<table id="datatable-buttons" class="table table-striped table-bordered ">
								<thead>
								   <tr>
										<th>Código</th>
										<th>Fecha </th>																																																				
										<th>Asunto</th>	
										<th>Estado</th>
										<th>Solicitante</th>
										<th>Cargo</th>
										<th>Detalle</th>
									</tr>
								</thead>
								<tbody>
									
									<tr>
									  <td>0023933</td>
										<td>26-06-2017</td>
										<td> compa prueba</td>
										<td>entrega</td>
										<td>pepito</td>
										<td>cargo</td>	
										<td>area</td>
										
									</tr> 
								</tbody>
							</table>
						</div>
						<h2 class="title">
							<a for="checkbox1">
								Mensaje  / Justificación  
							</a> 
						</h2><br/>
							<div class="panel panel-default">
								<div class="panel-body">
									ejemplo
								</div>
							</div>
						<br/>
						
						
							<h2 
							 <a>Productos </a><br/>
						</h2>
					
						<br />
						<div class="panel panel-default">
							
							<div class="table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered ">
									<thead>
									 <tr>
												<th>No.</th>
											<th>Producto</th>
											<th>Cantidad</th>
											<th>Uidad</th>
											<th>Descripción detallada</th>
											<th>Cant.Entregada</th>
											<th>Cant.Pendiente</th>
											<th>Observaciones </th>
										</tr>
									</thead>
									<tbody>
										
										<tr>
											<td>1</td>
											<td>Aceite </td>
											<td>10 UND</td>
											<td>1 caja 2 UND</td>
											<td>dedcd </td>
											<td>6 </td>
											<td>4 </td>
											<td>esperar de nueva compra</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<br/>
						<h2 >
							<a for="checkbox1">
								Proveedores  autorizados  
							</a> 
						</h2>					
						<br />
						<div class="panel panel-default">
							
							<div class="table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered ">
									<thead>
									   <tr>
											<th>No.</th>
											<th>Nombre Proveedor</th>
											<th>Nit. Proveedor</th>
											<th>Tel. fijo</th>
											<th>Tel. celular</th>
											<th>Dirección</th>
										</tr> 		
									</thead>
									<tbody>
										
										<tr>
											<td>1</td>
											<td>ggdgdf </td>
											<td>2dfgfdg</td>
											<td>gdgf</td>
											<td>gdfd</td>
											<td>esperar de n</td>
										</tr> 
									</tbody>
								</table>
							</div>
						</div>
						<br/>
						
						
					</div>
				  </div>
				</li>
				<li>
				  <div class="block">
					<div class="tags">
					  <a href="" class="tag">
						<span>Paso 3</span>
					  </a> 
					</div>
					<div class="block_content">
						
							<h5>Recibí los elementos solicitados en este formato<h5>
							<div class="row ">
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"><br>
									<div class="form-group">
										<h5 >Observaciones</h5>																		
										<div class="col-md-8 col-sm-8 col-xs-12"></br>	
											<textarea type="text" id="last-name" disabled name="last-name"rows="6" required="required" class="form-control col-md-7 col-xs-12"></textarea>
										</div><br>
									</div>
									<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>									
										<div class="form-group col-md-12 col-xs-12">
											<h5>Nombre </h5>
												<input type="text" disabled class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="¿quien recibe?">
										</div>										
									</div>	
									<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>						
										<div class="form-group col-md-12 col-xs-12">
											<h5>Cargo </h5>
												<input type="text" disabled class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="¿quien recibe?">
										</div>
									</div>	
									<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>
								
										<h5>Fecha </h5>
										<div class="input-group registration-date-time">
											<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
											<input class="form-control" disabled name="registration_date" id="registration-date" type="date">
											<span class="input-group-btn">
											</span>
										</div>
									
									</div>	
									
								</form>
							</div>
						<br />	
					</div>
				  </div>
				</li>
			</ul>

        </div>
		
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