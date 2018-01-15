@extends('layouts.app')
@section('content')  


@section('x_content')

    <div class="x_panel">
	    <div class="x_title">
			<h2>EditarSolicitud de Compras</h2>
			<a  href="{{ url('/solicitudcompra/'.$solicitudcompra->id) }}"class="btn btn-danger  right" role="button">Ver </a>
			<a  href="{{ url('/solicitudcompra') }}" class="btn btn-default  right" role="button"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp&nbsp&nbspVolver al listado </a>
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
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/solicitudcompra/'. $solicitudcompra->id) }}">
				<input type="hidden" name="_method" value="PUT">
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
						
							<h5>Espacio exclusivo para el Asistente de Gestión Administrativa</h5><br/><br/>
								
							<div class="row ">
								<div class="form-group"><br>
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="asn_scp">Asunto</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input type="text" id="asn_scp"name="asn_scp"  value="{{$solicitudcompra->asn_scp}}"  required="required" class="form-control col-md-7 col-xs-12">
										@if ($errors->has('asn_scp'))
											<span class="help-block">
												<strong>{{ $errors->first('asn_scp') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="obv_scp">Observación	</label>																			
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <textarea type="text" id="obv_scp"  name="obv_scp" rows="5" required="required" class="form-control col-md-7 col-xs-12">{{$solicitudcompra->obv_scp}}</textarea>
										@if ($errors->has('obv_scp'))
											<span class="help-block">
												<strong>{{ $errors->first('obv_scp') }}</strong>
											</span>
										@endif
									</div><br>
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
						<div class="block_content"><br />
							<input type="hidden" class="form-control" id="cantproductos" name="cantproductos" value="1"/>
							<h2 class="title">
								<a>Registrar Productos</a><br/>
							</h2><br />
						
							<br />
							<div class="row">
							  <div class="col-xs-6 col-md-5">
								<div class="input-group col-xs-12 col-md-12">
									  <div id="fechaRQS" class="pull-center" style="background: #fff; cursor: pointer; padding: 8px 10px; border: 1px solid #ccc">
										<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
										<span></span> <b class="caret"></b>
									  </div>
									  <h5> Fecha consolidar </h5>
								</div>
							  </div>
							  <div class="col-xs-6 col-md-7">
							  
									<!--RQS Pendientes-->
								<div class="col-xs-12 ">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Buscar">
										<div class="input-group-btn" >
											<button type="button" class="btn btn-search btn-danger">
												<span class="glyphicon glyphicon-search"></span>
												<span class="label-icon">Buscar</span>
											</button>
											<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu " role="menu">
												@if(!$rqsAutorizadas->isEmpty())
													@foreach($rqsAutorizadas as $rqsAutorizada)
														<li>
															<a href="#">
																<span class="glyphicon glyphicon-book"></span>
																<span class="label-icon">{{ $rqsAutorizada->id }} - {{ $rqsAutorizada->jst_rqs }}</span>
															</a>
														</li>
													@endforeach
												@endif
											</ul>
										</div>
									</div>
									<h5>   RQS autorizadas</h5>
								</div>
								<!-- Consolidar RQS-->
							  
							  </div>
							</div>		
							<br />
							<input type="hidden" id="todoslosproductos" name="todoslosproductos" value="{{$productos}}">
							<div class="panel panel-default">
								<div class="panel-heading text-center">
									<span><strong><span class="glyphicon glyphicon-th-list"> </span> Productos</strong></span>
								</div>
								<div class="table-responsive">
									<table class="table table-bordered table-hover" id="education_fields2">
										<thead>
											<tr >
												<th>#</th>
												<th><a href="/producto" title="Producto" target="_blank" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-title="Producto"></a>Producto</th>
												<th><a href="/unidad" title="Producto" target="_blank" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-title="Producto"></a>Unidad</th>
												<th>Cantidad</th>
												<th> Disponible</th>
												<th><a></a></th>
								
											</tr>
										</thead>
										<tbody>
											@foreach($solicitudcompra->productossolicitudcompra as $prodsolcompra)
												<tr>
													<td>
														{{$loop->index + 1}}
													</td>
									        
													<td class="nopadding" >
														<div class="form-group">
															<select id="producto{{$loop->index + 1}}" class="form-control" name="producto{{$loop->index + 1}}" onchange="cambio_productos(1);">
																@if(!$productos->isEmpty())
																	<option value="" selected>Seleccionar</option>
																	@foreach($productos as $producto)
																		<option value="{{$producto->id}}" @if($producto->id == $prodsolcompra->prod_id) selected @endif>{{ $producto->des_prd}} </option>
																	@endforeach
																@endif
															</select>
															
														</div>
													</td>
													<td class="nopadding" >
														<div class="form-group">
															<select class="form-control" id="unidad{{$loop->index + 1}}" name="unidad{{$loop->index + 1}}">
																<option value="" selected>Seleccionar</option>
																@foreach($prodsolcompra->producto->unidades as $und)
																	<option name="" value="{{$und->id}}" @if($und->id == $prodsolcompra->unidad_solicitada->id)selected="selected"@endif>{{$und->des_und}}</option>
																@endforeach
															</select>
														</div>
													</td>
													<td class="nopadding" >
														<div class="form-group">
															<input type="text" class="form-control" id="cantidad{{$loop->index + 1}}" name="cantidad{{$loop->index + 1}}" value="{{$prodsolcompra->cant_sol_prd}}" placeholder="Cantidad">
														</div>
													</td>
													<td>
														<input type="text" class="form-control" id="disponible{{$loop->index + 1}}" name="disponible{{$loop->index + 1}}" disabled/>
													</td>
													<td class="nopadding" >
														<div class="input-group-btn">
															<button class="btn btn-sm btn-primary glyphicon glyphicon-plus btn-xs" type="button"  onclick="education_fields2({{$productos}});"> <span  aria-hidden="true"></span> </button>
														</div>
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
							<small>Pulse + para agregar otro producto /  Pulse - para eliminar un producto.</small>
							<br />	
						</div>

					  </div>
					</li>
				</ul>
				<div class="form-group right ">	
					<small>Pulse + para agregar otro producto /  Pulse - para eliminar un producto.</small>
					<br />	
				</div>
		</div>
				</li>
			</ul>
			<div class="form-group right ">	
																	
				<button type="submit" class="btn btn-danger">Deshacer</button>
				<button type="submit" class="btn btn-default">Guardar</button>
				<button type="submit" class="btn btn-success">Enviar</button>
			</div>

        </div>
		
		<!-- Categoria modal -->		  

		  <div class="modal fade categoria" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Nueva Categoria</h4>
				</div>
				<div class="modal-body">
					<label class="control-label " for="first-name"> Categoria</label>
					<div class="form-group input-group ">
						<input name="multiple[]" class="form-control ">
						<span class="input-group-btn"><button type="button" class="btn btn-primary btn-add">+</button></span>
					</div>
					<small>Pulse + para agregar otra categoria /  Pulse - para eliminar una categoria.</small>
				</div>
				<div class="modal-footer"><!--
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				  <button type="reset" class="btn btn-danger">Deshacer</button>
				  <input type="submit" class="btn btn-primary">Guardar</input>

				</div>
			</form>
        </div>
	
		 
	</div>		
@stop
@section('postscripts')  
	<script>
		var producto = 1;
		var primer_producto_cargado = false;
		function education_fields2(productos) {
			producto++;
			var objTo = document.getElementById('education_fields2')
			var divtest = document.createElement("tbody");
			divtest.setAttribute("class", "form-group tr removeclass"+producto);
			var rdiv = 'removeclass'+producto;
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
					'<div class="form-group"><input type="text" class="form-control" id="cantidad'+(producto)+'" name="cantidad'+(producto)+'" value="" placeholder="Cantidad"/></div>'+
				'</td>'+				
				//Disponible
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="disponible'+(producto)+'" name="disponible'+(producto)+'" disabled/></div>'+
				'</td>'+
				
				//Botones
				 '<td class="nopadding" >'+
					'<div class="input-group-btn"><button class="btn btn-sm btn-danger glyphicon glyphicon-minus btn-xs" type="button" onclick="remove_education_fields('+ producto +');">'+
						'<span aria-hidden="true"></span>'+
					'</button></div>'+
				'</td></tr>';
				divtest.innerHTML = text;
				//'<tr><td>' + (producto) + '</td><td><div class="form-group "><select class="form-control"><option value="" selected>Seleccionar</option><option value="">Taller de Cocina</option><option value="">Papeleria</option><option value="" >Didacticos</option><option value="" >Aseo</option></select></div></td><td class="nopadding" ><select class="form-control" id="educationDate" name="educationDate[]"><option value="" selected>Seleccionar</option><option name="" value="">Aceite</option><option value="">Arepas antioqueñas precocidas </option><option value="" >Arroz  (bolsas de medio kilo)</option><option value="" >Bocadillo</option></select></td><td class="nopadding" ><div class="form-group"><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="Detalle"></div></td><td class="nopadding" ><select class="form-control" id="educationDate" name="educationDate[]"><option value="" selected>Seleccionar</option><option name="" value="">Barra</option><option name="" value="">Bloque</option><option name="" value="">Bolsa</option><option name="" value="">Botella</option><option name="" value="">Caja</option><option name="" value="">Frasco</option><option value="">Lata</option><option value="">Paquete</option><option value="">Pote</option><option value="">Tarro</option><option value="">Tubo</option><option value="">Vaso</option><option name="" value="">Unidad</option><option value="">Kg</option><option value="">Kilo</option><option value="">Litro</option><option value="">Lonjas</option></select></td><td>1 Caja de 5 UND</td><td class="nopadding" ><div class="form-group"><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="Cantidad"></div></td><td class="nopadding" ><div class="input-group-btn"><button class="btn btn-sm btn-danger glyphicon glyphicon-minus btn-xs" type="button" onclick="remove_education_fields2('+ producto +');"> <span  aria-hidden="true"></span> </button></div></td></tr>';
				objTo.appendChild(divtest)
			
		}
	   function remove_education_fields2(rid) {
		   $('.removeclass'+rid).remove()
		   
		   producto--;
	   }
	   
	   function cambio_productos(rid) {
		   $.get("{{ url('solicitudcompra/cargarunidadesproducto')}}", 
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
			
			$.get("{{ url('solicitudcompra/cargardisponibleproducto')}}", 
				{
					option: $('#producto'+rid).val(),
					
				}, 
				function(data) {
					if(data){
						if(data.cnt_prd == null){
							document.getElementById("disponible"+rid).value = '0 ' + data.und;
						}
						else{
							document.getElementById("disponible"+rid).value = data.cnt_prd + ' ' + data.und;
						}
						
					}
					
					//model.setAttribute('value', );
			});
	   }
		var start = moment().subtract(29, 'days');
		var end = moment();
		function cb(start, end) {
			$('#fechaRQS span').html(start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY'));
		}
		$('#fechaRQS').daterangepicker({
			"locale": {
				"format": "MM/DD/YYYY",
				"separator": " - ",
				"applyLabel": "Aplicar",
				"cancelLabel": "Cancelar",
				"fromLabel": "Desde",
				"toLabel": "Hasta",
				"customRangeLabel": "Rango Personalizado",
				"weekLabel": "S",
				"daysOfWeek": [
					"Dom",
					"Lun",
					"Mar",
					"Mie",
					"Jue",
					"Vie",
					"Sab"
				],
				"monthNames": [
					"Enero",
					"Febrero",
					"Marzo",
					"Abril",
					"Mayo",
					"Junio",
					"Julio",
					"Augosto",
					"Septiembre",
					"Octubre",
					"Noviembre",
					"Diciembre"
				],
				"firstDay": 1
			},

			"alwaysShowCalendars": true,
			startDate: start,
			endDate: end,
			ranges: {
			'Hoy': [moment(), moment()],
			'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			'Últimos 7 Días': [moment().subtract(6, 'days'), moment()],
			'Últimos 30 días': [moment().subtract(29, 'days'), moment()],
			'Este mes': [moment().startOf('month'), moment().endOf('month')],
			'Mes anterior': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			}
		}, cb);
		cb(start, end);
		$('#fechaRQS').on('apply.daterangepicker', function(ev, picker) {
			$.get("{{ url('solicitudcompra/buscarrqsautorizadaporfecha')}}", 
				{
					start: picker.startDate.format('YYYY-MM-DD'),
					end: picker.endDate.format('YYYY-MM-DD'),
					
				}, 
				function(data) {
					if(data){
						$.each(data, function(index, element) {
							if(producto == 1 && !primer_producto_cargado){
								$('#producto1').val(element.producto.id);
								$('#cantidad1').val(element.cant_sol_prd);
								primer_producto_cargado = true;
							}
							else{
								producto++;
								var productos = $('#todoslosproductos').val(); // Ver como puedo traer todos los productos!!!!!
								var objTo = document.getElementById('education_fields2');
								var divtest = document.createElement("tbody");
								divtest.setAttribute("class", "form-group tr removeproducto"+producto);
								var rdiv = 'removeproducto'+producto;
								var text = '<tr><td>' +
								(producto) +
								'</td>'+
								//Productos
								'<td class="nopadding" >'+
									'<select class="form-control" id="producto'+(producto)+'" name="producto'+(producto)+'">'+
										'<option value="" selected>Seleccionar</option>';
											$.each(productos, function(index, element) {
													text = text + '<option value="'+ element.id +'">' + element.des_prd + '</option>';
												});
									text = text +
									'</select></td>'+
								//Unidades
								'<td class="nopadding" >'+
									'<select class="form-control" id="unidad'+(producto)+'" name="unidad'+(producto)+'">'+
										'<option value="">Seleccionar</option>';
								text = text +
									'</select></td>'+
								'</td>'+
								//Cantidad
								'<td class="nopadding" >'+
									'<div class="form-group"><input type="text" class="form-control" id="cantidad'+(producto)+'" name="cantidad'+(producto)+'" value="" placeholder="Cantidad"/></div>'+
								'</td>'+				
								//Disponible
								'<td class="nopadding" >'+
									'<div class="form-group"><input type="text" class="form-control" id="disponible'+(producto)+'" name="disponible'+(producto)+'" disabled/></div>'+
								'</td>'+
								
								//Botones
								'<td class="nopadding" >'+
									'<div class="input-group-btn"><button class="btn btn-sm btn-danger glyphicon glyphicon-minus btn-xs" type="button" onclick="remove_education_fields('+ producto +');">'+
										'<span aria-hidden="true"></span>'+
									'</button></div>'+
								'</td></tr>';
								divtest.innerHTML = text;
								objTo.appendChild(divtest);
								$("#cantproductos").val(producto);  
								$('#producto'+producto).val(element.producto.id);
								$('#cantidad'+producto).val(element.cant_sol_prd);
								$.get("{{ url('solicitudcompra/cargarunidadesproducto')}}", 
								{
									option: $('#producto'+producto).val(),
									
								}, 
								function(data) {
									var model = $('#unidad'+producto);
									model.empty();
									model.append("<option value='' selected>Seleccionar</option>");
										$.each(data, function(index, element) {
											model.append("<option value='"+ element.id +"'>" + element.des_und + "</option>");
									});
								});
								
								$.get("{{ url('solicitudcompra/cargardisponibleproducto')}}", 
								{
									option: $('#producto'+producto).val(),
									
								}, 
								function(data) {
									if(data){
										if(data.cnt_prd == null){
											document.getElementById("disponible"+producto).value = '0 ' + data.und;
										}
										else{
											document.getElementById("disponible"+producto).value = data.cnt_prd + ' ' + data.und;
										}
										
									}
								});
								$('#producto'+producto)[0].setAttribute('onchange', 'onchange=cambio_productos('+(producto)+');"");
								
							}
						});
					
					}
					else{
						alert('Nada');
					}
					
					//model.setAttribute('value', );
			});
			
		});
	</script> 
@stop
