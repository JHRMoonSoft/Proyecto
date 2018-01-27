@extends('layouts.app')
@section('content')  

@section('x_content')

    <div class="x_panel">
	    <div class="x_title">
			<h2>Alma</h2>
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/requisicion/') }}">
				{{ csrf_field() }}
				<ul class="list-unstyled timeline">
					<li>
						<div class="block">
							<div class="tags">
							<a href="" class="tag">
								<span>Paso 2</span>
							</a>
							</div>
							<input type="hidden" class="form-control" id="cantproductos" name="cantproductos" value="1"/>
							<input type="hidden" class="form-control" id="cantproveedores" name="cantproveedores" value="1"/>
							<div class="block_content">
								<h2 class="title">
									<br/>
									<a>Registrar lista de productos</a>
								</h2>
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
												<th class="text-center">Nuevo Producto</th>													
												<th class="text-center">Unidad</th>	
												<th class="text-center">Cantidad</th>
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
															@foreach($productos as $producto)
																<option value="{{ $producto->id}}">{{ $producto->des_prd}} </option>
															@endforeach
														@endif
														<option value="0">Otro (Nuevo Producto)</option>
													</select>
													@if ($errors->has('producto1'))
														<span class="help-block">
															<strong>{{ $errors->first('producto1') }}</strong>
														</span>
													@endif
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="detalle1" name="detalle1" placeholder="Detalle" />
														@if ($errors->has('detalle1'))
															<span class="help-block">
																<strong>{{ $errors->first('detalle1') }}</strong>
															</span>
														@endif
													</div>
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
												</td>
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
					</li>
					@endpermission
				</ul>
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
						text = text + '<option value="'+ element.id +'">' + element.des_prd + '</option>';
					});
				text = text +
				'<option value="0">Otro (Nuevo Producto)</option>'+
				'</select></td>'+
				//Detalle
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="detalle'+(producto)+'" name="detalle'+(producto)+'" placeholder="Detalle" readonly /></div>'+
				'</td>'+
				//Unidades
				'<td class="nopadding" >'+
					'<select class="form-control" id="unidad'+(producto)+'" name="unidad'+(producto)+'" required><option value="">Seleccionar</option></select>'+
				'</td>'+
				//Cantidad
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="cantidad'+(producto)+'" name="cantidad'+(producto)+'" value="" placeholder="Cantidad" required /></div>'+
				'</td>'+	
				//Botones
				 '<td class="nopadding" >'+
					'<div class="input-group-btn"><button class="btn btn-sm btn-danger glyphicon glyphicon-minus btn-xs" type="button" onclick="remove_education_fields('+ producto +');">'+
						'<span aria-hidden="true"></span>'+
					'</button></div>'+
				'</td></tr>';
			divtest.innerHTML = text;
			objTo.appendChild(divtest)
			$("#cantproductos").val(producto);  
		}
		function mas_proveedor(proveedores) {
			proveedor++;
			var objTo = document.getElementById('education_fields2')
			var divtest = document.createElement("tbody");
			divtest.setAttribute("class", "form-group tr removeproveedor"+proveedor);
			var rdiv = 'removeproveedor'+proveedor;
			var text = '<tr><td>' + (proveedor) +'</td>'+
				//Productos
				'<td class="nopadding" >'+
				'<select class="form-control" id="proveedor'+(proveedor)+'" name="proveedor'+(proveedor)+'" onchange="cambio_proveedores('+(proveedor)+');">'+
				'<option value="" selected>Seleccionar</option>';
				$.each(proveedores, function(index, element) {
						text = text + '<option value="'+ element.id +'">' + element.raz_soc + '</option>';
					});
				text = text +
				'<option value="0">Otro</option>' +
				'</select></td>'+
				//Nombre
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="nombre'+(proveedor)+'" name="nombre'+(proveedor)+'" value=""></div>'+
				'</td>'+
				//Teléfono
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="telefono'+(proveedor)+'" name="telefono'+(proveedor)+'" value=""></div>'+
				'</td>'+
				//Botones
				 '<td class="nopadding" >'+
					'<div class="input-group-btn"><button class="btn btn-sm btn-danger glyphicon glyphicon-minus btn-xs" type="button" onclick="remove_proveedor('+ proveedor +');">'+
						'<span aria-hidden="true"></span>'+
					'</button></div>'+
				'</td></tr>';
			divtest.innerHTML = text;
			objTo.appendChild(divtest)
			$("#cantproveedores").val(proveedor);  
		}
		function remove_education_fields(rid) {
			$('.removeproducto'+rid).remove()
			producto--;
			$("#cantproductos").val(producto);  
		}
		
		function remove_proveedor(rid) {
			$('.removeproveedor'+rid).remove()
			proveedor--;
			$("#cantproveedores").val(proveedor);  
		}
	   
	   function cambio_productos(rid) {
		   var opt = $('#producto'+rid).val();
		   $.get("{{ url('requisicion/cargarunidadesproducto')}}", 
				{
					option: opt,
					
				}, 
				function(data) {
					var model = $('#unidad'+rid);
					if (opt == 0){
						$('#detalle'+rid).attr('readonly', false);
					}
					else{
						$('#detalle'+rid).attr('readonly', true);
					}
					model.empty();
					model.append("<option value='' selected>Seleccionar</option>");
						$.each(data, function(index, element) {
							model.append("<option value='"+ element.id +"'>" + element.des_und + "</option>");
					});
			});
	   }
	   
	   function cambio_proveedores(rid) {
		   $.get("{{ url('requisicion/cargarproveedor')}}", 
				{
					option: $('#proveedor'+rid).val(),
				}, 
				function(data) {
					
					if(!jQuery.isEmptyObject(data)) {
						$('#nombre'+rid).val(data.raz_soc);
						$('#nombre'+rid).attr('readonly', true);
						$('#telefono'+rid).val(data.tel_fij);
						$('#telefono'+rid).attr('readonly', true);
					}
					else{
						$('#nombre'+rid).val(data.raz_soc);
						$('#nombre'+rid).attr('readonly', false);
						$('#telefono'+rid).val(data.tel_fij);
						$('#telefono'+rid).attr('readonly', false);
					}
			});
	   }

	</script>
	
@stop