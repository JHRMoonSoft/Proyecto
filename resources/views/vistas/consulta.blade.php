@extends('layouts.app')

@section('content')
        <!-- page content -->
		
        <div class="right_col" role="main">
          <!-- top tiles -->	  
		  <!--
		  <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Procesos Activos</span>
              <div class="count">2500</div>              
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
		  </div>
		  -->
		  <!-- /top tiles -->

          <div class="row" role="main">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">
				<!--
                <div class="row x_title">
					  <div class="col-md-4">
						<h3>Workflow Acrchivador Seguros<small>Graph title sub-title</small></h3>
					  </div>
					<div class="col-md-4 form-group pull-left top_search">
					   <div class="input-group">
							<input type="text" class="form-control" placeholder="Search for...">
							<span class="input-group-btn"><br>
							  <button class="btn btn-default" type="button">Go!</button>
							</span>
						</div>
					</div> 
					  <div class="col-md-4">
						<div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
						  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
						  <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
						</div>
					  </div>
                </div>
				-->
				<!------------------------------------------------>
				
				<div class="col-md-12 col-sm-12 col-xs-12"><br>
									
					<div class="x_panel">
					  <div class="x_title">
						<h2>Actividades Asignadas</h2> &nbsp&nbsp&nbsp
						<div class="clearfix"></div>
					  </div>
					  <div class="x_content">
						
						<table id="datatable-buttons" class="table table-striped table-bordered">
						  <thead>
						   <tr>
								<th>Cod.</th>
								<th>Estado</th>
								<th>Identificación</th>
								<th>Tercero</th>
								<th>Tipo Servicio</th>
								<th>Porcentaje (%)</th>
								<th>Ver</th>
							</tr>
						  </thead>
						  <tbody>
							@foreach($procesos as $proceso)
							<tr>
							  <td>{{$proceso->id19_}}</td>
								<td>
								@if($proceso->cod25_19_==1) Inicio / Preparación
                                @elseif($proceso->cod25_19_==2) En Proceso
                                @elseif($proceso->cod25_19_==3)  Finalizado 
                                @endif 
								</td>
								<td>{{$proceso->campo3_19_}}</td>
								<td>{{$proceso->campo4_19_}}</td>
								<td>{{$proceso->campo5_19_}}</td>
								<td>{{$proceso->por23_19_}}%</td>							
								<td><p data-placement="top" data-toggle="tooltip" title="Ver"><a href="/workflow/{{$proceso->id19_}}" class="btn btn-success btn-xs" data-title="Ver"><span class="glyphicon glyphicon-file"></span></a></p></td>
							</tr>                       
							@endforeach
							<!--
							<tr>
								<td>2</td>
								<td>Operacion Seguros</td>
							  	<td>Inicio / Preparación</td>
								<td>980034289</td>
								<td>BELKIS BUELVAS</td>
								<td>SEGURO DE VIDA</td>
								<td>14</td>
								<td>0</td>							
								<td><p data-placement="top" data-toggle="tooltip" title="Show"><button class="btn btn-success btn-xs" data-title="Show" data-toggle="modal" data-target="#show" ><span class="glyphicon glyphicon-file"></span></button></p></td>								
								<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
								<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class=" glyphicon glyphicon-trash"></span></button></p></td>
						
							</tr>
							<tr>
								<td>3</td>
								<td>Operacion Workflow</td>
							  	<td>Inicio / Preparación</td>
								<td>980034289</td>
								<td>JORGE LLAMAS</td>
								<td>SEGURO DE VIDA</td>
								<td>14</td>
								<td>0</td>							
								<td><p data-placement="top" data-toggle="tooltip" title="Show"><button class="btn btn-success btn-xs" data-title="Show" data-toggle="modal" data-target="#show" ><span class="glyphicon glyphicon-file"></span></button></p></td>								
								<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
								<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class=" glyphicon glyphicon-trash"></span></button></p></td>
						
							</tr>
							<tr>
								<td>4</td>
								<td>Operacion Workflow</td>
							  	<td>Inicio / Preparación</td>
								<td>980034289</td>
								<td>6MARIA RIVAS GONZALEZ</td>
								<td>SEGURO DE VIDA</td>
								<td>14</td>
								<td>0</td>							
								<td><p data-placement="top" data-toggle="tooltip" title="Show"><button class="btn btn-success btn-xs" data-title="Show" data-toggle="modal" data-target="#show" ><span class="glyphicon glyphicon-file"></span></button></p></td>								
								<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
								<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class=" glyphicon glyphicon-trash"></span></button></p></td>
						
							</tr>
							-->
						  </tbody>
						</table>
					  </div>
					</div>
              </div>
				
				<!------------------------------------------------------->


					<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title custom_align" id="Heading">Detalle Captura</h4>
								</div>
								<div class="modal-body">
									
									<!---------->
									
										       

													<!-- Smart Wizard -->
													<p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
													<div id="wizard" class="form_wizard wizard_horizontal">
													  <ul class="wizard_steps">
														<li>
														  <a href="#step-1">
															<span class="step_no">1</span>
															<span class="step_descr">
																			  Paso 1<br />
																			  <small>Paso 1 Registrar terceros</small>
																		  </span>
														  </a>
														</li>
														<li>
														  <a href="#step-2">
															<span class="step_no">2</span>
															<span class="step_descr">
																			  Paso 2<br />
																			  <small>Paso 2 Registrar servicios</small>
																		  </span>
														  </a>
														</li>
														<li>
														  <a href="#step-3">
															<span class="step_no">3</span>
															<span class="step_descr">
																			  Paso 3<br />
																			  <small>Paso 3 Asignar actividades</small>
																		  </span>
														  </a>
														</li>
														<li>
														  <a href="#step-4">
															<span class="step_no">4</span>
															<span class="step_descr">
																			  Paso 4<br />
																			  <small>Paso 4 Manejo de archivos</small>
																		  </span>
														  </a>
														</li>
													  </ul>
														<div id="step-1">
															<!------>
																<div class="col-md-1"></div>
																<div class="col-md-10"><br><br>
																	<div class="x_panel">
																	  <div class="x_title">
																		<h2>Registrar terceros</h2>                  
																		<div class="clearfix"></div>
																	  </div>
																		 <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

																		  <div class="form-group"><br>
																			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">IDENTIFICACION <span class="required">*</span>
																			</label>
																			<div class="col-md-6 col-sm-6 col-xs-12">
																			  <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
																			</div>
																		  </div>
																		  <div class="form-group">
																			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">TERCERO<span class="required">*</span>
																			</label>
																			<div class="col-md-6 col-sm-6 col-xs-12">
																			  <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
																			</div>
																		  </div>
																		  <div class="form-group">
																			<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">OTRO</label>
																			<div class="col-md-6 col-sm-6 col-xs-12">
																			  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
																			</div>
																		  </div>						 

																		</form>
																	</div>
																</div>
															<!----->	
																				 
														</div>
													
														<div id="step-2">							
															<!------>
																<div class="col-md-1"></div>
																<div class="col-md-10"><br><br>
																	<div class="x_panel">
																	  <div class="x_title">
																		<h2>Registrar servicios</h2>                  
																		<div class="clearfix"></div>
																	  </div>
																		<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"><br>
																		  <div class="form-group">
																			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TIPO SERVICIO<span class="required">*</span>
																			</label>
																			<div class="col-md-6 col-sm-6 col-xs-12">
																			  <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
																			</div>
																		  </div>
																		  <div class="form-group">
																			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NUMERO SOLICITUD<span class="required">*</span>
																			</label>
																			<div class="col-md-6 col-sm-6 col-xs-12">
																			  <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
																			</div>
																		  </div>
																		  
																		  <div class="form-group">
																			<label class="control-label col-md-3 col-sm-3 col-xs-12">PROCESO</label>
																			<div class="col-md-6 col-sm-6 col-xs-12">
																			  <div id="gender" class="btn-group" data-toggle="buttons">
																				<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																				  <input type="radio" name="gender" value="male"> &nbsp; Rechazado &nbsp;
																				</label>
																				<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
																				  <input type="radio" name="gender" value="female">  Aprobado 
																				</label>
																			  </div>
																			</div>
																		  </div>
																	  
																		</form>
																	</div>
																</div>
															<!----->
															
														</div>
														<div id="step-3">						   
															
															<!------>
																<div class="col-md-1"></div>
																<div class="col-md-10"><br><br>
																	<div class="x_panel">
																	  <div class="x_title">
																		<h2>Asignar actividad</h2>                  
																		<div class="clearfix"></div>
																	  </div>
																			<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"><br>									  
																			  <div class="form-group">
																				<label class="control-label col-md-3 col-sm-3 col-xs-12">USUARIOS</label>
																				<div class="col-md-6 col-sm-6 col-xs-12">
																				  <select class="select2_single form-control" tabindex="-1">
																					<option></option>
																					<option value="AK">Alaska</option>
																					<option value="HI">Hawaii</option>
																					<option value="CA">California</option>
																					<option value="NV">Nevada</option>
																					<option value="OR">Oregon</option>
																					<option value="WA">Washington</option>
																					<option value="AZ">Arizona</option>
																					<option value="CO">Colorado</option>
																					<option value="ID">Idaho</option>
																				  </select>
																				</div>
																			  </div>
																			   <div class="form-group">
																				<label class="control-label col-md-3 col-sm-3 col-xs-12">OBSERVACIONES </label>
																				<div class="col-md-6 col-sm-6 col-xs-12">
																				  <textarea id="message" required="required" class="form-control" name="message"></textarea>
																				</div>
																			  </div>
																			</form>
																	</div>
																</div>
															<!----->
														</div>
													 
														<div id="step-4">
																<div class="x_content">
																	<!--------->
																	<div class="container-fluid adm-archivos">
																		<div class="row">
																			<div class="col-md-12">						
																				<div class="panel-body">
																					<div class="col-md-2 "></div>
																					<div class="col-md-8 subir-archivos">
																					
																						
																						<div class="panel-heading text-center">
																							<span><strong><span class="glyphicon glyphicon-file"> </span> Manejo de archivos</strong></span>
																						</div>
																						<div class="form-group">
																							<label>TIPO DE ARCHIVO</label>
																							<select class="form-control" id="" name="">
																								<option value="volvo">
																									Tipo1
																								</option>
																								<option value="saab">
																									Tipo2
																								</option>
																								<option value="mercedes">
																									Tipo3
																								</option>
																								<option value="audi">
																									Tipo4
																								</option>
																							</select>
																						</div>
																						<br>
																					
																						<div class="form-group">
																							<label>Subir archivos</label>
																							<div class="input-group">
																								<input placeholder="" type="text" class="form-control carga-archivo-filename" disabled="disabled">
																								<!-- don't give a name === doesn't send on POST/GET -->
																								<span class="input-group-btn"> 
																									<!-- image-preview-input -->
																									<div class="btn btn-default carga-archivo-input"> 
																										<span class="glyphicon glyphicon-folder-open"></span>
																										<span class="carga-archivo-input-title">Seleccionar archivo</span>
																										<input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" />
																										<!-- rename it -->
																									</div>
																								 </span>
																							</div>
																						</div>

																						<div class="row">
																							<div class="col-md-6">
																								<div class="col-md-6">
																									Espacio utilizado
																								</div>
																								<div class="col-md-6">
																									523.0 KB
																								</div>                                
																							</div>
																							<div class="col-md-6">
																								<a class="btn btn-primary btn-block" href="#">Subir archivo</a>
																							</div>
																						</div>                       
																					</div>                   
																				</div>  													                
																			</div>
																		</div>	

																		<div class="row">
																			<div class="col-md-1"></div>
																			<div class="col-md-10"><br><br>
																				<div class="panel panel-default">
																					<div class="panel-heading text-center">
																						<span><strong><span class="glyphicon glyphicon-folder-open"> </span> Archivos</strong></span>
																					</div>
																					<table class="table table-bordered table-hover vmiddle">
																						<thead>
																							<tr>
																								<th></th>
																								<th></th>	
																								<th>Activos</th>
																								<th>Tipo Documento</th>
																								<th>Tamaño</th>
																								<th>Fecha</th>
																								<th>Acciones</th>
																								
																								
																							</tr>
																						</thead>
																						<tbody>
																							<tr>
																								<td class="text-center">
																									<div class="radio">
																										<label>
																											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
																										</label>
																									</div>
																								</td>
																								<td>001</td>
																								<td>doc_6_doc_3_Egreso.pdf</td>
																								<td>Listado General de Personas</td>																
																								<td>523.0 KB </td>
																								<td>16-sep-16 09:48:2</td>
																								<td class="text-center">
																									<a href="#"><span class="btn btn-sm btn-warning glyphicon glyphicon-file"></span></a>
																									<a href="#"><span class="btn btn-sm btn-primary glyphicon glyphicon-pencil"></span></a>
																									<a href="#"><span class="btn btn-sm btn-danger glyphicon glyphicon-trash"></span></a>
																								</td>
																							</tr>
																							<tr>
																								<td class="text-center">
																									<div class="radio">
																										<label>
																											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
																										</label>
																									</div>
																								</td>
																								<td>001</td>
																								<td>doc_6_doc_3_Egreso.pdf</td>
																								<td>Listado General de Personas</td>																
																								<td>523.0 KB </td>
																								<td>16-sep-16 09:48:2</td>
																								<td class="text-center">
																									<a href="#"><span class="btn btn-sm btn-warning glyphicon glyphicon-file"></span></a>
																									<a href="#"><span class="btn btn-sm btn-primary glyphicon glyphicon-pencil"></span></a>
																									<a href="#"><span class="btn btn-sm btn-danger glyphicon glyphicon-trash"></span></a>
																								</td>
																							</tr>
																							<tr>
																								<td class="text-center">
																									<div class="radio">
																										<label>
																											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
																										</label>
																									</div>
																								</td>
																								<td>001</td>
																								<td>doc_6_doc_3_Egreso.pdf</td>
																								<td>Listado General de Personas</td>																
																								<td>523.0 KB </td>
																								<td>16-sep-16 09:48:2</td>
																								<td class="text-center">
																									<a href="#"><span class="btn btn-sm btn-warning glyphicon glyphicon-file"></span></a>
																									<a href="#"><span class="btn btn-sm btn-primary glyphicon glyphicon-pencil"></span></a>
																									<a href="#"><span class="btn btn-sm btn-danger glyphicon glyphicon-trash"></span></a>
																								</td>
																							</tr>
																						</tbody>
																					</table>
																				</div>
																			</div>
																		</div>
																	
																	</div>
																	
																	
																	<!---------->
																</div>	
															
														</div>
														
													</div>
													<!-- End SmartWizard Content -->
												  
									
									<!---------->
									
							  </div>
								  <div class="modal-footer ">
								<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
							  </div>
							</div>
						<!-- /.modal-content --> 
						</div>
						  <!-- /.modal-dialog --> 
					</div>
					
					<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title custom_align" id="Heading">Editar Captura</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<input class="form-control " type="text" placeholder="Tiger Nixon">
									</div>
									<div class="form-group">									
										<input class="form-control " type="text" placeholder="System Architect">
									</div>
									<div class="form-group">
										<input class="form-control " type="text" placeholder="Edinburgh">
									</div>
							  </div>
								  <div class="modal-footer ">
								<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
							  </div>
							</div>
						<!-- /.modal-content --> 
						</div>
						  <!-- /.modal-dialog --> 
					</div>
    
    
    
					<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
					  <div class="modal-dialog">
						<div class="modal-content">
							  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title custom_align" id="Heading">Eliminar Captura</h4>
						  </div>
							  <div class="modal-body">
						   
						   <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
						   
						  </div>
							<div class="modal-footer ">
							<button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
							<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
						  </div>
							</div>
					<!-- /.modal-content --> 
						</div>
					  <!-- /.modal-dialog --> 
					</div>
				
				
				<!-------------------------------------------------->

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />
        </div>
        <!-- /page content -->
@stop
    
