@extends('layouts.app')
@section('content')  

@section('x_content')

    <div class="x_panel">
	    <div class="x_title">
			<h2>Requisición  Interna</h2>  
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
							 <a>Detalle Requisición  </a><br/>
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
										<th>Usuario</th>
										<th>Observaciones </th>
									</tr>
								</thead>
								<tbody>
									
									<tr>
									  <td>0023933</td>
										<td>26-06-2017</td>
										<td>Requisición interna </td>
										<td>entrega</td>
										<td>pepito</td>
										<td>Entrega parcial en espera de nueva compra</td>
										
									</tr> 
									<tr>
									  <td>0023933</td>
										<td>26-06-2017</td>
										<td>Autorizar requisición </td>
										<td>entrega</td>
										<td>pepito</td>
										<td>Entrega parcial en espera de nueva compra</td>
										
									</tr> 
									<tr>
									  <td>0023933</td>
										<td>26-06-2017</td>
										<td>Entregar requisición </td>
										<td>entrega</td>
										<td>pepito</td>
										<td>Entrega parcial en espera de nueva compra</td>
										
									</tr> 
									<tr>
									  <td>0023933</td>
										<td>26-06-2017</td>
										<td>Recibir requisición </td>
										<td>entrega</td>
										<td>pepito</td>
										<td>Entrega parcial en espera de nueva compra</td>
										
									</tr> 
								</tbody>
							</table>
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
							<a>Requisición  </a><br/>
						</h2>
						<br/>
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row ">
							
									<div class="btn-group  col-md-2">
										<h5>Nombre:</h5>
										<input type="text"class="form-control select2-offscreen" id="cc" placeholder="" tabindex="-1">
											
									</div>
									<div class="btn-group  col-md-2 " data-toggle="buttons">	
										<h5>Cargo:</h5>
										<input type="text"class="form-control select2-offscreen" id="cc" placeholder="" tabindex="-1">
									</div>	
									<div class=" col-md-2 " >
										<h5>Área/ Sección/ Programa:</h5>
										<input type="text"class="form-control select2-offscreen" id="cc" placeholder="" tabindex="-1">
									</div>
									<div class=" col-md-2 " >
										<h5>Coordinación: </h5>
										<input type="text"class="form-control select2-offscreen" id="cc" placeholder="" tabindex="-1">
									</div>
									<div class="btn-group   col-md-4" data-toggle="buttons">
										<h5>Justificación:</h5>
										<input type="text"class="form-control select2-offscreen" id="cc" placeholder="" tabindex="-1">
											<br/>					
									</div>	
								</div>
							</div>
						</div>
					
						<h2 class="title">
							<a>Productos  </a><br/>
						</h2><br/>
						<div class="panel panel-default">
							
							<div class="table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered ">
									<thead>
									   <tr>
											<th>No.</th>
											<th>Producto</th>
											<th>Cantidad</th>
											<th>Unidad</th>
											<th>Descripción detallada</th>
											<th>Estado</th>
											<th>Cant. Aprobada</th>
										</tr>
									</thead>
									<tbody>
										
										<tr>
											<td>1</td>
											<td>Aceite </td>
											<td>2 cajas de 12 UND</td>
											<td>1 caja 2 UND</td>
											<td>10 UND</td>
											<td>Aprobado / Anulado  </td>
											<td>10 UND</td>
										</tr> 
									</tbody>
								</table>
							</div>
						</div>
						<br/>
						<h2 class="title">
							<a> Proveedores sugeridos </a><br/>
						</h2><br/>
						<div class="panel panel-default">
							
							<div class="table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered ">
									<thead>
									   <tr>
											<th>No.</th>
											<th>Nombre Proveedor</th>
											<th>Nit. Proveedor</th>
											<th>Tel. Fijo</th>
											<th>Tel. Celular</th>
											<th>Dirección</th>
											<th>Estado</th>
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
											<th>Autorizado</th>
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
					<div class="block_content"><br/>
						<h2 class="title">
								 <a>Espacio exclusivo para el Asistente de Gestión Administrativa</a><br/>
							</h2>
							<br/>
						<div class="row ">
							<div class="btn-group  col-md-5">
								<h5>Tipo solicitud </h5>
								<label for="success" class="btn btn-success">Solicitud Consumo  <input type="checkbox" id="success" disabled class="badgebox"><span class="badge">&check;</span></label>
								<label for="warning" class="btn btn-warning">Solicitud Inversión  <input type="checkbox" id="warning" disabled class="badgebox"><span class="badge">&check;</span></label>
								
							</div>
							
							<div class="btn-group  col-md-2 " data-toggle="buttons">	
								<h5>Aprobado en comite</h5>
								<label class="btn btn-primary ">
									<input type="radio" name="options" disabled  readonly="readonly" id="option2" autocomplete="off" >SI
									<span class="glyphicon glyphicon-ok"  readonly="readonly" disabled></span>
								</label>

								<label class="btn btn-danger">
									<input type="radio" name="options" disabled  readonly="readonly" id="option1" autocomplete="off">No
									<span class="glyphicon glyphicon-ok"  readonly="readonly" disabled></span>
								</label>
							
							</div>	
							
							<div class="btn-group   col-md-2" data-toggle="buttons">
								<h5>Proveedor Autorizado</h5>
								<label class="btn btn-primary ">
									<input type="radio" name="options"disabled readonly="readonly" id="option2" autocomplete="off">SI
									<span class="glyphicon glyphicon-ok"   readonly="readonly"></span>
								</label>

								<label class="btn btn-danger">
									<input type="radio" name="options" disabled readonly="readonly" id="option1" autocomplete="off">No
									<span class="glyphicon glyphicon-ok"  readonly="readonly"></span>
								</label>
							
							</div>
							
							<div class=" col-md-3 " ><h5>Fecha de aprobación</h5>
									<div class="input-group registration-date-time">
										<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
										<input class="form-control" name="registration_date" disabled id="registration-date" type="date">
										<span class="input-group-btn">
										</span>
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
						<span>Paso 4</span>
					  </a> 
					</div>
					<div class="block_content"><br/>
						<h2 class="title">
								 <a>Recibí los elementos solicitados en este documento</a><br/>
							</h2>
							<br/>
						<div class="panel panel-default">
							
							<div class="table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered ">
									<thead>
									 <tr>
											<th>No.</th>
											<th>Producto</th>
											<th>Descripción detallada</th>											
											<th>Cant. Aprobada</th>
											<th>Cant.Recibida </th>
											<th>Cant.Pendiente</th>
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
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row ">
							<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"><br>
								<div class="form-group">
									<h5 >Observaciones	</h5>																		
									<div class="col-md-8 col-sm-8 col-xs-12"></br>	
										<textarea type="text" id="last-name" disabled name="last-name"rows="6" required="required" class="form-control col-md-7 col-xs-12"></textarea>
									</div><br>
								</div>
								<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>									
									<div class="form-group col-md-12 col-xs-12">
										<h5>Nombre </h5>
											<input type="text" class="form-control" disabled id="Schoolname" name="Schoolname[]" value="" placeholder="¿quien recibe?">
									</div>										
								</div>	
								<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>						
									<div class="form-group col-md-12 col-xs-12">
										<h5>Cargo </h5>
											<input type="text" class="form-control"  disabled id="Schoolname" name="Schoolname[]" value="" placeholder="cargo">
									</div>
								</div>	
								<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>
							
									<h5>Fecha </h5>
									<div class="input-group registration-date-time">
										<span class="input-group-addon" id="basic-addon1"><span  class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
										<input class="form-control" disabled name="registration_date" id="registration-date" type="date">
										<span class="input-group-btn">
										</span>
									</div>
								
								</div>	
								
							</form>
						</div>
												
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