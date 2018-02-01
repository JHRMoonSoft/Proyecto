@extends('layouts.app')
@section('content')  

@section('x_content')

    <div class="x_panel"> 
	    <div class="x_title">
			<h2>Información de la Requisición Interna</h2><!--
			@if( $requisicion->estadorequisicion->id == 8)
				<a  href="{{ url('inventarioRQS/'.$requisicion->id) }}" class="btn btn-success  right" role="button"><i class="fa fa-dropbox" aria-hidden="true"></i>&nbsp&nbsp&nbspINVENTARIO </a>
			@endif-->
			<a  href="{{ url('requisicion/export-pdf/'.$requisicion->id) }}" class="btn btn-primary  right" role="button"><i class="glyphicon glyphicon-cloud-download" aria-hidden="true"></i>&nbsp&nbsp Descargar </a>
			@if($requisicion->registrohistoricorequisicion->first()->user->id == Auth::user()->id)
				<a  href="{{ url('/requisicion-user/'. Auth::user()->id) }}" class="btn btn-default  right" role="button"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp&nbsp&nbspVolver al listado </a>
			@endif

			
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
						<span>RQS</span>
					  </a>
					</div>
					<div class="block_content"> 
						<h2 class="title">
							 <a>Historial de Registro   </a><br/>
						</h2>				
						<br />
						
						<div class="table-responsive">
							<table id="datatable-buttons" class="table table-striped table-bordered ">
								<thead>
								   <tr>
										
										<th>Fecha</th>																																																				
										<th>Asunto</th>	
										<th>Estado</th>
										<th>Usuario</th>
										<th>Observaciones </th>
									</tr>
								</thead>
								<tbody>
								@foreach($registrohistoricorequisicion as $registrohistoricorqs)
									<tr>
									  
										<td>{{$registrohistoricorqs->created_at->format('d-m-Y')}}</td>
										<td>{{$registrohistoricorqs->accionesrequisicion->asn_rqs}} </td>
										<td>{{$registrohistoricorqs->accionesrequisicion->estadorequisionactual->desc_est_req}}</td>
										<td>{{$registrohistoricorqs->user->nom_usr}} {{$registrohistoricorqs->user->ape_usr}} </td>
										<td>{{$registrohistoricorqs->obs_reg_rqs}}</td>
										
									</tr> 
								@endforeach
									 
								</tbody>
							</table>
						</div>
						<br/>
						
					</div>
						<div class="block_content"><br/>
						<h2 class="title">
							<a>Detalle de la Requisición  </a><br/>
						</h2>
						<br/>
						
						<div class="panel panel-default">
							
							<div class="table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered ">
									<thead>
										<tr>
										<th>Cod. RQS</th>
										<th>Fecha RQS</th>
										<th>Asunto</th>
										<th>Justificación</th>
									    <th>Solicitante	</th>										
									    <th>Cargo</th>
										<th> Dependencia</th>
										</tr>
									</thead>
									<tbody>
										
										<tr>
											<td>{{ $requisicion->id }}</td>
											<td>{{ $requisicion->created_at->format('d-m-Y')}}	</td>
											<td>{{$requisicion->asn_rqs}}</td>
											<td>{{$requisicion->jst_rqs}}</td>
											@if($requisicion->registrohistoricorequisicion->count() == 0)
												<td>Sin Creación</td>
											@else
												@foreach($requisicion->registrohistoricorequisicion as $reghis)
													@if ($loop->first)
														@if($reghis->user === null)
															<td>Sin Creación</td>
															<td></td>
															<td></td>
															<td></td>
														@else
															<td>{{$reghis->user->nom_usr .' '. $reghis->user->ape_usr}}</td>
																													
														@endif
													@endif
												@endforeach
												<td>{{$requisicion->cargo->des_crg  }}</td>
												<td>{{$requisicion->area->tipoarea->des_tip_are}} / {{$requisicion->area->des_are}}</td>
											@endif											
											
										</tr> 
									</tbody>
								</table>
							</div>
						</div>					
						
					 <a>Espacio exclusivo para el Asistente de Gestión Administrativa</a><br/>
					<div class="row ">
						<div class="btn-group col-md-5">
							<h5>Tipo de Solicitud</h5>
							<label for="success" class="btn btn-success">
								Solicitud Consumo
								<input type="radio" name="tip_sol1" id="success" value="{{$requisicion->tip_sol1 }}"s class="badgebox" disabled @if($requisicion->tip_sol >= 1 and $requisicion->tip_sol != 2) checked @endif />
								<span class="badge">&check;</span>
							</label>
								@if ($errors->has('tip_sol1'))
									<span class="help-block">
										<strong>{{ $errors->first('tip_sol1') }}</strong>
									</span>
								@endif
							<label for="warning" class="btn btn-warning">
								Solicitud Inversión
								<input type="checkbox" name="tip_sol2" id="warning" value="{{$requisicion->tip_sol2 }}" class="badgebox" disabled  @if($requisicion->tip_sol >= 2) checked @endif />
								<span class="badge">&check;</span>
							</label>
								@if ($errors->has('tip_sol2'))
									<span class="help-block">
										<strong>{{ $errors->first('tip_sol2') }}</strong>
									</span>
								@endif
						</div>	
						<div class="btn-group form-group  col-md-2">
							<h5>Aprobado en comite</h5>
							<input type="checkbox" id="apr_com" name="apr_com" disabled  autocomplete="off" @if($requisicion->apr_com == true) checked @endif / >									
							<div class="btn-group">
								<label for="" class="btn btn-primary">SI
									<span class="fa fa-check-square-o fa-lg"></span>
									<span class="fa fa-square-o fa-lg"></span>
								</label>
							</div>
					
							<input type="checkbox" id="apr_com" name="apr_com" disabled  autocomplete="off" @if($requisicion->apr_com == false) checked @endif />
							
							<div class="btn-group">
								<label for="" class="btn btn-danger">NO
									<span class="fa fa-check-square-o fa-lg"></span>
									<span class="fa fa-square-o fa-lg"></span>
								</label>
							</div>
						</div>
						
						<div class="btn-group form-group  col-md-2">
							<h5>Proveedor Autorizado</h5>
							<input type="checkbox" id="prv_apr" name="prv_apr" disabled  autocomplete="off" @if($requisicion->prv_apr == true) checked @endif />									
							<div class="btn-group">
								<label for="" class="btn btn-primary">SI
									<span class="fa fa-check-square-o fa-lg"></span>
									<span class="fa fa-square-o fa-lg"></span>
								</label>
							</div>
					
							<input type="checkbox" id="prv_apr" name="prv_apr" disabled  autocomplete="off"@if($requisicion->prv_apr == false) checked @endif />
							
							<div class="btn-group">
								<label for="" class="btn btn-danger">NO
									<span class="fa fa-check-square-o fa-lg"></span>
									<span class="fa fa-square-o fa-lg"></span>
								</label>
							</div>
						</div>
										
						<div class=" col-md-3 " ><h5>Fecha de aprobación</h5>
							<div class="input-group registration-date-time">
								<span class="input-group-addon" id="fec_apr_com"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
								<input class="form-control" name="fec_apr_com" id="fec_apr_com" disabled @if($requisicion->fec_apr_com) value="{{$requisicion->fec_apr_com}}" @endif type="date"/>
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
					<div class="block"><br/>
						<div class="tags">
							<a href="" class="tag">
								<span>Productos</span>
							</a>
						</div>
						<div class="block_content">
							<h2 class="title">
										<a>Lista de Productos</a>
							</h2>
							<br />		
												
								
							<div class="panel panel-default">
								<div class="panel-heading text-center">
									<span><strong><span class="glyphicon glyphicon-th-list"> </span> Productos</strong></span>
								</div>
								<div class="table-responsive">
									<table class="table table-bordered table-hover" id="education_fields2">
									<thead>
									
										<tr>
											<th>#</th>
											<th>Categoria</th>
											<th>Producto</th>
											<th>Unidad</th>
											<th>Cant. Solicitada</th>									
											<th>Cant. Autorizada</th>
											<th>Cant. Entregada</th>
											<th>Cant. Pendiente</th>											
											<th>Autorizado</th>	
		
										</tr>
									</thead>
									<tbody>
										@foreach($requisicion->productos as $prod)
											<tr>
												@if($loop->last)
													<input type="hidden" class="form-control" id="productos" name="productos" value="{{$loop->index + 1}}"/>
												@endif
												<td>
													{{$loop->index + 1}}
													<input type="hidden" class="form-control" id="producto{{$loop->index + 1}}" name="producto{{$loop->index + 1}}" value="{{$prod->id}}"/>
												</td>
												
												<td>
													<div class="form-group">
														@if($prod->producto)
															{{$prod->producto->categoria->des_cat}}
														@endif
													</div>
												</td>
												<td class="nopadding">
																									
													@if($prod->producto)
														{{$prod->producto->des_prd}}
													@else
														{{$prod->nom_prd}}
													@endif
												</td>
												<td class="nopadding">
													{{$prod->unidad_solicitada->des_und}}
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control disabled" id="cantidad{{$loop->index + 1}}" name="cantidad{{$loop->index + 1}}" value="{{$prod->cant_sol_prd}}" disabled style="background:rgba(247, 247, 247, 0.57);"   />
													</div>
													
												</td>
												
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="cant_apr_prd{{$loop->index + 1}}" name="cant_apr_prd{{$loop->index + 1}}"  disabled style="background:rgba(247, 247, 247, 0.57);" @if($requisicion->registrohistoricorequisicion->count() == 1) value="0" @else   value="{{$prod->cant_apr_prd}}" @endif  />
													</div>
												</td>
													<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="cant_entr_prd{{$loop->index + 1}}" name="cant_entr_prd{{$loop->index + 1}}" value="{{$prod->cant_entr_prd}}" disabled style="background:rgba(247, 247, 247, 0.57);"  placeholder="Cantidad"/>
													</div>
												</td>
													<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="cant_dif_prd{{$loop->index + 1}}" name="cant_dif_prd{{$loop->index + 1}}" value="{{$prod->cant_dif_prd}}"  disabled style="background:rgba(247, 247, 247, 0.57);" / >
													</div>
												</td>
												
												<td class="nopadding" >
													<div class="form-group row">
														<div class="col-sm-8">
															<input type="checkbox" id="apr_prod{{$loop->index + 1}}" name="apr_prod{{$loop->index + 1}}" disabled  autocomplete="off"  @if($requisicion->registrohistoricorequisicion->count() == 1)  @else  @if($prod->apr_prod == true) checked @endif  @endif  />
															<div class="btn-group">
																<label for="apr_prod{{$loop->index + 1}}" class="btn btn-default">
																	<span class="fa fa-check-square-o fa-lg"></span>
																	<span class="fa fa-square-o fa-lg"></span>
																</label>
															</div>
														</div>
													</div>
												</td>
											</tr>
										@endforeach
									</tbody>
							
								</table>
								</div>
								
							</div>
						</div>
						
						<div class="block_content"><br/>
						
							<h2 class="title">
										<a>Proveedores sugeridos</a>
							</h2>
							<br />
							<div class="panel panel-default">
								<div class="panel-heading text-center">
									<span><strong><span class="glyphicon glyphicon-th-list"> </span> Proveedores</strong></span>
								</div>
								<div class="table-responsive">
									<table class="table table-bordered table-hover" id="education_fields2">
									<thead>
										<tr >
											<th>#</th>
											<th>Nombre Proveedor</th><!--
											<th>Nit. Proveedor</th>-->
											<th>Telefono</th>
											<th>Aprobado</th>
										</tr>
									</thead>
									<tbody>
										@foreach($requisicion->proveedoresrequisicion as $prov)
											<tr>
												@if($loop->last)
													<input type="hidden" class="form-control" id="proveedores" name="proveedores" value="{{$loop->index + 1}}"/>
													<input type="hidden" class="form-control" id="nuevo_prov" name="nuevo_prov" value="0"/>
												@endif
												<td>
													{{$loop->index + 1}}
													<input type="hidden" class="form-control" id="proveedor{{$loop->index + 1}}" name="proveedor{{$loop->index + 1}}" value="{{$prov->id}}"/>
												</td>
												<td class="nopadding" >
													<div class="form-group">
														{{$prov->raz_soc}}
													</div>
												</td><!--
												<td class="nopadding" >
													<div class="form-group">
														{{$prov->tip_doc}}.{{$prov->num_doc}}
													</div>
												</td>-->
												<td class="nopadding" >
													<div class="form-group">
														{{$prov->tel_fij}}
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group row">
														
														<div class="col-sm-8">
															<input type="checkbox" id="est_prov{{$loop->index + 1}}" name="est_prov{{$loop->index + 1}}" disabled  autocomplete="off" @if($prov->est_prov == true)checked="checked"@endif/>
															<div class="btn-group">
																<label for="est_prov{{$loop->index + 1}}" class="btn btn-default">
																	<span class="fa fa-check-square-o fa-lg"></span>
																	<span class="fa fa-square-o fa-lg"></span>
																</label>
															</div>
														</div>
													</div>
												</td>
											</tr>
										@endforeach
									</tbody>
							
								</table>
								</div>
								
							</div>
						</div>
						<div class="block_content"><br/>
						<h2 class="title">
								 <a>Recibí los elementos solicitados en este documento</a><br/>
							</h2>
					
						<div class="row ">
							<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
								<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>									
									<div class="form-group col-md-12 col-xs-12">
										<h5>Nombre </h5>
											<input type="text" class="form-control" disabled style="background:#fff;" id="nom_rcp_rqs" name="nom_rcp_rqs" value="{{$requisicion->nom_rcp_rqs}}" placeholder="¿quien recibe?">
									</div>										
								</div>	
								<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>						
									<div class="form-group col-md-12 col-xs-12">
										<h5>Cargo </h5>
											<input type="text" class="form-control"  disabled style="background:#fff;" id="crg_rcp_rqs" name="crg_rcp_rqs" value="{{$requisicion->crg_rcp_rqs}}" placeholder="cargo">
									</div>
								</div>	
								<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>
							
									<h5>Fecha </h5>
									<div class="input-group registration-date-time">
										<span class="input-group-addon" id="basic-addon1"><span  class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
										<input class="form-control" disabled style="background:#fff;" name="fec_rcp_rqs"  value="{{$requisicion->fec_rcp_rqs}}" id="fec_rcp_rqs" type="date">
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
        <script>
	 
		function validate(valor){
			$('#boton').val(valor);
			document.getElementById("formulario").submit();
		}
		var room = 1;
		function education_fields2() {
		 
			room++;
			var objTo = document.getElementById('education_fields2')
			var divtest = document.createElement("tbody");
			divtest.setAttribute("class", "form-group tr removeclass"+room);
			var rdiv = 'removeclass'+room;
			divtest.innerHTML = '<tr><td>' + (room) + '</td><td><div class="form-group "><select class="form-control"><option value="" selected>Seleccionar</option><option value="">Taller de Cocina</option><option value="">Papeleria</option><option value="" >Didacticos</option><option value="" >Aseo</option></select></div></td><td class="nopadding" ><select class="form-control" id="educationDate" name="educationDate[]"><option value="" selected>Seleccionar</option><option name="" value="">Aceite</option><option value="">Arepas antioqueñas precocidas </option><option value="" >Arroz  (bolsas de medio kilo)</option><option value="" >Bocadillo</option></select></td><td class="nopadding" ><div class="form-group"><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="Cantidad"></div></td><td class="nopadding" ><select class="form-control" id="educationDate" name="educationDate[]"><option value="" selected>Seleccionar</option><option name="" value="">Barra</option><option name="" value="">Bloque</option><option name="" value="">Bolsa</option><option name="" value="">Botella</option><option name="" value="">Caja</option><option name="" value="">Frasco</option><option value="">Lata</option><option value="">Paquete</option><option value="">Pote</option><option value="">Tarro</option><option value="">Tubo</option><option value="">Vaso</option><option name="" value="">Unidad</option><option value="">Kg</option><option value="">Kilo</option><option value="">Litro</option><option value="">Lonjas</option></select></td><td class="nopadding" ><div class="form-group"><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="Detalle"></div></td><td class="nopadding" ><div class="input-group-btn"><button class="btn btn-sm btn-danger glyphicon glyphicon-minus btn-xs" type="button" onclick="remove_education_fields2('+ room +');"> <span  aria-hidden="true"></span> </button></div></td></tr>';
			
			objTo.appendChild(divtest)
			  
		}
	   function remove_education_fields2(rid) {
		   $('.removeclass'+rid).remove()
		   
		   room--;
	   }
		function cambioaccion() {
		 
			$.get("{{ url('autorizarRQS/cambioaccion')}}", 
				{
					option: $('#acc_rqs').val(),
					
				}, 
				function(data) {
					var model = $('#rol_rqs');
					model.empty();
					model.append("<option value='' selected>Seleccionar</option>");
					model.append("<option value='"+ data['rol'].id +"' selected>" + data['rol'].display_name + "</option>");
					//$.each(data, function(index, element) {
					//		model.append("<option value='"+ element.id +"'>" + element.display_name + "</option>");
					//});
					document.getElementById('asn_rqs').value = data['estado'].asu_est_req;
					document.getElementById('est_rqs').value = data['estado'].id;
			});
			
		}
		
	</script>
@stop
<!--6581128-->
<!--229392650-->