@extends('layouts.app')  
@section('content')
<!-- page content -->
	<div class="right_col"  role="main">
         
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2> Orden de compras</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><p data-placement="top" data-toggle="tooltip" title="Regresar"><a href="/workflow/proceso" class="btn btn-default btn-xs" data-title="Ver"><span class="glyphicon glyphicon-arrow-left"></span></a></p></li>
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						 </ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
					
					
					<!-- Consolidar RQS--><!--
					<div class="col-md-offset-3 ">
						<!--RQS Pendientes--><!--
						<div class="col-md-4 ">
							<div class="input-group">
								<input type="text" class="form-control">
								<div class="input-group-btn" >
									<button type="button" class="btn btn-search btn-danger">
										<span class="glyphicon glyphicon-search"></span>
										<span class="label-icon">Buscar</span>
									</button>
									<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu pull-right" role="menu">
									  <li>
											<a href="#">
												<span class="glyphicon glyphicon-user"></span>
												<span class="label-icon">Search By User</span>
											</a>
										</li>
										<li>
											<a href="#">
											<span class="glyphicon glyphicon-book"></span>
											<span class="label-icon">Search By Organization</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<h5>   Buscar RQS autorizadas<h5>
						</div>
						<div class="col-md-4">
							 <div class="input-group filter">
							  <div id="reportrange" class="pull-center" style="background: #fff; cursor: pointer; padding: 8px 10px; border: 1px solid #ccc">
								<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
								<span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
							  </div>
							</div>
							<h5>   Consolidar RQS autorizadas<h5>
						</div>
				
					</div>-->
						<div role="content">
							<!-- widget content -->
							<div class="widget-body">
								<div class="row">
									<div id="bootstrap-wizard-1" class="col-sm-12">
										<div class=" tab-content">
											<div class="tab-pane active" id="tab1">
											<br><br><br>
												<ul class="list-unstyled timeline">
													<li>
														<div class="block">
															<div class="tags">
																<a href="" class="tag">
																	<span>Paso 1</span>
																</a>
															</div>	
															<div class="block_content">
																	<div class="x_title">
																		<h2> Nueva orde de compra</h2><!--
																		<ul class="nav navbar-right panel_toolbox">
																		  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
																		  </li>
																		</ul>-->
																		<div class="clearfix"></div>
																	</div>
																	<div class="x_content">
																		<h5>Espacio exclusivo para el Asistente de Gestión Administrativa<h5>
																		<div class="panel panel-default">
																			<div class="table-responsive">
																				<table id="datatable-buttons" class="table table-striped table-bordered ">
																					<thead>
																					   <tr>
																							<th>Cod. OCM</th>
																							<th>Fecha OCM</th>																																																				
																							<th>Empresa</th>
																							<th>Nit. Empresa</th>
																							<th> Realizado por </th>
																							<th>No. Documento</th>
																							
																							
																						</tr>
																					</thead>
																					<tbody>
																						
																						<tr>
																						  <td>0023933</td>
																							<td>26-06-2017</td>
																							<td>FUNDACION ALUNA</td>
																							<td>806.014.972-9 </td>
																							<td>usuario</td>
																							<td class="form-group col-xs-2">
																								<div class="form-group ">
																									<input class="form-control input-sm" id="inputsm" type="text">
																								</div>
																							</td>
																						</tr> 
																					</tbody>
																				</table>
																			</div>
																		</div>
																		<div class="x_panel">
																			<div class="panel-default">
																				<div class="row ">
																					<div class="col-md-6">
																						<div class="form-group">
																							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="exampleSelect1">Proveedor</label>
																							<div class="col-md-9 col-sm-9 col-xs-12">
																								<select class="form-control " id="exampleSelect1">
																								<option value="volvo" selected>Seleccionar</option>
																								<option>ALMACENES EXITO</option>
																								<option>MEGA TIENDAS </option>
																								</select>
																							</div>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nit. Proveedor</label>
																							<div class="col-md-9 col-sm-9 col-xs-12">
																							  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12" disabled>
																							</div>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dirección</label>
																							<div class="col-md-9 col-sm-9 col-xs-12">
																							  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12" disabled>
																							</div>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ciudad</label>
																							<div class="col-md-9 col-sm-9 col-xs-12">
																							  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12" disabled>
																							</div>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Teléfono</label>
																							<div class="col-md-9 col-sm-9 col-xs-12">
																							  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12" disabled>
																							</div>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">E-mail  </label>
																							<div class="col-md-9 col-sm-9 col-xs-12">
																							  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12" disabled>
																							</div>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Por concepto de  </label>
																							<div class="col-md-9 col-sm-9 col-xs-12">
																							  <input type="text" id="first-name"  value="ORDEN DE COMPRAS" required="required" class="form-control col-md-7 col-xs-12" >
																							</div>
																						</div>
																					</div>
																					
																					<div class="col-md-6">
																						<div class="form-group">
																							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Autorizado por   </label>
																							<div class="col-md-9 col-sm-9 col-xs-12">
																							  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12" >
																							</div>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="exampleSelect1">Forma de pago</label>
																							<div class="col-md-9 col-sm-9 col-xs-12">
																								<select class="form-control " id="exampleSelect1">
																								<option value="volvo" selected>Seleccionar</option>
																								<option>CONTADO</option>
																								<option>CREDITO</option>
																								</select>
																							</div>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dias credito </label>
																							<div class="col-md-9 col-sm-9 col-xs-12">
																							  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12" >
																							</div>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tiempo de entrega  </label>
																							<div class="col-md-9 col-sm-9 col-xs-12">
																							  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12" >
																							</div>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="form-group">
																							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Otro </label>
																							<div class="col-md-9 col-sm-9 col-xs-12">
																							  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12" >
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="x_content">
																		<h5>Solicitud SC penites por orden de compras<h5>
																		<div class=" panel-default">
																			<div class="table-responsive">
																				<table id="datatable-buttons" class="table table-striped table-bordered ">
																					<thead>
																					   <tr>
																							<th>Categoria</th>																																																				
																							<th>Producto</th>
																							<th>Acciones</th>
																						</tr>
																					</thead>
																					<tbody>
																						
																						<tr>
																							<td>
																								<div class="form-group ">
																									<select class="form-control">
																									  <option value="volvo" selected>Seleccionar</option>
																									  <option value="saab">Taller de Cocina</option>
																									  <option value="vw">Papeleria</option>
																									  <option value="audi" >Didacticos</option>
																									  <option value="audi" >Aseo</option>
																									</select>
																								</div>
																							</td>
																							<td>
																								<div class="form-group ">
																									<select class="form-control">
																									  <option value="volvo" selected>Seleccionar</option>
																									  <option value="saab">Todos</option>
																									  <option value="saab">Aceite</option>
																									  <option value="vw">Arepas antioqueñas precocidas </option>
																									  <option value="audi" >Arroz  (bolsas de medio kilo)</option>
																									  <option value="audi" >Bocadillo</option>
																									</select>
																								</div>
																							</td>
																							<td>
																								<button type="submit" class="btn btn-primary   ">Consultar</button>
																							</td>	
																							
																						</tr> 
																					</tbody>
																				</table>
																			</div>
																		</div>
																	
																		<h5>Ingresar Productos<h5>
																		<div class="panel panel-default">
																			<div class="panel-heading text-center">
																				<span><strong><span class="glyphicon glyphicon-shopping-cart"> </span> Productos</strong></span>
																			</div>
																			<div class="table-responsive">
																				<table class="table table-bordered table-hover vmiddle">
																					<thead>
																						<tr>
																							<th>No.</th>
																							<th><a href="#"><span class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs"></span></a>Producto</th>
																							<th><a href="#"><span class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs"></span></a> Categoria</th>
																							<th> Cantidad</th>
																							<th><a href="#"><span class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs"></span></a> Unidad</th>
																							<th> Descripcion </th>
																							<th> IVA. Unt</th>
																							<th> Val. Unitario</th>
																							<th> Val. IVA</th>
																							<th> Val. Total</th>
																							<th>Acciones</th>
																						</tr>
																					</thead>
																					<tbody>
																							<tr>
																							<td>
																								New
																							</td>
																							<td>
																								<div class="form-group ">
																									<select class="input-sm">
																									  <option value="volvo" selected>Seleccionar</option>
																									  <option value="saab">Aceite</option>
																									  <option value="vw">Arepas antioqueñas precocidas </option>
																									  <option value="audi" >Arroz  (bolsas de medio kilo)</option>
																									  <option value="audi" >Bocadillo</option>
																									</select>
																								</div>
																							</td>
																							
																							<td>
																								<div class="form-group ">
																									<select class="input-sm">
																									  <option value="volvo" selected>Seleccionar</option>
																									  <option value="saab">Taller de Cocina</option>
																									  <option value="vw">Papeleria</option>
																									  <option value="audi" >Didacticos</option>
																									  <option value="audi" >Aseo</option>
																									</select>
																								</div>
																							</td>
																							<td>
																								<div class="form-group">
																									<input class="form-control input-sm" id="inputsm" type="text">
																								</div>
																							</td>
																							<td>
																								<div class="form-group ">
																									<select class="input-sm">
																										<option value="saab">Barra</option>
																										<option value="saab">Bloque</option>
																										<option value="saab">Bolsa</option>
																										<option value="saab">Botella</option>
																										<option value="saab">Caja</option>
																										<option value="saab">Frasco</option>
																										<option value="vw">Lata</option>
																										<option value="vw">Paquete</option>
																										<option value="vw">Pote</option>
																										<option value="vw">Tarro</option>
																										<option value="vw">Tubo</option>
																										<option value="vw">Vaso</option>
																										<option value="saab">Unidad</option>
																										<option value="vw">Kg</option>
																										<option value="vw">Kilo</option>
																										<option value="vw">Litro</option>
																										<option value="vw">Lonjas</option>
																									</select>	
																								</div>
																							</td>
																							<td>
																								<div class="form-group">
																									<input class="form-control input-sm" id="inputsm" type="text">
																								</div>
																							</td>
																							
																							<td>
																								<div class="form-group">
																									<input class="form-control input-sm" id="inputsm" value="0%" type="text">
																								</div>
																							</td>
																							<td>
																								<div class="form-group">
																									<input class="form-control input-sm" id="inputsm" value="" type="text">
																								</div>
																							</td>
																							<td>
																								<div class="form-group">
																									<input class="form-control input-sm" id="inputsm" value="" type="text">
																								</div>
																							</td>
																							<td>
																								<div class="form-group">
																									<input class="form-control input-sm" id="inputsm" value="" type="text">
																								</div>
																							</td>
																							
																							<td class="text-center">
																									<a href="#"><span class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs"></span></a>
																							</td>
																							
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	</div>
															</div>
															<div class="panel-default">
																<div class="row ">
																	<div class="col-md-9">
																		
																	</div>
																	<div class="col-md-3">
																		<div class="form-group">
																			<label class="control-label col-md-3 col-sm-3 col-xs-12" align="right" for="first-name">SUBTOTAL</label>
																			<div class="col-md-8 col-sm-8 col-xs-12">
																			  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12" disabled>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-9">
																		
																	</div>
																	<div class="col-md-3 ">
																		<div class="form-group">
																			<label class="control-label col-md-3 col-sm-3 col-xs-12 " align="right" for="first-name">IVA</label>
																			<div class="col-md-8 col-sm-8 col-xs-12">
																			  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12" disabled>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-9">
																		
																	</div>
																	<div class="col-md-3">
																		<div class="form-group">
																			<label class="control-label col-md-3 col-sm-3 col-xs-12" align="right" for="first-name">TOTAL</label>
																			<div class="col-md-8 col-sm-8 col-xs-12">
																			  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12" disabled>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
												</ul>	  
											</div>
										</div>
									</div>
								</div>
								<div class="form-group right ">				
									<button type="submit" class="btn btn-danger">Deshacer</button>
									<button type="submit" class="btn btn-success">Guardar</button>
								</div>
							<!-- end widget content -->
							</div>
						</div>
					</div>		
				</div>	
			</div>
		</div>
	</div>
						  <!-------->
			  

    
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