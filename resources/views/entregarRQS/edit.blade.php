@extends('layouts.app')
@section('content')  

  
@section('x_content') 
 
    <div class="x_panel"> 
	    <div class="x_title">
			<h2>Entregar Requisición Interna</h2>
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
					<div class="block">
						<div class="tags">
							<a href="" class="tag">
								<span>Paso 1</span>
							</a>
						</div>
						<div class="block_content">
							<h2 class="title">
								<a>Espacio exclusivo para entregar los elementos solicitados</a>
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
														<input type="text" class="form-control " id="cant_entr_prd{{$loop->index + 1}}" name="cant_entr_prd{{$loop->index + 1}}"  value="{{$prod->cant_entr_prd}}" onchange="calculo_diferencia_entrega(this.value, {{$loop->index + 1}});" />
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="cant_dif_prd{{$loop->index + 1}}" name="cant_dif_prd{{$loop->index + 1}}" value="{{$prod->cant_dif_prd}}" readonly />
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

@section('postscripts')
     <script>
	 
		function validate(valor){
			$('#boton').val(valor);
			document.getElementById("formulario").submit();
		}
		
		function calculo_diferencia_entrega(valor, rid) {
			var cant_apr = $('#cant_apr_prd'+rid).val();
			var cant_entr = valor;
			var cant_dif = 0;
			if (!cant_entr){
				alert('Digita un valor.');
				cant_entr = 0;
			}
			else if(cant_entr > cant_apr){
				alert('La cantidad entregada no puede superar la autorizada.');
				cant_entr = 0;
			}
			else if(cant_entr < 0){
				alert('La cantidad entregada debe ser un valor válido.');
				cant_entr = 0;
			}
			else{
				cant_dif = cant_apr - cant_entr;
			}
			$('#cant_entr_prd'+rid).val(cant_entr);
			$('#cant_dif_prd'+rid).val(cant_dif);
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
@stop

