@extends('layouts.app')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
			  
							<!------------->
					 <div class="x_panel">
						<div class="x_title">
						  <h2>Autorizacion RQS</h2>
						  <ul class="nav navbar-right panel_toolbox">
							<li><p data-placement="top" data-toggle="tooltip" title="Regresar"><a href="/workflow/proceso" class="btn btn-default btn-xs" data-title="Ver"><span class="glyphicon glyphicon-arrow-left"></span></a></p></li>
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
							
						  </ul>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
						<!---->
							<div id="wid-id-0">
								<!-- widget div-->
								<div role="content">
									<!-- widget content -->
									<div class="widget-body">

										<div class="row">
											<form id="wizard-1" novalidate="novalidate">
												<div id="bootstrap-wizard-1" class="col-sm-12">
													<div class="form-bootstrapWizard">
														<ul class="bootstrapWizard form-wizard">
															<li class="active" data-target="#step1">
																<a href="#tab1" data-toggle="tab" > <span class="step">1</span> <span class="title">Requisicion</span> </a>
															</li>
															<li data-target="#step2" class="">
																<a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Revisión</span> </a>
															</li>
															<li data-target="#step3" class="">
																<a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Autorizacion</span> </a>
															</li><br><br>
														   
														</ul>
														<div class="clearfix"></div>
													</div>
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
																			<div class="x_panel">
																				<div class="x_title">
																					<h2>Requisicion Interna</h2>
																					<div class="clearfix"></div>
																			    </div>
																				<div class="x_content">
																					<div class="panel panel-default">
																						
																						<div class="table-responsive">
																							<table id="datatable-buttons" class="table table-striped table-bordered ">
																								<thead>
																								   <tr>
																										<th>Cod. RQS</th>
																										<th>Fecha RQS</th>																																																				
																										<th>Asunto</th>
																										<th>Fecha entrega</th>	
																										<th>Justificacion</th>
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
																										<td>solicitud compa prueba</td>
																										<td>06-07-2017</td>
																										<td>Mensaje Justificacion prueba </td>
																										<td>Activo</td>
																										<td>Belkis Buelvas</td>
																										<td>Cargo</td>
																										<td>Area - Coordinacion</td>	
																										
																									</tr> 
																								</tbody>
																							</table>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="x_panel">
																			   <div class="x_title">
																					<h2>Sugeido de Proveedores</h2>
																					<ul class="nav navbar-right panel_toolbox ">
																						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
																						</li>
																					</ul>
																					<div class="clearfix"></div>
																				</div>
																		
																				<div class="x_content">
																					<div class="panel panel-default">
																						<div class="panel-heading text-center">
																							<span><strong><span class="glyphicon glyphicon-th-list"> </span> Proveedores</strong></span>
																						</div>
																						<table class="table table-bordered table-hover vmiddle">
																							<thead>
																								<tr>
																									<th>No.</th>
																									<th>Nombre Proveedor</th>
																									<th>Telefonos</th>
																									<th>E-mail</th>
																									<th>observacion</th>
																									<th>Crear</th>
																									
																									
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td>1</td>
																									<td>Mega tiendas</td>
																									<td>77777777</td>
																									<td>compras@megatiendas.com.co</td>
																									<td>prueba</td>
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
																	</div>
																</li>
															</ul>
														</div>
														<div class="tab-pane" id="tab2">
														
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
																			<div class="x_panel">
																				<div class="x_title">
																					<h2>Aprobar solicitud RQS </h2>
																					<div class="clearfix"></div>
																				</div>
																				<div class="x_content">
																					<div class="row ">
																						<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"><br>
																							<div class="col-md-6 col-md-offset-3 ">
																								<div class="form-group">
																									<label for="formGroupExampleInput">Cod.RQS</label>
																									<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input"disabled>
																								</div>
																							</div>
																							<div class="col-md-6 col-md-offset-3 ">
																								<div class="form-group">
																									<label for="exampleSelect1">Estado RQS</label>
																									<select class="form-control" id="exampleSelect1">
																									  <option> AUTORIZAR / SOLICITUD DE COMPRAS</option>
																									  <option>RECHAZAR / REQUISICION</option>
																									</select>
																								</div>	
																							</div><!--
																							<div class="form-group">
																								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="exampleSelect1">Estado RQS</label>
																								<div class="col-md-6 col-sm-6 col-xs-12">
																									<select class="form-control " id="exampleSelect1">
																									  <option> ENTREGADO / REQUISICION</option>
																									  <option>PENDIETE / REQUISICION</option>
																									</select><br>
																								</div>
																							</div>-->
																							<div class="col-md-6 col-md-offset-3 ">
																								<div class="form-group">
																									<label class="control-label " for="last-name">Observacion</label><br>
																									<div class="col-md-12 col-sm-12 col-xs-12">
																									  <textarea type="text" id="last-name"  name="last-name"rows="4" required="required" class="form-control col-md-6 col-xs-12"></textarea>
																									</div>
																								</div>
																							</div>
																						</form>
																					</div>
																				</div>	
																				
																				<!--
																				<div class="x_panel">
																					<div class="x_title">
																						<h2>Listado SCM</h2>
																						<ul class="nav navbar-right panel_toolbox">
																						  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
																						  </li>
																						</ul>
																						<div class="clearfix"></div>
																					</div>
																					<div class="x_content">
																						<div class="panel panel-default">
																							<div class="panel-heading text-center">
																								<span><strong><span class="glyphicon glyphicon-shopping-cart"> </span> Productos</strong></span>
																							</div>
																							
																							
																							<div class="table-responsive">
																								<table class="table table-bordered table-hover vmiddle">
																									<thead>
																										<tr>
																											<th>No.</th>
																											<th> Categoria</th>
																											<th> Producto</th>
																											<th> Disponible</th>
																											<th> Cantidad</th>
																											<th> Unidad</th>
																											<th> Descripcion </th>	
																										</tr>
																									</thead>
																									<tbody>
																											<tr>
																											<td>
																												1
																											</td>
																											
																											<td>
																												<div class="form-group ">
																													<select class="input-sm"disabled>
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
																													<select class="input-sm"disabled>
																													  <option value="volvo" selected>Seleccionar</option>
																													  <option value="saab">Aceite</option>
																													  <option value="vw">Arepas antioqueñas precocidas </option>
																													  <option value="audi" >Arroz  (bolsas de medio kilo)</option>
																													  <option value="audi" >Bocadillo</option>
																													</select>
																												</div>
																											</td>
																											<td>
																												1 Caja de 5 UND
																											</td>
																											<td class="form-group col-xs-2">
																												<div class="form-group ">
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
																													<input class="form-control input-sm" id="inputsm" type="text"disabled>
																												</div>
																											</td>
																											
																										</tr>
																									</tbody>
																								</table>
																							</div>
																						</div>
																					</div>
																				</div>-->
																			</div>
																		</div>
																		<div class="x_panel">
																					<div class="x_title">
																						<h2>Detalles del producto</h2>
																						<ul class="nav navbar-right panel_toolbox">
																						  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
																						  </li>
																						</ul>
																						<div class="clearfix"></div>
																					</div>
																					<div class="x_content">
																						<div class="panel panel-default">
																							<div class="panel-heading text-center">
																								<span><strong><span class="glyphicon glyphicon-shopping-cart"> </span> Productos</strong></span>
																							</div>
																							
																							
																							<div class="table-responsive">
																								<table class="table table-bordered table-hover vmiddle">
																									<thead>
																										<tr>
																											<th>No.</th>
																											<th> <a href="#"><span class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs"></span></a> Categoria</th>
																											<th> <a href="#"><span class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs"></span></a>Producto</th>
																											<th>Cantidad</th>
																											<th> <a href="#"><span class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs"></span></a>Unidad</th>
																											<th>Descripcion </th>
																											
																											
																										</tr>
																									</thead>
																									<tbody>
																											<tr>
																											<td>
																												1
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
																											<td class="form-group col-xs-2">
																												<div class="form-group ">
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
																											
																										</tr>
																									</tbody>
																								</table>
																							</div>
																						</div>
																					</div>
																				</div>
																		
																	</div>
																</li>
															</ul>
														</div>	
														<div class="tab-pane" id="tab3">
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
																			<div class="form-group">
																				<div class="x_panel">
																					<div class="x_title">
																						<h2>Autorizar RQS </h2><br>
																						<div class="clearfix"></div>
																					</div>
																					<div class="panel-body message">
																						
																					 <h5 class="title"> <a> Espacio exclusivo para el Asistente de Gestión Administrativa: </a> </h5><br>
																						<div class="container">
																							
																							<div class="row ">
																								<div class="btn-group  col-md-12">
																									<label for="success" class="btn btn-success">Solicitud Consumo  <input type="checkbox" id="success" class="badgebox"><span class="badge">&check;</span></label>
																									<label for="warning" class="btn btn-warning">Solicitud Inversión  <input type="checkbox" id="warning" class="badgebox"><span class="badge">&check;</span></label>
																								</div>
																								<div class="btn-group   col-md-4" data-toggle="buttons"><br>
																									<h5>Proveedor Autorizado</h5>
																									
																									<label class="btn btn-primary ">
																										<input type="radio" name="options" id="option2" autocomplete="off" chacked>SI
																										<span class="glyphicon glyphicon-ok"></span>
																									</label>

																									<label class="btn btn-danger">
																										<input type="radio" name="options" id="option1" autocomplete="off">No
																										<span class="glyphicon glyphicon-ok"></span>
																									</label>
																								
																								</div>
																								<div class="btn-group  col-md-4 " data-toggle="buttons"><br>
																									
																									
																									<h5>Aprobado en comite</h5>
																									<label class="btn btn-primary ">
																										<input type="radio" name="options" id="option2" autocomplete="off" chacked>SI
																										<span class="glyphicon glyphicon-ok"></span>
																									</label>

																									<label class="btn btn-danger">
																										<input type="radio" name="options" id="option1" autocomplete="off">No
																										<span class="glyphicon glyphicon-ok"></span>
																									</label>
																								
																								</div>	
																								<div class="form-group   col-md-4"><br>
																									<h5>Fecha</h5>
																									<div class="input-group registration-date-time">
																										<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
																										<input class="form-control" name="registration_date" id="registration-date" type="date">
																										<span class="input-group-btn">
																										</span>
																									</div>
																								</div>	
																									
																							</div>
																							<br><p class=""> Notificar Autorizacion</p>
																							<form class="form-horizontal" role="form">
																								<div class="form-group">
																									<label for="to" class="col-sm-1 control-label">Para:</label>
																									<div class="col-sm-11">
																										  <input type="email" class="form-control select2-offscreen" id="to" placeholder="" tabindex="-1">
																									</div>
																								</div>
																								<div class="form-group">
																									<label for="cc" class="col-sm-1 control-label">Asunto:</label>
																									<div class="col-sm-11">
																										  <input type="email" class="form-control select2-offscreen" id="cc" placeholder="" tabindex="-1">
																									</div>
																								</div>
																							  
																							</form>
																					
																							<div class="col-sm-11 col-sm-offset-1">
																								
																								<div class="btn-toolbar" role="toolbar">
																									
																									<div class="btn-group">
																										<button class="btn btn-default"><span class="fa fa-bold"></span></button>
																										<button class="btn btn-default"><span class="fa fa-italic"></span></button>
																										<button class="btn btn-default"><span class="fa fa-underline"></span></button>
																									</div>

																									<div class="btn-group">
																										<button class="btn btn-default"><span class="fa fa-align-left"></span></button>
																										<button class="btn btn-default"><span class="fa fa-align-right"></span></button>
																										<button class="btn btn-default"><span class="fa fa-align-center"></span></button>
																										<button class="btn btn-default"><span class="fa fa-align-justify"></span></button>
																									</div>
																									
																									<div class="btn-group">
																										<button class="btn btn-default"><span class="fa fa-indent"></span></button>
																										<button class="btn btn-default"><span class="fa fa-outdent"></span></button>
																									</div>
																									
																									<div class="btn-group">
																										<button class="btn btn-default"><span class="fa fa-list-ul"></span></button>
																										<button class="btn btn-default"><span class="fa fa-list-ol"></span></button>
																									</div>
																									<button class="btn btn-default"><span class="fa fa-trash-o"></span></button>	
																									<button class="btn btn-default"><span class="fa fa-paperclip"></span></button>
																									<div class="btn-group">
																										<button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="fa fa-tags"></span> <span class="caret"></span></button>
																										<ul class="dropdown-menu">
																											<li><a href="#">add label <span class="label label-danger"> Home</span></a></li>
																											<li><a href="#">add label <span class="label label-info">Job</span></a></li>
																											<li><a href="#">add label <span class="label label-success">Clients</span></a></li>
																											<li><a href="#">add label <span class="label label-warning">News</span></a></li>
																										</ul>
																									</div>
																								</div>
																								<br>	
																								
																								<div class="form-group">
																									<textarea class="form-control" id="message" name="body" rows="8" placeholder="Escribir Mensaje"></textarea>
																								</div>
																								<!--
																								<div class="form-group">	
																									<button type="submit" class="btn btn-success">Send</button>
																									<button type="submit" class="btn btn-default">Draft</button>
																									<button type="submit" class="btn btn-danger">Discard</button>
																								</div>-->
																							</div>
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
											</form>
										</div>

									</div>
									<div class="form-group right ">	
																			
										<button type="submit" class="btn btn-danger">Deshacer</button>
										<button type="submit" class="btn btn-default">Guardar</button>
										<button type="submit" class="btn btn-success">Enviar</button>
									</div>
									<!-- end widget content --> 
									</div>
								</div>
							</div>
						  <!-------->
			  

        </div>
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