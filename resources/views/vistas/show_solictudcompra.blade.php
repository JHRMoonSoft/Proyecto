@extends('layouts.app') 
@section('content')
<!-- page content -->
	<div class="right_col"  role="main">
         
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2> Solicitud de compras</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><p data-placement="top" data-toggle="tooltip" title="Regresar"><a href="/workflow/proceso" class="btn btn-default btn-xs" data-title="Ver"><span class="glyphicon glyphicon-arrow-left"></span></a></p></li>
							
						 </ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<h2>Fecha: 18-07-2017</h2>
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
															<div class="block_content ">
																<div class="x_panel">
																	<div class="x_title">
																		<h2>Solicitud de compras </h2>
																		
																		<button type="submit" class="btn btn-success  right  btn-xs ">Descargar</button>
																		<button type="submit" class="btn btn-warning  right  btn-xs ">Editar</button>
																		<div class="clearfix"></div>
																	</div>
																	<fieldset disabled>
																		<div class="x_content">
																			<h5>Espacio exclusivo para el Asistente de Gestión Administrativa<h5>
																			<div class="row ">
																				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"><br>
																					<div class="form-group"><br>
																						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cod. SC</label>
																						<div class="col-md-6 col-sm-6 col-xs-12">
																						  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12" disabled>
																						</div>
																					</div>	
																					<div class="form-group"><br>
																						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Asunto</label>
																						<div class="col-md-6 col-sm-6 col-xs-12">
																						  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12">
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Observacion	</label>																			</label>
																						<div class="col-md-6 col-sm-6 col-xs-12">
																						  <textarea type="text" id="last-name"  name="last-name"rows="5" required="required" class="form-control col-md-7 col-xs-12"></textarea>
																						</div><br>
																					</div>
																				</form>
																			</div>
																		</div>
																	</fieldset>
																</div>
																<div class="x_panel">
																	<div class="x_title">
																		<h2>Consolidado de Productos</h2> 
																		<ul class="nav navbar-right panel_toolbox">
																		  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
																		  </li>
																		</ul>
																		
																		<div class="clearfix"></div>
																	</div>
																	<fieldset disabled>
																		<div class="x_content">
																			<div class="panel panel-default">
																				<div class="panel-heading text-center">
																					<span><strong><span class="glyphicon glyphicon-shopping-cart" > </span> Productos</strong></span>
																					
																					<button type="submit" class="btn btn-primary  right  btn-xs ">Agregar</button>
																				</div>
																				
																				
																				<div class="table-responsive">
																					<table class="table table-bordered table-hover vmiddle">
																						<thead>
																							<tr>
																								<th>No.</th>
																								<th><a href="#"><span class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs"></span></a> Categoria</th>
																								<th><a href="#"><span class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs"></span></a>Producto</th>
																								<th> Disponible</th>
																								<th> Cantidad</th>
																								<th><a href="#"><span class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs"></span></a> Unidad</th>
																								<th> Descripcion </th>	
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
																										<input class="form-control input-sm" id="inputsm" type="text">
																									</div>
																								</td>
																								<td class="text-center">
																										<a href="#"><span class="btn btn-sm btn-danger glyphicon glyphicon-remove btn-xs"></span></a>
																								</td>
																								
																							</tr>
																						</tbody>
																					</table>
																				</div>
																			</div>
																		</div>
																	</fieldset>
																</div>
															</div>
														</div>
													</li>
												</ul>	  
											</div>
										</div>
									</div>
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