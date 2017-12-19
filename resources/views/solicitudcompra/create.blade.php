@extends('layouts.app')
@section('content')  


@section('x_content')

    <div class="x_panel">
	    <div class="x_title">
			<h2>Nueva Solicitud de Compra</h2>
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
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/solicitudcompra/') }}">
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
						
							<h5>Espacio exclusivo para el Asistente de Gestión Administrativa<h5><br/><br/>
								
							<div class="row ">
								<div class="form-group"><br>
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="asn_scp">Asunto</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input type="text" id="asn_scp"name="asn_scp"  value="SOLICITUD DE COMPRA"  required="required" class="form-control col-md-7 col-xs-12">
										@if ($errors->has('asn_scp'))
											<span class="help-block">
												<strong>{{ $errors->first('asn_scp') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="obv_scp">Observacion	</label>																			
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <textarea type="text" id="obv_scp"  name="obv_scp"rows="5" required="required" class="form-control col-md-7 col-xs-12"></textarea>
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
							  <div class="col-xs-6 col-md-4">
								<div class="input-group col-xs-12 ">
										<select class="form-control" id="educationDate" name="educationDate[]">
											<option value="" selected>Seleccionar</option>
											<option name="" value="">Unidad inventario </option>
											<option name="" value="">Unidad empaque </option>
											
										</select>
									</div>
									<h5> Unidad consolidar <h5>
							  </div>
							  <div class="col-xs-6 col-md-4">
								<div class="input-group  col-xs-12">
									  <div id="reportrange" class="pull-center" style="background: #fff; cursor: pointer; padding: 8px 10px; border: 1px solid #ccc">
										<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
										<span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
									  </div>
									  <h5> Fecha consolidar <h5>
									</div>
							  </div>
							  <div class="col-xs-6 col-md-4">
							  
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
											  <li>
													<a href="#">
														<span class="glyphicon glyphicon-user"></span>
														<span class="label-icon">Search By User</span>
													</a>
												</li>
												<li>
													<a href="#">
													<span class="glyphicon glyphicon-book"></span>
													<span class="label-icon">Search By Organization</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<h5>   RQS autorizadas<h5>
								</div>
								<!-- Consolidar RQS-->
							  
							  </div>
							</div>		
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
												<th><a href="/producto" title="Producto" target="_blank" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-title="Producto"></a>Producto</th>
												<th><a href="/unidad" title="Producto" target="_blank" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-title="Producto"></a>Unidad</th>
												<th>Cantidad</th>
												<th> Disponible</th>
												<th><a></a></th>
								
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													1
												</td>
							
												<td class="nopadding" >
													<div class="form-group">
														<select id="producto1" class="form-control" name="producto1" onchange="cambio_productos(1);">
															@if(!$productos->isEmpty())
																<option value="" selected>Seleccionar</option>
																@foreach($productos as $producto)
																	<option value="{{ $producto->id}}">{{ $producto->des_prd}} </option>
																@endforeach
															@endif
														</select>
														
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<select class="form-control" id="unidad1" name="unidad1">
															<option value="" selected>Seleccionar</option>
														</select>
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control" id="cantidad1" name="cantidad1" value="" placeholder="Cantidad">
													</div>
												</td>
												<td>
													<input type="text" class="form-control" id="disponible1" name="disponible1" disabled/>
												</td>
												<td class="nopadding" >
													<div class="input-group-btn">
														<button class="btn btn-sm btn-primary glyphicon glyphicon-plus btn-xs" type="button"  onclick="education_fields2({{$productos}});"> <span  aria-hidden="true"></span> </button>
													</div>
												</td>
											</tr>
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
																		
					<button type="submit" class="btn btn-danger">Deshacer</button>
					<button type="submit" class="btn btn-default">Guardar</button>
					<button type="submit" class="btn btn-success">Enviar</button>
				</div>
			</form>
        </div>
	
		 
	</div>		
@stop
	<script>
		var producto = 1;
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

	</script> 
@stop
