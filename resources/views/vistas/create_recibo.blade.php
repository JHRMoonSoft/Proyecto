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
						  <h2>Requisicion Interna</h2>
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
																					<h2>Recibo de Requisicion</h2>
																					<ul class="nav navbar-right panel_toolbox">
																					  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
																					  </li>
																					</ul>
																					<div class="clearfix"></div>
																			    </div>
																				<div class="x_content">
																					<div class="panel panel-default">
																						
																						<div class="table-responsive">
																							<table id="datatable-buttons" class="table table-striped table-bordered ">
																								<thead>
																								   <tr>
																										<th>Cod. RQS</th>
																										<th>Fecha de RQS</th>																																																				
																										<th>Solicitud</th>
																										<th>Fecha de entrega</th>
																										<th>Observacion</th>
																										<th>Estado</th>
																									</tr>
																								</thead>
																								<tbody>
																									
																									<tr>
																									  <td>0023933</td>
																										<td>26-06-2017</td>
																										<td> compa prueba</td>
																										<td>06-07-2017</td>
																										<td>Entrega parcial en espera de nueva compra</td>
																										<td>Pendiente</td>	
																										
																									</tr> 
																								</tbody>
																							</table>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="block_content">
																			<div class="x_panel">
																				<div class="x_title">
																					<h2>Detalle de la Entrega</h2>
																					<ul class="nav navbar-right panel_toolbox">
																					  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
																					  </li>
																					</ul>
																					<div class="clearfix"></div>
																			    </div>
																				<div class="x_content">
																					<div class="panel panel-default">
																						
																						<div class="table-responsive">
																							<table id="datatable-buttons" class="table table-striped table-bordered ">
																								<thead>
																								   <tr>
																										<th>No.</th>
																										<th>Categoria</th>
																										<th>producto</th>
																										<th>Cant.Autorizada</th>
																										<th>Cant.Entregada</th>
																										<th>Cant.Pendiente</th>
																										<th>Observacion </th>
																									</tr>
																								</thead>
																								<tbody>
																									
																									<tr>
																										<td>1</td>
																										<td>Taller de Cocina</td>
																										<td>Aceite </td>
																										<td>2 cajas de 12 UND</td>
																										<td>1 caja 2 UND</td>
																										<td>10 UND</td>
																										<td>esperar de nueva compra</td>
																									</tr> 
																								</tbody>
																							</table>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																			<div class="block_content">
																			<div class="x_panel">
																				<div class="x_title">
																					<h2>Observaciones del recibo </h2>
																					<ul class="nav navbar-right panel_toolbox">
																					  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
																					  </li>
																					</ul>
																					<div class="clearfix"></div>
																			    </div>
																				<div class="x_content">
																						<h5>Recibí los elementos solicitados en este formato<h5>
																						<div class="row ">
																							<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"><br>
																								
																							
																							<div class="form-group   col-md-6 col-sm-6 col-xs-12"><br>
																								<h5>Fecha Recibe</h5>
																								<div class="input-group registration-date-time">
																									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
																									<input class="form-control" name="registration_date" id="registration-date" type="date">
																									<span class="input-group-btn">
																									</span>
																								</div>
																							</div>	
																							  <div class="form-group">
																								<label class="control-label col-sm-1" for="last-name">Observacion	</label>																			</label>
																								<div class="col-md-6 col-sm-6 col-xs-12">
																								  <textarea type="text" id="last-name"  name="last-name"rows="5" required="required" class="form-control col-md-7 col-xs-12"></textarea>
																								</div><br>
																							  </div>
																							</form>
																						</div>
																				</div>
																			</div>
																		</div>
																</li>
															</ul>	  
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