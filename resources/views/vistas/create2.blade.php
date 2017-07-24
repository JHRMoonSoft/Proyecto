@extends('layouts.app')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Nuevo Proceso</h2>
					<ul class="nav navbar-right panel_toolbox">
					   <li><p data-placement="top" data-toggle="tooltip" title="Regresar"><a href="/workflow/proceso" class="btn btn-default btn-xs" data-title="Ver"><span class="glyphicon glyphicon-arrow-left"></span></a></p>
					  </li>
					</ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/workflow') }}" autocomplete=off>
				  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <!-- Smart Wizard -->
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1"><span class="step_no">1</span>
						  <span class="step_descr">
							Paso 1<br />
                            <small>Paso 1 Registro de terceros</small>
							</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Paso 2<br />
                                              <small>Paso 2 Registro de servicios</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Paso 3<br />
                                              <small>Paso 3 Asignación de actividades</small>
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
										<h2>Información general</h2>                  
										<div class="clearfix"></div>
										</div>
										<div class="form-group"><br>
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">IDENTIFICACION</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="identificacion" name="identificacion" required="required" class="form-control col-md-7 col-xs-12"/>
										</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NOMBRES</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="nombres" name="nombres" required="required" class="form-control col-md-7 col-xs-12"/>
										</div>
										</div>
										
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
										  <div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TIPO SERVICIO<span class="required"></span>
											</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<select id="tipo_servicio" name="tipo_servicio" class="select2_single form-control" tabindex="-1">
													<option></option>
													<option value="VENTA DE SEGURO">VENTA DE SEGURO</option>
												</select>
											</div>
										  </div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">IDENTIFICACION DE SERVICIO</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" id="id_servicio" name="id_servicio" required="required" class="form-control col-md-7 col-xs-12"/>
												</div>
											</div>
										  <div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">PROCESO</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
											  <div id="gender" class="btn-group" data-toggle="buttons">
												<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												  <input type="radio" name="estado" value="0"> &nbsp; Rechazado &nbsp;
												</label>
												<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												  <input type="radio" name="estado" value="1" checked="checked">  Aprobado 
												</label>
											  </div>
											</div>
										  </div>
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
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ACTIVIDADES / USUARIOS</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
											<select id="usuario_accion" name="usuario_accion" class="select2_single form-control" tabindex="-1">
												@foreach($acciones_disponibles as $accion_disponible)
													<option value="{{ $accion_disponible->username }}-{{ $accion_disponible->cod_acc }}">{{ $accion_disponible->usr_act}}</option>
												@endforeach
											</select>
											</div>
										</div>											  
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12">OBSERVACIONES </label>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<textarea id="observaciones" required="required" class="form-control" name="observaciones"></textarea>
											</div>
										</div>
											
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
															<select class="form-control" id="tipo_archivo" name="tipo_archivo">
																<option value="1">
																	Documento Inicial
																</option>
															</select>
														</div>
														<br>
													
														<div class="form-group">
															<label>Subir archivos</label>
															<div class="input-group">
																<input placeholder="" id="upload-file-info" type="text" class="form-control carga-archivo-filename" disabled="disabled">
																<span class="input-group-btn"> 
																	<!-- image-preview-input -->
																	<div class="btn btn-default carga-archivo-input"> 
																		<span class="glyphicon glyphicon-folder-open"></span>
																		<span class="carga-archivo-input-title">Seleccionar archivo</span>
																		<input type="file" name="archivo" onchange="$('#upload-file-info').val($(this).val().split(/(\\|\/)/g).pop());"/>
																		<!-- rename it -->
																	</div>
																 </span>
															</div>
														</div>
														<!--
														<div class="row">
															
															<div class="col-md-6">
																<div class="col-md-6">
																	Espacio utilizado
q																</div>
																<div class="col-md-6">
																	523.0 KB
																</div>                                
															</div>
															
															<div class="col-md-6">
																<a class="btn btn-primary btn-block" href="#">Subir archivo</a>
															</div>
														</div>                       
														-->
													</div>                   
												</div>  													                
											</div>
										</div>	
										<!--
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
										-->
									</div>
									<!---------->
								</div>
							</div>
						</div>
                    <!-- End SmartWizard Content -->
					</form>
                  </div>
                </div>
              </div>
            </div>
          </div>
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