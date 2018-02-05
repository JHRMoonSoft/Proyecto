@extends('layouts.app')
@section('content')  

@section('x_content')

    <div class="x_panel">
	    <div class="x_title">
			<h2>Ingresar productos almacén</h2>
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/almacen/') }}">
				{{ csrf_field() }}
				
						<div class="block_content">
						
							<h5>Espacio exclusivo para el Asistente de Gestión Administrativa</h5><br/><br/>
								
							<div class="row ">
								<div class="form-group"><br>
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Asunto</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input type="text" id=""name="I"  value="INGRESO ALMACÉN"    class="form-control col-md-7 col-xs-12">
									
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="obs_reg">Observación	</label>																			
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <textarea type="text" id="obs_reg"  name="obs_reg"rows="5" required="required" class="form-control col-md-7 col-xs-12"></textarea>
										@if ($errors->has('obs_reg'))
											<span class="help-block">
												<strong>{{ $errors->first('obs_reg') }}</strong>
											</span>
										@endif
									</div><br>
								</div>
							</div>
						</div>
				
						<div class="block">
							<input type="hidden" class="form-control" id="cantproductos" name="cantproductos" value="1"/>
							<input type="hidden" class="form-control" id="accion_id" name="accion_id" value="1"/>
							<div class="block_content">
							
							
								<br/>
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<span><strong><span class="glyphicon glyphicon-th-list"> </span> Productos</strong></span>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered table-hover" id="education_fields">
										<thead>
											<tr >
												<th class="text-center">#</th>
												<th class="text-center">Producto</th>												
												<th class="text-center">Unidad</th>	
												<th class="text-center">Cantidad</th><!--
												<th class="text-center">Lote</th>
												<th class="text-center">Vence</th>-->
												<th class="text-center"><a></a></th>
								
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													1
												</td>
												<td class="nopadding" >
													
													<select id="producto1" class="form-control" name="producto1" onchange="cambio_productos(1);" required>
														<option value="" selected>Seleccionar</option>
														@if(!$productos->isEmpty())
															@foreach($productos as $prod)
																<option value="{{ $prod->producto->id}}">{{ $prod->producto->des_prd}} </option>
															@endforeach
														@endif
													</select>
													@if ($errors->has('producto1'))
														<span class="help-block">
															<strong>{{ $errors->first('producto1') }}</strong>
														</span>
													@endif
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
														<input type="text" class="form-control" id="cantidad1" name="cantidad1" value="" placeholder="Cantidad" required />
													</div>
													@if ($errors->has('cantidad1'))
														<span class="help-block">
															<strong>{{ $errors->first('cantidad1') }}</strong>
														</span>
													@endif
												</td><!--
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="lote1" name="lote1" value="" placeholder="Lote" />
													</div>
													@if ($errors->has('lote1'))
														<span class="help-block">
															<strong>{{ $errors->first('lote1') }}</strong>
														</span>
													@endif
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input class="form-control " name="vence1" id="vence1" type="date"  />
														<span class="input-group-btn"></span>
													</div>
													@if ($errors->has('vence1'))
														<span class="help-block">
															<strong>{{ $errors->first('vence1') }}</strong>
														</span>
													@endif
												</td>-->
																					
												<td class="nopadding" >
													<div class="input-group-btn">
														<button class="btn btn-sm btn-primary glyphicon glyphicon-plus btn-xs" type="button"  onclick="education_fields({{$productos}});"> <span  aria-hidden="true"></span> </button>
													</div>
												</td>
											</tr>
										</tbody>
								
									</table>
									</div>
									
								</div>
								@if ($errors->has('cantproductos'))
									<span class="help-block">
										<strong>{{ $errors->first('cantproductos') }}</strong>
									</span>
								@endif
								<small>Pulse + para agregar otro producto /  Pulse - para eliminar un producto.</small>
								<br />
							</div>
						</div>
			
				<div class="form-group right ">						
					<button type="reset"class="btn btn-danger">Borrar</button>	
						<button type="submit" class="btn btn-success">Guardar</button>
				</div>
			</form>
        </div>
		
	</div>		
@stop

@stop
@section('postscripts')
	<script>
		var producto = 1;
		var proveedor = 1;
		function education_fields(productos) {
			producto++;
			var objTo = document.getElementById('education_fields')
			var divtest = document.createElement("tbody");
			divtest.setAttribute("class", "form-group tr removeproducto"+producto);
			var rdiv = 'removeproducto'+producto;
			var text = '<tr><td>' + (producto) +'</td>'+
				//Productos
				'<td class="nopadding" >'+
				'<select class="form-control" id="producto'+(producto)+'" name="producto'+(producto)+'" onchange="cambio_productos('+(producto)+');" required>'+
				'<option value="" selected>Seleccionar</option>';
				$.each(productos, function(index, element) {
						text = text + '<option value="'+ element.producto.id +'">' + element.producto.des_prd + '</option>';
					});
				text = text +
				'<option value="0">Otro (Nuevo Producto)</option>'+
				'</select></td>'+
				//Unidades
				'<td class="nopadding" >'+
					'<select class="form-control" id="unidad'+(producto)+'" name="unidad'+(producto)+'" required><option value="">Seleccionar</option></select>'+
				'</td>'+
				//Cantidad
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="cantidad'+(producto)+'" name="cantidad'+(producto)+'" value="" placeholder="Cantidad" required /></div>'+
				'</td>'+/*
				//Lote
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="lote'+(producto)+'" name="lote'+(producto)+'" value="" placeholder="Lote" /></div>'+
				'</td>'+
				//Vence
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="date" class="form-control " id="vence'+(producto)+'" name="vence'+(producto)+'" /></div>'+
				'</td>'+*/
				//Botones
				 '<td class="nopadding" >'+
					'<div class="input-group-btn"><button class="btn btn-sm btn-danger glyphicon glyphicon-minus btn-xs " type="button" onclick="remove_education_fields('+ producto +');">'+
						'<span aria-hidden="true"></span>'+
					'</button></div>'+
				'</td></tr>';
			divtest.innerHTML = text;
			objTo.appendChild(divtest)
			$("#cantproductos").val(producto);  
		}

		function remove_education_fields(rid) {
			$('.removeproducto'+rid).remove()
			producto--;
			$("#cantproductos").val(producto);  
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

	</script>
	
@stop