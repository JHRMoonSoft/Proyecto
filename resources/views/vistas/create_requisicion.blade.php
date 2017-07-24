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
						  <h2>Formato de Requisiciones interna</h2>
						  <ul class="nav navbar-right panel_toolbox">
							<li><p data-placement="top" data-toggle="tooltip" title="Regresar"><a href="/workflow/proceso" class="btn btn-default btn-xs" data-title="Ver"><span class="glyphicon glyphicon-arrow-left"></span></a></p></li>
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
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
																<a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Productos</span> </a>
															</li>
															<li data-target="#step3" class="">
																<a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Proveedores Sugeridos</span> </a>
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
																		<h2 class="title"> <a>Nuava RQS</a> </h2>
																		<div class="form-group"><br>
																			<div class="x_panel"><br>
																				<div class="panel-body message">
																					<form class="form-horizontal" role="form">
																							
																						<div class="form-group">
																							<label for="to" class="col-sm-1 control-label">Para:</label>
																							<div class="col-sm-11">
																								  <input type="email" class="form-control select2-offscreen" id="to" placeholder="" tabindex="-1">
																							</div>
																						</div>
																						<div class="form-group">
																							<label for="cc" class="col-sm-1 control-label">Solicitud:</label>
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
																							<textarea class="form-control" id="message" name="body" rows="8" placeholder="Escribir Justificación"></textarea>
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
																			<div class="form-group"><br>
																				<div class="x_panel"><br>
																					<div class="x_title">
																						<h2>Lista de Productos</h2>
																						<div class="clearfix"></div>
																					</div>
																					<div class="panel panel-default">
																						<div class="panel-heading text-center">
																							<span><strong><span class="glyphicon glyphicon-shopping-cart"> </span> Productos</strong></span>
																						</div>
																						<div class="table-responsive">
																							<table id="datatable-buttons" class="table table-striped table-bordered ">
																							   <thead>
																								   <tr>
																										<th>Categoria</th>
																										<th>Articulos</th>
																										<th>Cantidad</th>
																										<th>Unidad</th>
																										<th>Detalle</th>	
																										<th>Agregar</th>
																										<!--<th>Editar</th>-->
																										<!--<th>Eliminar</th>-->
																									</tr>
																								</thead>
																								<tbody>
																									<tr>
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
																										<td class="text-center">
																												<a href="#"><span class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs"></span></a>
																										</td>
																										<!--
																										<td><p data-placement="top" data-toggle="tooltip" title="Ver"><a href="" class="btn btn-success btn-xs" data-title="Ver"><span class="glyphicon glyphicon-file"></span></a></p></td>
																										<td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><a href="" class="btn btn-danger btn-xs" data-title="Eliminar"><span class=" glyphicon glyphicon-trash"></span></a></p></td>-->
																								
																									</tr>                      
																									
																								</tbody>
																							</table>
																						</div>
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
																	<span>Paso 3</span>
																  </a>
																</div>
																<div class="block_content">
																  <h2 class="title"> <a>Proveedores Sugeridos</a> </h2>
																	<div class="form-group"><br>
																		<div class="x_panel"><br>	
																			<div class="row ">
																				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"><br>
																				
																				 <div class="form-group">
																					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIT / C.C</label>
																					<div class="col-md-6 col-sm-6 col-xs-12">
																					  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12">
																					</div>
																				  </div>
																				  <div class="form-group">
																					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre Proveedor</label>
																					<div class="col-md-6 col-sm-6 col-xs-12">
																					  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12">
																					</div>
																				  </div>
																				  <div class="form-group">
																					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Telefonos</label>
																					
																					<div class="col-md-6 col-sm-6 col-xs-12">
																					  <input type="text" id="last-name"  name="last-name" required="required" class="form-control col-md-7 col-xs-12">
																					</div>
																				  </div>
																				  <div class="form-group">
																					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">E-mail	</label>																			
																					
																					<div class="col-md-6 col-sm-6 col-xs-12">
																					  <input type="text" id="last-name"  name="last-name" required="required" class="form-control col-md-7 col-xs-12">
																					</div>
																				  </div>
																				  <div class="form-group">
																					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Observacion	</label>																			</label>
																					<div class="col-md-6 col-sm-6 col-xs-12">
																					  <input type="text" id="last-name"  name="last-name" required="required" class="form-control col-md-7 col-xs-12">
																					</div>
																				  </div>
																				  <div class="col-md-9 col-sm-6 col-xs-12">
																				  <button type="submit" class="btn btn-primary  right ">Agregar</button>
																				  </div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															 </ul>
															 		 
																 <div class="x_panel">
																	  <div class="x_title">
																		<h2>Lista de Proveedores</h2>
																		<ul class="nav navbar-right panel_toolbox">
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
																						<th>Acciones</th>
																						
																						
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td>0023933</td>
																						<td>26-06-2017</td>
																						<td>3 d</td>
																						<td>solicitud compa prueba</td>
																						<td>Activo</td>
																						<td class="text-center">
																							<a href="#"><span class="btn btn-sm btn-danger glyphicon glyphicon-remove btn-xs"></span></a>
																						</td>
																					</tr>
																					
																					
																				</tbody>
																			</table>
																		</div>
																	</div>
																</div>
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