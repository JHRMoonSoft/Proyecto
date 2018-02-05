@extends('layouts.app')
@section('content')  

  
@section('x_content') 
 
    <div class="x_panel"> 
	    <div class="x_title"> 
			<h2>Registrar Inventario RQS</h2>
			<a  href="{{ url('/requisicion/'.$requisicion->id) }}"class="btn btn-danger  right" role="button">Ver </a>
			<a  href="{{ url('/entregarRQS') }}" class="btn btn-default  right" role="button"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp&nbsp&nbspVolver al listado </a>
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<form id="formulario" name="formulario" class="form-horizontal" role="form" method="POST" action="{{ url('/entregarRQS/' . $requisicion->id ) }}">
				{{ csrf_field() }}
				<input name="_method" type="hidden" value="PUT">						
				<input type="hidden" class="form-control" id="rqs_id" name="rqs_id" value="{{$requisicion->id}}"/>
				<ul class="list-unstyled timeline">
					<li>
						<div class="table-responsive">
							<table id="datatable-buttons" class="table table-striped table-bordered ">
								<thead>
								<tr>
										<th>Código</th>
										<th>Fecha RQS</th>																																																				
										<th>Asunto</th>
										<th>Estado</th>
										<th>Fecha Entrega</th>	
										<th>Solicitante</th>
										<th>Cargo</th>
										<th>Dependencia</th>
										
										
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
												<td>{{$reg->created_at->format('d-m-Y')}}</td>
												<td>{{$reg->user->nom_usr}} {{$reg->user->ape_usr}}</td>
												<td>{{$requisicion->cargo->des_crg  }}</td>
												<td>{{$requisicion->area->tipoarea->des_tip_are}} / {{$requisicion->area->des_are}}</td>
											</tr> 
										@endif
									@endforeach
								</tbody>
							</table>	<br />	
						</div>
					</div>
					</li>		
					
					<li>
						<div class="block_content">
							<h2>
								Lista de Productos
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
											<th class="text-center">#</th>
											<th class="text-center">Categoria</th>
											<th class="text-center">Producto</th>
											<th class="text-center">Unidad</th>									
											<th class="text-center">Cantidad <br> Entregada</th>
											<th class="text-center">Unidad <br/>Inventario</th>	
											<th class="text-center">Cantidad <br/>Inventario</th>												
											<th class="text-center">Cantidad <br>Disponible </th>											
											
											
		
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
													<input type="hidden" class="form-control" id="producto1" name="producto1" onchange="cambio_productos(1);"/>
												</td>
												<td class="nopadding" >
													<select class="form-control" id="unidad1" name="unidad1" required>
														<option value="" selected>Seleccionar</option>
													</select>
													@if ($errors->has('unidad1'))
														<span class="help-block">
															<strong>{{ $errors->first('unidad1') }}</strong>
														</span>
													@endif
												</td>											
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="cant_entr_prd{{$loop->index + 1}}" name="cant_entr_prd{{$loop->index + 1}}" value="{{$prod->cant_entr_prd}}" disabled style="background:rgba(247, 247, 247, 0.57);" />
													</div>
												</td>
												<td class="nopadding" >
													<select class="form-control" id="unidad" name="unidad" required>
														<option value="" selected>Seleccionar</option>
													</select>
													@if ($errors->has('unidad'))
														<span class="help-block">
															<strong>{{ $errors->first('unidad') }}</strong>
														</span>
													@endif
												</td>																						
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control " id="cant_inv_prd{{$loop->index + 1}}" name="cant_inv_prd{{$loop->index + 1}}"  value="{{$prod->cant_inv_prd}}" onchange="calculo_diferencia_entrega(this.value, {{$loop->index + 1}});" />
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="cant_disp_prd{{$loop->index + 1}}" name="cant_disp_prd{{$loop->index + 1}}" value="{{$prod->cant_disp_prd}}" readonly />
													</div>
												</td>
												
											</tr>
										@endforeach
									</tbody>
							
								</table>
								</div>
								
							</div>
						
						</div>
					</li>
				</ul>			
				<div class="form-group right">						
					
					<a  href="{{ url('/entregarRQS') }}" class="btn btn-danger" role="button">Cancelar </a>
					<input type="hidden" class="form-control" id="boton" name="boton" value=""/>
					<button type="button" onClick="validate('guardar')" class="btn btn-default">Guardar</button>
				</div>
			</form>
        </div>
		
	</div>

	
@stop

@section('postscripts')
     <script>
	 
		function validate(valor){
			$('#boton').val(valor);
			document.getElementById("formulario").submit();
		}
		
		function calculo_diferencia_entrega(valor, rid) {
			var cant_apr = parseInt($('#cant_entr_prd'+rid).val());
			var cant_entr = parseInt(valor);
			var cant_dif = 0;
			if (!cant_entr){
				alert('Digita un valor.');
				cant_entr = 0;
			}
			else {
				if( cant_apr < cant_entr ){
					alert('La cantidad entregada no puede superar la autorizada. ' + cant_entr + ' - ' + cant_apr);
					cant_entr = 0;
				}
				else if(cant_entr < 0){
					alert('La cantidad entregada debe ser un valor válido.');
					cant_entr = 0;
				}
				else{
					cant_dif = cant_apr - cant_entr;
				}
			}
			$('#cant_inv_prd'+rid).val(cant_entr);
			$('#cant_disp_prd'+rid).val(cant_dif);
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
		 function cambio_productos(rid) {
		   var opt = $('#producto'+rid).val();
		   $.get("{{ url('almacen/cargarunidadesproducto')}}", 
				{
					option: opt,
					
				}, 
			function(data) {
					var model = $('#unidad'+rid);
					
					model.empty();
					model.append("<option value='' selected>Seleccionar</option>");
						$.each(data, function(index, element) {
							model.append("<option value='"+ element.id +"'>" + element.des_und + "</option>");
					});
			});
	   }
		
		$.get("{{ url('solicitudcompra/cargardisponibleproducto')}}", 
			{
				option: $('#producto1').val(),
				
			}, 
			function(data) {
				if(data){
					if(data.cnt_prd == null){
						document.getElementById("disponible1").value = '0 ' + data.und;
					}
					else{
						document.getElementById("disponible1").value = data.cnt_prd + ' ' + data.und;
					}
					
				}
				
				//model.setAttribute('value', );
			});
			window.primer_producto_cargado = true;
		
	</script>  
	
@stop
@stop

