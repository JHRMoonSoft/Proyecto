@extends('layouts.app')
@section('content')  


@section('x_content') 

    <div class="x_panel"> 
	    <div class="x_title">
			<h2>Requisición Interna </h2>
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
												<td>{{$reg->user->cargo->des_crg}}</td>
												<td>{{$reg->user->area->tipoarea->des_tip_are}} / {{$reg->user->area->des_are}}</td>
											</tr> 
										@endif
									@endforeach
								</tbody>
							</table>
						</div>
					</li>
					
					<li>
							<br />
							<h2 >
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
												<th class="text-center">#</th>
												<th class="text-center">Categoria</th>
												<th class="text-center">Producto</th>												
												<th class="text-center">Unidad</th>	
												<th class="text-center">Cant. Entregada</th>
												<th class="text-center">Cant. Disponible</th>
												<th class="text-center">Und. Disponible</th>	
												<th class="text-center">Cant. Utilizada </th>
			
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
															<input type="text" class="form-control disabled" id="cantidad{{$loop->index + 1}}" name="cantidad{{$loop->index + 1}}" disabled style="background:rgba(247, 247, 247, 0.57);" value="{{$prod->cant_sol_prd}}"/>
														</div>
														
													</td>
													<td class="nopadding" >
														<div class="form-group">
															<input type="text" class="form-control" id="cant_apr_prd{{$loop->index + 1}}" name="cant_apr_prd{{$loop->index + 1}}" value="{{$prod->cant_utl_prd}}"  placeholder="Cantidad"/>
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
												</tr>
											@endforeach
										</tbody>
								
									</table>
								</div>
								
							</div>
					</li>
					
				</ul>			
				<div class="form-group right">						
					<button type="reset"class="btn btn-danger">Borrar</button>
					<input type="hidden" class="form-control" id="boton" name="boton" value=""/>
					<button type="button" onClick="validate('guardar')" class="btn btn-default">Guardar</button>
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

