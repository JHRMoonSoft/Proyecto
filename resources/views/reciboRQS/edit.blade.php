@extends('layouts.app')
@section('content')  

  
@section('x_content') 
 
    <div class="x_panel">  
	    <div class="x_title">
			<h2>Recibír Requisición Interna</h2>
			<a  href="{{ url('/requisicion/'.$requisicion->id) }}"class="btn btn-danger  right" role="button">Ver </a>
			<a  href="{{ url('/entregarRQS') }}" class="btn btn-default  right" role="button"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp&nbsp&nbspVolver al listado </a>
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/recibirRQS/' . $requisicion->id) }}">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="PUT" />
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
									<a>Espacio exclusivo para confirmar recibo de los elementos solicitados</a>
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
											<textarea id="obs_rqs" name="obs_rqs" class="editor-wrapper" style="width:100%" required ></textarea>
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
												<th>Estado</th>
												<th>Solicitante</th>
												<th>Cargo</th>
												<th> Dependencia</th>
												
												
											</tr>
										</thead>
										<tbody>
											
											@foreach($requisicion->registrohistoricorequisicion as $reg)
												@if($loop->first)
													<tr>
														<td>{{$requisicion->id}}</td>
														<td>{{$reg->created_at->format('d-m-Y')}}</td>
														<td>{{$requisicion->asn_rqs}}</td>
														<td>{{$requisicion->estadorequisicion->desc_est_req}}</td>
														<td>{{$reg->user->nom_usr}} {{$reg->user->ape_usr}}</td>
														<td>{{$reg->user->cargo->des_crg}}</td>
														<td>{{$reg->user->area->tipoarea->des_tip_are}} / {{$reg->user->area->des_are}}</td>
														
													</tr> 
												@endif
											@endforeach
											
										
										</tbody>
									</table>
								</div>	
							
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
											<th>Unidad</th>									
											<th>Cant. Autorizada</th>				
											<th>Cant. Entregada</th>
											<th>Cant. Pendiente</th>
											
		
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
												<td class="nopadding">
													@if($prod->producto)
														{{$prod->unidad_solicitada->des_und}}
													@endif
												</td>
																								
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="cant_apr_prd{{$loop->index + 1}}" name="cant_apr_prd{{$loop->index + 1}}" value="{{$prod->cant_apr_prd}}" disabled style="background:rgba(247, 247, 247, 0.57);" />
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control " id="cant_entr_prd{{$loop->index + 1}}" name="cant_entr_prd{{$loop->index + 1}}" value="{{$prod->cant_entr_prd}}" disabled style="background:rgba(247, 247, 247, 0.57);" value=""/>
													</div>
													
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="cant_dif_prd{{$loop->index + 1}}" name="cant_dif_prd{{$loop->index + 1}}" value="{{$prod->cant_dif_prd}}"  disabled style="background:rgba(247, 247, 247, 0.57);" />
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
							
							
					
						<br/>
							<h5>Recibí los elementos solicitados<h5>
							<div class="row ">
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
							
									
									
									<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>									
										<div class="form-group col-md-12 col-xs-12">
											<h5>Nombre </h5>
												<input type="text" class="form-control" id="nom_rcp_rqs" name="nom_rcp_rqs" value="{{$requisicion->nom_rcp_rqs}}" placeholder="¿quien recibe?" />
												@if ($errors->has('nom_rcp_rqs'))
													<span class="help-block">
														<strong>{{ $errors->first('nom_rcp_rqs') }}</strong>
													</span>
												@endif
										</div>										
									</div>	
									<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>						
										<div class="form-group col-md-12 col-xs-12">
											<h5>Cargo </h5>
												<input type="text" class="form-control" id="crg_rcp_rqs" name="crg_rcp_rqs" value="{{$requisicion->crg_rcp_rqs}}" placeholder="cargo" />
												@if ($errors->has('crg_rcp_rqs'))
													<span class="help-block">
														<strong>{{ $errors->first('crg_rcp_rqs') }}</strong>
													</span>
												@endif
										</div>
									</div>	
									<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>
								
										<h5>Fecha </h5>
										<div class="input-group registration-date-time">
											<span class="input-group-addon" id="fec_rcp_rqs"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
											<input class="form-control" name="fec_rcp_rqs" id="fec_rcp_rqs" type="date" value="{{$requisicion->fec_rcp_rqs}}" />
											<span class="input-group-btn">
											</span>
										</div>
										@if ($errors->has('fec_rcp_rqs'))
											<span class="help-block">
												<strong>{{ $errors->first('fec_rcp_rqs') }}</strong>
											</span>
										@endif
									</div>
							</div>
						<br />	
					</div>
				  </div>
				</li>
				</ul>			
				<div class="form-group right">						
					<a  href="{{ url('/entregarRQS') }}" class="btn btn-danger" role="button">Cancelar </a>
					<button type="submit" class="btn btn-success">Enviar</button>
				</div>
			</form>
        </div>
	</div>

	
@stop
     <script>
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

