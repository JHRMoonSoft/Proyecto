@extends('layouts.app')
@section('content')  

@section('x_content')

    <div class="x_panel">
	    <div class="x_title">
			<h2>Nueva Requisición Interna</h2>
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
								<span>Paso 1</span>
							</a>
							</div>
							<div class="block_content">
								<h2 class="title">
									<a>Registrar la RQS</a>
								</h2>
								<div class="panel-body message">
										<div class="form-group"><br><br>
											<label for="to" class="col-sm-2 control-label">Para:</label>
											<div class="col-sm-10">
												<select id="rol_rqs" class="form-control" name="rol_rqs">
													<option value="">Seleccionar</option>
													<option value="{{ $rol->id}}" selected>{{ $rol->display_name }} </option>
												</select>
											</div>
										</div>
										<input type="hidden" value="{{ $estado->id }}" class="form-control select2-offscreen" id="est_rqs" name="est_rqs"/>
										<input type="hidden" value="{{ $acciones->id }}" class="form-control select2-offscreen" id="acc_rqs" name="acc_rqs"/>
										<div class="form-group">
											<label for="asn_rqs" class="col-sm-2 control-label">Asunto:</label>
											<div class="col-sm-10">
												<input type="text" value="{{ $estado->asu_est_req }}" class="form-control select2-offscreen" id="asn_rqs" name="asn_rqs" tabindex="-1" readonly/>
											</div>
										</div>
										<div class="form-group">
											<label for="jst_rqs" class="col-sm-2 control-label">Justificación:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control select2-offscreen" id="jst_rqs" name="jst_rqs" tabindex="-1">
											</div>
										</div>
										<div class="form-group">
											<label for="obs_rqs" class="col-sm-2 control-label">Observación:</label>
											<div class="col-sm-10">
												<!--
												<div id="alerts"></div>
												<div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#asn_rqs">
													<div class="btn-group">
														<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
														<ul class="dropdown-menu">
														</ul>
													</div>
													<div class="btn-group">
														<a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
														<ul class="dropdown-menu">
															<li>
															<a data-edit="fontSize 5">
																<p style="font-size:17px">Huge</p>
															</a>
															</li>
															<li>
															<a data-edit="fontSize 3">
																<p style="font-size:14px">Normal</p>
															</a>
															</li>
															<li>
															<a data-edit="fontSize 1">
																<p style="font-size:11px">Small</p>
															</a>
															</li>
														</ul>
													</div>
			
													<div class="btn-group">
														<a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
														<a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
														<a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
														<a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
													</div>
			
													<div class="btn-group">
														<a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
														<a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
														<a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
														<a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
													</div>
			
													<div class="btn-group">
														<a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
														<a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
														<a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
														<a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
													</div>
													<div class="btn-group">
														<a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
														<a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
													</div>
												</div>
												-->
												<!-- <div id="asn_rqs" name="asn_rqs" class="editor-wrapper"></div> -->
												<textarea id="obs_rqs" name="obs_rqs" class="editor-wrapper" style="width:100%" ></textarea>
												<br/>
											</div>
										</div>
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
							<input type="hidden" class="form-control" id="cantproductos" name="cantproductos" value="1"/>
							<input type="hidden" class="form-control" id="cantproveedores" name="cantproveedores" value="1"/>
							<div class="block_content">
								<h2 class="title">
									<br/>
									<a>Registrar los productos</a>
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
												<th class="text-center">Unidad</th>	
												<th class="text-center">Cantidad</th>								
												<th class="text-center">Detalle del producto</th>	
												<th class="text-center"><a></a></th>
								
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													1
												</td>
												<td class="nopadding" >
													
													<select id="producto1" class="form-control" name="producto1" onchange="cambio_productos(1);">
														<option value="" selected>Seleccionar</option>
														@if(!$productos->isEmpty())
															@foreach($productos as $producto)
																<option value="{{ $producto->id}}">{{ $producto->des_prd}} </option>
															@endforeach
														@endif
														<option value="">Otro (Llenar Detalle)</option>
													</select>
												
												</td>
												<td class="nopadding" >
													<select class="form-control" id="unidad1" name="unidad1">
														<option value="" selected>Seleccionar</option>
													</select>
												</td>
												
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="cantidad1" name="cantidad1" value="" placeholder="Cantidad">
													</div>
												</td>
												
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="detalle1" name="detalle1" value="" placeholder="Detalle">
													</div>
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
					<li>
						<div class="block">
							<div class="tags">
							<a href="" class="tag">
								<span>Paso 3</span>
							</a>
							</div>
							<div class="block_content">
								<h2 class="title"><br />
									<a>Proveedores sugeridos</a>
								</h2>
								<br/>
								<div class="panel panel-default">
								<div class="panel-heading text-center">
									<span><strong><span class="glyphicon glyphicon-th-list"> </span> Proveedores</strong></span>
								</div>
								<div class="table-responsive">
									<table class="table table-bordered table-hover" id="education_fields2">
									<thead>
										<tr >
											<th>#</th>
											<th>Proveedor </th>
											<th> Nombre  Proveedor </th>
											<th>Teléfono </th>	
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
											1
											</td>
											<td>
												
												<select id="proveedor1" class="form-control" name="proveedor1" onchange="cambio_proveedores(1);">
													<option value="" selected>Seleccionar</option>
													@if(!$proveedores->isEmpty())
														@foreach($proveedores as $proveedor)
															<option value="{{ $proveedor->id}}">{{ $proveedor->raz_soc}} </option>
														@endforeach
													@endif
													<option value="0">Otro</option>
												</select>
												
											</td>
											<td class="nopadding" >
												<div class="form-group">
													<input type="text" class="form-control" id="nombre1" name="nombre1" value="">
												</div>
											</td>
											<td class="nopadding" >
												<div class="form-group">
													<input type="text" class="form-control" id="telefono1" name="telefono1" value="">
												</div>
											</td>
											
											<td class="nopadding" >
												<div class="input-group-btn">
													<button class="btn btn-sm btn-primary glyphicon glyphicon-plus btn-xs" type="button"  onclick="mas_proveedor({{$proveedores}});"> <span  aria-hidden="true"></span> </button>
												</div>
											</td>
										</tr>
									</tbody>
							
								</table>
								</div>
							</div>
							<br/>
							</div>
						</div>
					</li>
				</ul>
				<div class="form-group right ">						
					<button type="submit" class="btn btn-danger">Deshacer</button>
					<button type="submit" class="btn btn-default">Guardar</button>
					<button type="submit" class="btn btn-success">Enviar</button>
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
				'<select class="form-control" id="producto'+(producto)+'" name="producto'+(producto)+'" onchange="cambio_productos('+(producto)+');">'+
				'<option value="" selected>Seleccionar</option>';
				$.each(productos, function(index, element) {
						text = text + '<option value="'+ element.id +'">' + element.des_prd + '</option>';
					});
				text = text +
				'</select></td>'+
				//Unidades
				'<td class="nopadding" >'+
					'<select class="form-control" id="unidad'+(producto)+'" name="unidad'+(producto)+'"><option value="">Seleccionar</option></select>'+
				'</td>'+
				//Cantidad
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="cantidad'+(producto)+'" name="cantidad'+(producto)+'" value="" placeholder="Cantidad"></div>'+
				'</td>'+				
				//Detalle
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="detalle'+(producto)+'" name="detalle'+(producto)+'" value="" placeholder="Detalle"></div>'+
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
				-'<option value="0">Otro</option>' +
				'</select></td>'+
				//Cantidad
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="nombre'+(proveedor)+'" name="cantidad'+(proveedor)+'" value=""></div>'+
				'</td>'+
				//Unidades
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="telefono'+(proveedor)+'" name="cantidad'+(proveedor)+'" value=""></div>'+
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
		   $.get("{{ url('requisicion/cargarunidadesproducto')}}", 
				{
					option: $('#producto'+rid).val(),
					
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
	   
	   function cambio_proveedores(rid) {
		   $.get("{{ url('requisicion/cargarproveedor')}}", 
				{
					option: $('#proveedor'+rid).val(),
				}, 
				function(data) {
					alert(data);
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