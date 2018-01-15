@extends('layouts.app')
@section('content')  


@section('x_content') 

    <div class="x_panel">
	    <div class="x_title">
			<h2>Autorizar Requisición Interna </h2>
			<a  href="{{ url('/autorizarRQS') }}" class="btn btn-default  right" role="button"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp&nbsp&nbspVolver al listado </a>
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<form name="formulario" id="formulario" class="form-horizontal" role="form" method="POST" action="{{ url('/autorizarRQS/' . $requisicion->id ) }}">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" class="form-control" id="rqs_id" name="rqs_id" value="{{$requisicion->id}}"/>
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
								<a>Espacio exclusivo para el Asistente de Gestión Administrativa:</a>
							</h2>
							<div class="panel-body message">
								<div class="form-group"><br>
									<label for="to" class="col-sm-2 control-label">Acción:</label>
									<div class="col-sm-10">
										<select id="acc_rqs" class="form-control" name="acc_rqs" onchange="cambioaccion();">
											<option value="" selected>Seleccionar</option>
											@foreach($acciones as $acc)
											<option value="{{ $acc->id}}">{{ $acc->des_acc_rqs }} </option>
											@endforeach
										</select>
										@if ($errors->has('acc_rqs'))
											<span class="help-block">
												<strong>{{ $errors->first('acc_rqs') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label for="to" class="col-sm-2 control-label">Para:</label>
									<div class="col-sm-10">
										<select id="rol_rqs" class="form-control" name="rol_rqs">
											<option value="" selected>Seleccionar</option>
										</select>
										@if ($errors->has('rol_rqs'))
											<span class="help-block">
												<strong>{{ $errors->first('rol_rqs') }}</strong>
											</span>
										@endif
									</div>
								</div>
								
								<div class="form-group">
									<label for="asn_rqs" class="col-sm-2 control-label">Asunto:</label>
									<div class="col-sm-10">
										<input type="text" class="form-control select2-offscreen" id="asn_rqs" name="asn_rqs" tabindex="-1" readonly/>
										@if ($errors->has('asn_rqs'))
											<span class="help-block">
												<strong>{{ $errors->first('asn_rqs') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label for="obs_rqs" class="col-sm-2 control-label">Observación:</label>
									<div class="col-sm-10">
										<textarea id="obs_rqs" name="obs_rqs" class="editor-wrapper" style="width:100%" ></textarea>
										@if ($errors->has('obs_rqs'))
											<span class="help-block">
												<strong>{{ $errors->first('obs_rqs') }}</strong>
											</span>
										@endif
										<br/>
									</div>
								</div>
								<input type="hidden" class="form-control select2-offscreen" id="est_rqs" name="est_rqs"/>
								@if ($errors->has('est_rqs'))
									<span class="help-block">
										<strong>{{ $errors->first('est_rqs') }}</strong>
									</span>
								@endif
							</div>
								
						
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
						<div class="block_content">
							<h2 class="title">
								<a>Detalle de la Requisición</a>
							</h2>
							<br />
								<div class="table-responsive">
									<table id="datatable-buttons" class="table table-striped table-bordered ">
										<thead>
										<tr>
												<th>Código</th>
												<th>Fecha RQS</th>																																																				
												<th>Asunto</th>	
												<th>Justificacion</th>
												<th>Estado</th>
												<th>Solicitante</th>
												<th>Cargo</th>
												<th> Área</th>
												
												
											</tr>
										</thead>
										<tbody>
											@foreach($requisicion->registrohistoricorequisicion as $reg)
												@if($loop->first)
													<tr>
														<td>{{$requisicion->id}}</td>
														<td>{{$reg->created_at->format('d-m-Y')}}</td>
														<td>{{$requisicion->asn_rqs}}</td>
														<td>{{$requisicion->jst_rqs}}</td>
														<td>{{$requisicion->estadorequisicion->desc_est_req}}</td>
														<td>{{$reg->user->nom_usr}} {{$reg->user->ape_usr}}</td>
														<td>{{$reg->user->cargo->des_crg}}</td>
														<td>{{$reg->user->area->tipoarea->des_tip_are}} - {{$reg->user->area->des_are}}</td>
													</tr> 
												@endif
											@endforeach
										</tbody>
									</table>
								</div>
								 <a>Espacio exclusivo para el Asistente de Gestión Administrativa</a><br/>
								<div class="row">
									<div class="col-md-12">
										<div class="btn-group col-md-5">
											<h5>Tipo de Solicitud</h5>
											<label for="success" class="btn btn-success">
												Solicitud Consumo
												<input type="radio" name="tip_sol1" id="success" value="1"s class="badgebox"/>
												<span class="badge">&check;</span>
											</label>
												@if ($errors->has('tip_sol1'))
													<span class="help-block">
														<strong>{{ $errors->first('tip_sol1') }}</strong>
													</span>
												@endif
											<label for="warning" class="btn btn-warning">
												Solicitud Inversión
												<input type="checkbox" name="tip_sol2" id="warning" value="2" class="badgebox">
												<span class="badge">&check;</span>
											</label>
												@if ($errors->has('tip_sol2'))
													<span class="help-block">
														<strong>{{ $errors->first('tip_sol2') }}</strong>
													</span>
												@endif
										</div>
										<div class="btn-group col-md-2" data-toggle="buttons">
											
											<h5>Aprobado en comite</h5>
											<label class="btn btn-primary">
												<input type="radio" name="apr_com" id="apr_com" autocomplete="off" value="1" checked>Si
												<span class="glyphicon glyphicon-ok"></span>
											</label>
		
											<label class="btn btn-danger">
												<input type="radio" name="apr_com" id="apr_com" value="0" autocomplete="off">No
												<span class="glyphicon glyphicon-ok"></span>
											</label>
										
										</div>
										<div class="btn-group col-md-2" data-toggle="buttons">
											<h5>Proveedor Autorizado</h5>
											
											<label class="btn btn-primary ">
												<input type="radio" name="prv_apr" id="prv_apr" value="1" autocomplete="off" checked>Si
												<span class="glyphicon glyphicon-ok"></span>
											</label>
		
											<label class="btn btn-danger">
												<input type="radio" name="prv_apr" id="prv_apr" value="0" autocomplete="off">No
												<span class="glyphicon glyphicon-ok"></span>
											</label>
										
										</div>
										<div class="btn-group col-md-3 " data-toggle="buttons">
											<div class="form-group ">
												<h5>Fecha de aprobación</h5>
												<div class="input-group registration-date-time">
												<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
												<input class="form-control" name="fec_apr_com" id="fec_apr_com" type="date"/>
												<span class="input-group-btn">
												</span>
											</div>
											</div>	
										</div>
									</div>
								</div>
						</div>
					</div>
					</li>
						</li>
					<li>
					<div class="block">
						<div class="tags">
						<a href="" class="tag">
							<span>Paso 3</span>
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
										
									
										<tr >
											<th>#</th>
											<th>Categoria</th>
											<th>Producto</th>
											<!--<th><a href="/producto" title="Producto" target="_blank" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-title="Producto"></a>Producto</th>-->
											<th>Nuevo 	producto</th>
											<th>Unidad</th>
											<th>Cant. Solicitada</th>									
											<th>Cant. Autorizada</th>	
											<th>Estado</th>	
		
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
													@endif
												</td>
												
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="detalle{{$loop->index + 1}}" name="detalle{{$loop->index + 1}}" value="{{ $prod->nom_prd }}" placeholder="Detalle">
													</div>
												</td>
												
												<td class="nopadding" >
													<select class="form-control" id="unidad{{$loop->index + 1}}" name="unidad{{$loop->index + 1}}">
														<option value="" selected>Seleccionar</option>
														@if($prod->producto)
															@foreach($prod->producto->unidades as $und)
																<option name="" value="{{$und->id}}" @if($und->id == $prod->unidad_solicitada->id)selected="selected"@endif>{{$und->des_und}}</option>
															@endforeach
														@else
															@foreach($unidades as $und)
																<option name="" value="{{$und->id}}" @if($und->id == $prod->unidad_solicitada->id)selected="selected"@endif>{{$und->des_und}}</option>
															@endforeach
														@endif
													</select>
												</td>
												
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control disabled" id="cantidad{{$loop->index + 1}}" name="cantidad{{$loop->index + 1}}" disabled style="background:rgba(247, 247, 247, 0.57);" value="{{$prod->cant_sol_prd}}"/>
													</div>
													
												</td>
												
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="cant_apr_prd{{$loop->index + 1}}" name="cant_apr_prd{{$loop->index + 1}}" value="{{$prod->cant_apr_prd}}"  placeholder="Cantidad"/>
													</div>
												</td>
												
												<td class="nopadding" >
													<div class="form-group row">
														<div class="col-sm-8">
															<input type="checkbox" id="apr_prod{{$loop->index + 1}}" name="apr_prod{{$loop->index + 1}}" autocomplete="off" @if($prod->apr_prod == true) checked @endif />
															<div class="btn-group">
																<label for="apr_prod{{$loop->index + 1}}" class="btn btn-primary">
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
					</div>
					</li>
					<li>
					<div class="block">
						<div class="tags">
						<a href="" class="tag">
							<span>Paso 4</span>
						</a>
						</div>
						<div class="block_content">
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
										<th>Nombre</th>
										<th>Telefono</th>
										<th>Autorizar</th>
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
											</td>
											<td class="nopadding" >
												<div class="form-group">
													{{$prov->tel_fij}}
												</div>
											</td>
											<td class="nopadding" >
												<div class="form-group row">
													
													<div class="col-sm-8">
														<input type="checkbox" id="est_prov{{$loop->index + 1}}" name="est_prov{{$loop->index + 1}}" autocomplete="off" @if($prov->est_prov == true)checked="checked"@endif/>
														<div class="btn-group">
															<label for="est_prov{{$loop->index + 1}}" class="btn btn-primary">
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
						<small>Para autorizar el proveedor tiene que estar creado en el sistema.</small>
						<br />	
							
							
						</div>
					</div>
					</li>
				</ul>			
				<div class="form-group right">						
					<button class="btn btn-danger">Cancelar</button>
					<input type="hidden" class="form-control" id="boton" name="boton" value=""/>
					<button type="button" onClick="validate('guardar')" class="btn btn-default">Guardar</button>
					<button type="button" onClick="validate('enviar')" class="btn btn-success">Enviar</button>
				</div>
			</form>
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

