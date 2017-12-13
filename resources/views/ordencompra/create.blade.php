@extends('layouts.app')
@section('content')  

@section('x_content')

    <div class="x_panel">
	    <div class="x_title">
			<h2>Nueva Orden de Compra</h2>
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<ul class="list-unstyled timeline">
				<li>
					<div class="block ">
						<div class="tags">
							<a href="" class="tag">
								<span>Paso 1</span>
							</a>
						</div>	
						<div class="block_content">
								<h4>Espacio exclusivo para el Asistente de Gestión Administrativa<h4><br>
						
							<div class="x_content">
								<div class="panel panel-default">
									<div class="panel-heading ">
										<form class="form-horizontal form-label-left">	
										    
											<div class="col-md-2 	col-sm-6 col-xs-12">
												<label for="single_cal2">Fecha</label>
												<input type="text" class="form-control input-sm has-feedback-left " id="single_cal2" placeholder="First Name" aria-describedby="inputSuccess2Status2">
											</div>
											<div class="col-md-3 col-sm-6 col-xs-12">
												<label for="ex3">Empresa</label>
												<input class="form-control input-sm" id="ex3" type="text" value=""  readonly  style="background:rgba(247, 247, 247, 0.57);">
											</div>
											<div class="col-md-2 col-sm-6 col-xs-12">
												<label for="ex1">Nit. Empresa</label>
												<input class="form-control input-sm" id="ex1" type="text" value=""  readonly  style="background:rgba(249, 249, 249, 0.57);">
											</div>
									
											<div class="col-md-3 col-sm-6 col-xs-12">
												<label for="ex2">Realizado</label>
												<input class="form-control input-sm" id="ex2" type="text"  readonly  style="background:rgba(247, 247, 247, 0.57);">
											</div>
											<div class="col-md-2 col-sm-6 col-xs-12">
												<label for="no_ocp">No. OCP</label>
												<input class="form-control input-sm" id="no_ocp" name="no_ocp" type="text">
												@if ($errors->has('no_ocp'))
													<span class="help-block">
														<strong>{{ $errors->first('no_ocp') }}</strong>
													</span>
												@endif
											</div>
										</form>
									</div>
									
								</div>
								
								<div class="x_panel">
									<div class=" row ">	
										<div class=" col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="proveedor1">Proveedor</label>
												@if(!$proveedores->isEmpty())
													<select id="proveedor" class="form-control input-sm" name="proveedor" onchange="cambio_proveedores();" >
														<option value="" selected>Seleccionar</option>
														@foreach($proveedores as $proveedor)
															<option value="{{ $proveedor->id}}">{{ $proveedor->raz_soc}} </option>
														@endforeach
													</select>
												@endif
												<!--
												<select class="form-control input-sm " id="exampleSelect1">
													<option value="volvo" selected>Seleccionar</option>
													<option value="">ALMACENES EXITO</option>
													<option value="">MEGA TIENDAS </option>
													<option value="">PAPELERÍA TAURO </option>
													<option value="">EL GIGANTE DEL HOGAR</option>
													<option value="">SAFARI COMPUTADORES</option>
													<option value="">DISTRIBUIDORA Y PAPELERÍA VENEPLAS</option>
												</select>-->
											</div>
										</div>
										
										<div class=" col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="nit_prov">Nit. Proveedor</label>
												<input class="form-control input-sm" id="nit_prov" type="text" name="nit_prov" readonly style="background:rgba(247, 247, 247, 0.57);">
											</div>
										</div>
										
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="direccion_prov">Dirección</label>
												<input class="form-control input-sm" id="direccion_prov" name="direccion_prov" type="text" readonly style="background:rgba(247, 247, 247, 0.57);">
											</div>	
										</div>
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="ciudad_prov">Ciudad</label>
												<input class="form-control input-sm" id="ciudad_prov" name="ciudad_prov" type="text" readonly style="background:rgba(247, 247, 247, 0.57);">
											</div>
										</div>
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="telefono_prov">Teléfono</label>
												<input class="form-control input-sm" id="telefono_prov" name="telefono_prov" type="text" readonly style="background:rgba(247, 247, 247, 0.57);">
											</div>
										</div>
								
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="mail_prov">E-mail</label>
												<input class="form-control input-sm" id="mail_prov" name="mail_prov" type="text" readonly style="background:rgba(247, 247, 247, 0.57);">
											</div>
										</div>
										<div class="col-sm-3 col-xs-6">
											<label for="cnp_ocp">Concepto</label>
											<input class="form-control input-sm" value="ORDEN DE COMPRA " id="cnp_ocp" name="cnp_ocp" type="text">
											@if ($errors->has('no_ocp'))
												<span class="help-block">
													<strong>{{ $errors->first('no_ocp') }}</strong>
												</span>
											@endif
										</div>
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="aut_ocp">Autorizado por</label>
												<input class="form-control input-sm" id="aut_ocp" name="aut_ocp" type="text">
												@if ($errors->has('aut_ocp'))
													<span class="help-block">
														<strong>{{ $errors->first('aut_ocp') }}</strong>
													</span>
												@endif
											</div>
										</div>
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="form_pag">Forma de pago</label>
												<select class="form-control input-sm" id="form_pag" name="form_pag">
													<option value="" selected>Seleccionar</option>
													<option value=" CONTADO">CONTADO</option>
													<option value="CREDITO">CREDITO</option>
												</select>
												@if ($errors->has('form_pag'))
													<span class="help-block">
														<strong>{{ $errors->first('form_pag') }}</strong>
													</span>
												@endif
											</div>
										</div>
								
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="dia_cred">Dias de credito</label>
												<input class="form-control input-sm" id="dia_cred" name="dia_cred" type="text">
												@if ($errors->has('dia_cred'))
													<span class="help-block">
														<strong>{{ $errors->first('dia_cred') }}</strong>
													</span>
												@endif
											</div>
										</div>
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="tim_entr">Tiempo de entrega</label>
												<input class="form-control input-sm" id="tim_entr" name="tim_entr" type="text">
												@if ($errors->has('tim_entr'))
													<span class="help-block">
														<strong>{{ $errors->first('tim_entr') }}</strong>
													</span>
												@endif
											</div>
										</div>
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="otr_ocp">Otro</label>
												<input class="form-control input-sm" id="otr_ocp" name="otr_ocp" type="text">
												@if ($errors->has('otr_ocp'))
													<span class="help-block">
														<strong>{{ $errors->first('otr_ocp') }}</strong>
													</span>
												@endif
											</div>
										</div>
										
									</div>		
								</div>		
							</div>		
									
						</div>
																			
						<div class="panel-heading ">
							<div class=" row ">		
								<div class="col-xs-3"><br/>
									<label for="ex3">Categoria</label>
									@if(!$categorias->isEmpty())
										<select id="categorias" class="form-control input-sm" name="categorias" >
											<option value="" selected>Seleccionar</option>
											@foreach($categorias as $categoria)
												<option value="{{ $categoria->id}}">{{ $categoria->des_cat}} </option>
											@endforeach
										</select>
									@endif
								</div>
								<div class="col-xs-2"><br/>
									<h4><h4/><br>
									<button type="submit" class="btn btn-danger ">Consultar</button>
								</div>
								<div class="col-xs-3"><br/>
									<label for="ex3">Productos</label>
									<select class="form-control">
									  <option value="volvo" selected>Seleccionar</option>
									  <option value="saab">Todos</option>
									  <option value="saab">Aceite</option>
									  <option value="vw">Arepas antioqueñas precocidas </option>
									  <option value="audi" >Arroz  (bolsas de medio kilo)</option>
									  <option value="audi" >Bocadillo</option>
									</select>
								</div>
								<div class="col-xs-2"><br/>
									<h4><h4/><br>
									<button type="submit" class="btn btn-primary fa fa-download "></button>
								</div>
							</div>
							<h5>Descargar productos con solicitud de compras<h5>
						
						</div>
						
						
						<div class="panel-body ">	
							<div class="panel panel-default">
								<div class="panel-heading text-center">
									<span><strong><span class="glyphicon glyphicon-th-list"> </span> Productos</strong></span>
								</div>
								<div class="table-responsive">
									<table class="table table-bordered table-hover" id="education_fields">
										<thead>
											<tr >
												<th>#</th>
												<th><a href="/producto" title="Producto" target="_blank" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-title="Producto"></a>Producto</th>
												<th><a href="/unidad" title="Unidad" target="_blank" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-title="Unidad"></a>Unidad</th>
												<th> Cantidad</th>
												<th> IVA. Unt</th>
												<th> Val. Unitario</th>
												<th> Val. Total</th>
												<th> Vence</th>
												<th><a></a></th>	
								
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													1
												</td>								
												<td class="nopadding" >
													<div class="form-group input-sm">
														@if(!$productos->isEmpty())
															<select id="productos" class="form-control" name="productos" >
																<option value="" selected>Seleccionar</option>
																@foreach($productos as $producto)
																	<option value="{{ $producto->id}}">{{ $producto->des_prd}} </option>
																@endforeach
															</select>
														@endif
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group input-sm">
														@if(!$unidads->isEmpty())
															<select id="unidads" class="form-control" name="unidads" >
																<option value="" selected>Seleccionar</option>
																@foreach($unidads as $unidad)
																	<option value="{{ $unidad->id}}">{{ $unidad->des_und}} </option>
																@endforeach
															</select>
														@endif
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control input-sm" id="detalle1" name="detalle1" value="" placeholder="">
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control input-sm" id="Schoolname" name="Schoolname[]" value="0%" placeholder="">
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control input-sm" id="Schoolname" name="Schoolname[]" value="" placeholder="">
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control input-sm" id="Schoolname" name="Schoolname[]" value="" placeholder="">
													</div>
												</td>
												
												<td class="nopadding" >
													<input class="form-control" name="registration_date" id="registration-date" type="date">
													<span class="input-group-btn">
													</span>

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
							<small>Pulse + para agregar otro producto /  Pulse - para eliminar un producto.</small>
						
							<div class="panel-default ">
								<div class="row ">
									<div class="col-xs-9 "><br />
										<label for="obv_ocp">Obeservaciones</label><br/>
										<div class="col-md-9 col-sm-9 col-xs-12">
										  <textarea id="obv_ocp" required="required" name="obv_ocp" class="form-control col-md-7 col-xs-12"></textarea>
										@if ($errors->has('obv_ocp'))
											<span class="help-block">
												<strong>{{ $errors->first('obv_ocp') }}</strong>
											</span>
										@endif
										</div>
									</div>
									<div class="col-xs-3">
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-4 col-xs-12" align="right" for="subt_ocp">SUBTOTAL </label>
											<div class="col-md-8 col-sm-8 col-xs-12  right">
											  <input type="text" id="subt_ocp" name="subt_ocp"  required="required" class="form-control col-md-7 col-xs-12 "  readonly  style="background:rgba(247, 247, 247, 0.57);">
												@if ($errors->has('subt_ocp'))
													<span class="help-block">
														<strong>{{ $errors->first('subt_ocp') }}</strong>
													</span>
												@endif
											</div>
										</div>
									
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-4 col-xs-12 " align="right" for="iva_ocp"><br/>IVA</label>
											<div class="col-md-8 col-sm-8 col-xs-12  right">
											  <input type="text" id="iva_ocp" name="iva_ocp"  required="required" class="form-control col-md-7 col-xs-12"  readonly  style="background:rgba(247, 247, 247, 0.57);">
												@if ($errors->has('iva_ocp'))
													<span class="help-block">
														<strong>{{ $errors->first('iva_ocp') }}</strong>
													</span>
												@endif
											</div>
										</div>
								
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-4 col-xs-12" align="right" for="tol_ocp"><br/>TOTAL</label>
											<div class="col-md-8 col-sm-8 col-xs-12  right">
											  <input type="text" id="tol_ocp" name="tol_ocp"   required="required" class="form-control col-md-7 col-xs-12"  readonly  style="background:rgba(247, 247, 247, 0.57);">
											  @if ($errors->has('tol_ocp'))
													<span class="help-block">
														<strong>{{ $errors->first('tol_ocp') }}</strong>
													</span>
												@endif
											
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
						</div>
						
						
					</div>
					
				</li>
				
			</ul>
			<div class="form-group right ">	
																	
				<button type="submit" class="btn btn-danger">Deshacer</button>
				<button type="submit" class="btn btn-success">Guardar</button>
			</div>

        </div>

	</div>		
@stop
	<script>
		var producto = 1;
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
				'<option value="">Otro (Nuevo Producto)</option>'+
				'</select></td>'+
				//Detalle
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="detalle'+(producto)+'" name="detalle'+(producto)+'" value="" placeholder="Detalle"></div>'+
				'</td>'+
				//Unidades
				'<td class="nopadding" >'+
					'<select class="form-control" id="unidad'+(producto)+'" name="unidad'+(producto)+'"><option value="">Seleccionar</option></select>'+
				'</td>'+
				//Cantidad
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="cantidad'+(producto)+'" name="cantidad'+(producto)+'" value="" placeholder="Cantidad"></div>'+
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
		function remove_education_fields(rid) {
			$('.removeproducto'+rid).remove()
			producto--;
			$("#cantproductos").val(producto);  
		}
	   
	// proveedor
		function cambio_proveedores() {
		   $.get("{{ url('ordencompra/cargarproveedor')}}", 
				{
					option: $('#proveedor').val(),
				}, 
				function(data) {
					$('#nit_prov').val(data.num_doc);
					$('#direccion_prov').val(data.dir_prov);
					$('#ciudad_prov').val(data.ciu_prov);
					$('#telefono_prov').val(data.tel_fij);
					$('#mail_prov').val(data.dir_mail);
			});
	   }
	
	// Producto
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

	</script> 
@stop
