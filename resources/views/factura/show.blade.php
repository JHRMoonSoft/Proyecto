@extends('layouts.app')
@section('content')  

@section('x_content')

    <div class="x_panel">
	    <div class="x_title"> 
			<h2>Nueva Factura de Compras</h2>
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
		<form class="form-horizontal" role="form" method="POST" action="{{ url('/factura/') }}">
			{{ csrf_field() }}
			<ul class="list-unstyled timeline">
				<li>
					<div class="block ">
						<div class="tags">
							<a href="" class="tag">
								<span>Paso 1</span>
							</a>
						</div>	
						<div class="block_content">
								<h4>Espacio exclusivo para el Asistente de Gestión Administrativa</h4><br>
								<input type="hidden" id="empre_id" readonly style="background:rgba(247, 247, 247, 0.57);""empre_id" value="{{ $configuracion->id }}" />
								<input type="hidden" id="cantproductos" readonly style="background:rgba(247, 247, 247, 0.57);""cantproductos" value="1"/>
							<div class="x_content">
								<div class="panel-default">
									<div class="x_panel panel-heading ">
										<div class="form-horizontal form-label-left">
											<div class="col-md-2 	col-sm-6 col-xs-12">
												 <label for="single_cal2">Fecha</label>
												<input type="text" class="form-control input-sm has-feedback-left " id="single_cal2" placeholder="First Name" aria-describedby="inputSuccess2Status2">
												
											</div>
											<div class="col-md-3 col-sm-6 col-xs-12">
												<label for="raz_soc">Empresa</label>
												<input class="form-control input-sm" id="raz_soc" readonly style="background:rgba(247, 247, 247, 0.57);""raz_soc" type="text" readonly value="{{ $configuracion->raz_soc }}"/>
											</div>
											<div class="col-md-2 col-sm-6 col-xs-12">
												<label for="ex1">Nit. Empresa</label>
												<input class="form-control input-sm" id="num_doc" readonly style="background:rgba(247, 247, 247, 0.57);""num_doc" type="text" readonly value="{{ $configuracion->num_doc }}" />
											</div>
									
											<div class="col-md-3 col-sm-6 col-xs-12">
												<label for="nom_rea">Realizado</label>
												<input class="form-control input-sm" id="nom_rea" readonly style="background:rgba(247, 247, 247, 0.57);""nom_rea" type="text" value="{{ Auth::user()->nom_usr . ' ' . Auth::user()->ape_usr }}" readonly />
											
											</div>
											<div class="col-md-2 col-sm-6 col-xs-12">
												<label for="no_fact">No. Factura</label>
												<input class="form-control input-sm" id="no_fact" readonly style="background:rgba(247, 247, 247, 0.57);""no_fact" type="text" />
												@if ($errors->has('no_fact'))
													<span class="help-block">
														<strong>{{ $errors->first('no_fact') }}</strong>
													</span>
												@endif
											</div>
										</div>
									</div>
									
								</div>
							
							</div>
							<div class="x_content">
								<div class="x_panel">
									<div class=" row ">	
										<div class=" col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="prov_id">Proveedor</label>
												<input class="form-control input-sm" id="prov_id" type="text" readonly style="background:rgba(247, 247, 247, 0.57);""prov_id" value="{{$factura->proveedor->raz_soc}}" readonly style="background:rgba(247, 247, 247, 0.57);" />
											</div>
										</div>
										
										<div class=" col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="nit_prov">Nit. Proveedor</label>
												<input class="form-control input-sm" id="nit_prov" type="text" readonly style="background:rgba(247, 247, 247, 0.57);""nit_prov" value="{{$factura->proveedor->num_doc}}" readonly style="background:rgba(247, 247, 247, 0.57);" />
											</div>
										</div>
										
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="direccion_prov">Dirección</label>
												<input class="form-control input-sm" id="direccion_prov" readonly style="background:rgba(247, 247, 247, 0.57);""direccion_prov" type="text" value="{{$factura->proveedor->dir_prov}}" readonly style="background:rgba(247, 247, 247, 0.57);" />
											</div>	
										</div>
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="ciudad_prov">Ciudad</label>
												<input class="form-control input-sm" id="ciudad_prov" readonly style="background:rgba(247, 247, 247, 0.57);""ciudad_prov" type="text" readonly value="{{$factura->proveedor->ciu_prov}}" style="background:rgba(247, 247, 247, 0.57);" />
											</div>
										</div>
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="telefono_prov">Teléfono</label>
												<input class="form-control input-sm" id="telefono_prov" readonly style="background:rgba(247, 247, 247, 0.57);""telefono_prov" type="text" readonly value="{{$factura->proveedor->tel_fij}}" style="background:rgba(247, 247, 247, 0.57);" />
											</div>
										</div>
								
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="mail_prov">E-mail</label>
												<input class="form-control input-sm" id="mail_prov" readonly style="background:rgba(247, 247, 247, 0.57);""mail_prov" type="text" value="{{$factura->proveedor->dir_mail}}" readonly style="background:rgba(247, 247, 247, 0.57);" />
											</div>
										</div>
										<div class="col-sm-3 col-xs-6">
											<label for="cnp_ocp">Concepto</label>
											<input class="form-control input-sm" value="{{$factura->cnp_fact}}" id="cnp_fact" readonly style="background:rgba(247, 247, 247, 0.57);""cnp_fact" type="text" required />
											@if ($errors->has('cnp_fact'))
												<span class="help-block">
													<strong>{{ $errors->first('cnp_fact') }}</strong>
												</span>
											@endif
										</div>
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="comp_fact">Comprado por</label>
												<input class="form-control input-sm" id="comp_fact" readonly style="background:rgba(247, 247, 247, 0.57);""comp_fact" type="text" value="{{$factura->comp_fact}}" />
												@if ($errors->has('comp_fact'))
													<span class="help-block">
														<strong>{{ $errors->first('comp_fact') }}</strong>
													</span>
												@endif
											</div>
										</div>
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="form_pag">Forma de pago</label>
												<input class="form-control input-sm" id="form_pag" readonly style="background:rgba(247, 247, 247, 0.57);""form_pag" value="{{$factura->form_pag}}" required  readonly />
											</div>
										</div>
								
										<div class="col-sm-3 col-xs-6">
											<div class="form-group">
												<label for="dia_cred">Dias de credito</label>
												<input class="form-control input-sm" id="dia_cred" readonly style="background:rgba(247, 247, 247, 0.57);""dia_cred" type="text" >
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
												<input class="form-control input-sm" id="tim_entr" readonly style="background:rgba(247, 247, 247, 0.57);""tim_entr" type="text" required>
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
												<input class="form-control input-sm" id="otr_ocp" readonly style="background:rgba(247, 247, 247, 0.57);""otr_ocp" type="text" >
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
							</div>
						</div>
						<div class="panel-body ">	
							<div class="panel panel-default">
								<div class="panel-heading text-center">
									<span><strong><span class="glyphicon glyphicon-th-list"> </span> Productos</strong></span>
									 <button type="button" class="btn btn-success btn-xs left "data-toggle="modal" data-target=".registro" >Registro OCP</button>
									<a  href="" class="btn btn-default  btn-xs right" role="button"><i class="glyphicon glyphicon-refresh " aria-hidden="true"></i></a>
								</div>
								<div class="table-responsive">
									<table class="table table-bordered table-hover" id="education_fields">
										<thead>
											<tr >
												<th>#</th>
												<th>Producto</th>
												<th>Unidad</th>
												<th>Cantidad</th>
												<th>IVA. Unt (%)</th>
												<th>Val. Unitario</th>
												<th>Val. Total</th>
											</tr>
										</thead>
										@foreach($factura->productosordencompra as $prod)
											<tbody>
												<tr>
													<td>
														{{$loop->index + 1}}
														<input type="hidden" id="ordencompra{{$loop->index + 1}}" readonly style="background:rgba(247, 247, 247, 0.57);""ordencompra{{$loop->index + 1}}" value="{{$prod->id}}"/>
													</td>								
													<td class="nopadding" >
														<div class="form-group input-sm">
															{{$prod->producto->des_prd}}
														</div>
													</td>
													<td class="nopadding" >
														<div class="form-group input-sm">
															{{$prod->producto->unidad->des_und}}
														</div>
													</td>
													<td class="nopadding" >
														<div class="form-group">
															{{$prod->cant_prd_fact}}
														</div>
													</td>
													<td class="nopadding" >
														<div class="form-group">
															{{$prod->iva_unt_fact}}
														</div>
													</td>
													<td class="nopadding" >
														<div class="form-group">
															{{$prod->val_unt_fact}}
														</div>
													</td>
													<td class="nopadding" >
														<div class="form-group">
															{{$prod->val_tol_fact}}
														</div>
													</td>
												</tr>
											</tbody>
										@endforeach
									</table>
								</div>
						
							</div>
							<small>Pulse + para agregar otro producto /  Pulse - para eliminar un producto.</small>
						
							<div class="panel-default ">
								<div class="row ">
									<div class="col-xs-9 "><br />
										<label for="obv_fact">Obeservaciones</label><br/>
										<div class="col-md-9 col-sm-9 col-xs-12">
										  <textarea id="obv_fact"  readonly style="background:rgba(247, 247, 247, 0.57);""obv_fact" class="form-control col-md-7 col-xs-12"></textarea>
										@if ($errors->has('obv_fact'))
											<span class="help-block">
												<strong>{{ $errors->first('obv_fact') }}</strong>
											</span>
										@endif
										</div>
									</div>
									<div class="col-xs-3">
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-4 col-xs-12" align="right" for="subt_fact">SUBTOTAL </label>
											<div class="col-md-8 col-sm-8 col-xs-12  right">
											  <input type="text" id="subt_fact" readonly style="background:rgba(247, 247, 247, 0.57);""subt_fact"  required="required" class="form-control col-md-7 col-xs-12 "  readonly  style="background:rgba(247, 247, 247, 0.57);">
												@if ($errors->has('subt_fact'))
													<span class="help-block">
														<strong>{{ $errors->first('subt_fact') }}</strong>
													</span>
												@endif
											</div>
										</div>
									
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-4 col-xs-12 " align="right" for="iva_fact"><br/>IVA</label>
											<div class="col-md-8 col-sm-8 col-xs-12  right">
											  <input type="text" id="iva_fact" readonly style="background:rgba(247, 247, 247, 0.57);""iva_fact"  required="required" class="form-control col-md-7 col-xs-12"  readonly  style="background:rgba(247, 247, 247, 0.57);">
												@if ($errors->has('iva_fact'))
													<span class="help-block">
														<strong>{{ $errors->first('iva_fact') }}</strong>
													</span>
												@endif
											</div>
										</div>
								
										<div class="form-group">
											<label class="control-label col-md-4 col-sm-4 col-xs-12" align="right" for="tol_fact"><br/>TOTAL</label>
											<div class="col-md-8 col-sm-8 col-xs-12  right">
											  <input type="text" id="tol_fact" readonly style="background:rgba(247, 247, 247, 0.57);""tol_fact"   required="required" class="form-control col-md-7 col-xs-12"  readonly  style="background:rgba(247, 247, 247, 0.57);">
											  @if ($errors->has('tol_fact'))
													<span class="help-block">
														<strong>{{ $errors->first('tol_fact') }}</strong>
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
		</form>
        </div>
		
		<!-- registro modal -->		  

		  <div class="modal fade registro" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
					  </button>
					  <h4 class="modal-title" id="myModalLabel2">Registro Consolidado | Orden de Compras  </h4>
					</div>
					<div class="modal-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover" id="rqs" readonly style="background:rgba(247, 247, 247, 0.57);""rqs" >
								<thead>
									<tr>
										<th> Código  </th>
										<th> Fecha </th>
										<th> Asunto </th>
										<th> Solicitante</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
		    </div>
			</div>
		  
		<!-- /modals -->

	</div>		
@stop
	<script>
		var producto = 1;
		var primer_producto_cargado = false;
		function education_fields(productos) {
			producto++;
			var objTo = document.getElementById('education_fields')
			var divtest = document.createElement("tbody");
			divtest.setAttribute("class", "form-group tr removeproducto"+producto);
			var rdiv = 'removeproducto'+producto;
			var text = '<tr><td>'+
				(producto)+
				'<input type="hidden" id="ordencompra'+(producto)+'" readonly style="background:rgba(247, 247, 247, 0.57);""ordencompra'+(producto)+'" value="0"/>'+
				'</td>'+
				//Productos
				'<td class="nopadding" >'+
				'<select class="form-control input-sm" id="producto'+(producto)+'" readonly style="background:rgba(247, 247, 247, 0.57);""producto'+(producto)+'" onchange="cambio_productos('+(producto)+');">'+
				'<option value="" selected>Seleccionar</option>';
				$.each(productos, function(index, element) {
						text = text + '<option value="'+ element.id +'">' + element.des_prd + '</option>';
					});
				text = text +
				'</select></td>'+
				//Unidades
				'<td class="nopadding" >'+
					'<select class="form-control input-sm" id="unidad'+(producto)+'" readonly style="background:rgba(247, 247, 247, 0.57);""unidad'+(producto)+'"><option value="">Seleccionar</option></select>'+
				'</td>'+
				//Cantidad
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control input-sm" id="cantidad'+(producto)+'" readonly style="background:rgba(247, 247, 247, 0.57);""cantidad'+(producto)+'" onchange="calculo_iva_valor('+(producto)+');" required /></div>'+
				'</td>'+	
				//IVA
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control input-sm" id="ivaunitario'+(producto)+'" readonly style="background:rgba(247, 247, 247, 0.57);""ivaunitario'+(producto)+'" onchange="calculo_iva_valor('+(producto)+');" required /></div>'+
				'</td>'+
				//Valor Unitario
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control input-sm" id="valorunitario'+(producto)+'" readonly style="background:rgba(247, 247, 247, 0.57);""valorunitario'+(producto)+'" onchange="calculo_iva_valor('+(producto)+');" required /></div>'+
				'</td>'+
				//Valor Total
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control input-sm" id="valortotal'+(producto)+'" readonly style="background:rgba(247, 247, 247, 0.57);""valortotal'+(producto)+'" readonly required /></div>'+
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
					option: $('#prov_id').val(),
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
		if(rid == 1)
			primer_producto_cargado = true;
		$('#ordencompra'+rid).val(0);
	}
	
	function cargarproductosdeproveedor() {
		   $.get("{{ url('factura/cargarproveedorocp')}}", 
				{
					option: $('#prov_id').val(),
					
				}, 
				function(data) {
					var model = $('#doc_ocp');
					model.empty();
					model.append("<option value='' selected>Seleccionar</option>");
					model.append("<option value='0'>Todos</option>");
						$.each(data, function(index, element) {
							model.append("<option value='"+ element.id +"'> Orden de Compra #" + element.id + "</option>");
					});
			});
	   }
	
	function cargarproductosseleccionados(productos) {
		   $.get("{{ url('factura/cargarproductosocp')}}", 
				{
					option: $('#doc_ocp').val(),
					prov: $('#prov_id').val(),
				}, 
				function(data) {
					$.each(data, function(index, element) {
						if(producto == 1 && !primer_producto_cargado){
							$('#producto1').val(element.producto.id);
							$('#cantidad1').val(element.cant_sol_prd);
							$('#ordencompra1').val(element.ord_comp_id);
							$('#ivaunitario1').val(element.iva_unt_fact);
							$('#valorunitario1').val(element.val_unt_fact);
							$('#valortotal1').val(element.val_tol_fact);
							
							$.get("{{ url('requisicion/cargarunidadesproducto')}}", 
								{
									option: $('#producto1').val(),
									
								}, 
								function(data) {
									var model = $('#unidad1');
									model.empty();
									model.append("<option value='' selected>Seleccionar</option>");
										$.each(data, function(index, element2) {
											var text_append="<option value='"+ element2.id +"'";
											if(element.unidad_solicitada_factura.id == element2.id){
												text_append = text_append + " selected ";
											}
											text_append = text_append + ">" + element2.des_und + "</option>"
											model.append(text_append);
										});
								});
							primer_producto_cargado = true;
							calculo_iva_valor(1);
						}
						else{
							producto++;
							var objTo = document.getElementById('education_fields')
							var divtest = document.createElement("tbody");
							divtest.setAttribute("class", "form-group tr removeproducto"+producto);
							var rdiv = 'removeproducto'+producto;
							var text = '<tr><td>' +
							(producto) +
							'<input type="hidden" id="prodsolcompra'+(producto)+'" readonly style="background:rgba(247, 247, 247, 0.57);""prodsolcompra'+(producto)+'" />'+
							'</td>'+
							//Productos
							'<td class="nopadding" >'+
							'<select class="form-control" id="producto'+(producto)+'" readonly style="background:rgba(247, 247, 247, 0.57);""producto'+(producto)+'" onchange="cambio_productos('+(producto)+');" required>'+
							'<option value="" selected>Seleccionar</option>';
							$.each(productos, function(index, element) {
									text = text + '<option value="'+ element.id +'">' + element.des_prd + '</option>';
								});
							text = text +
							'</select></td>'+
							//Unidades
							'<td class="nopadding" >'+
								'<select class="form-control" id="unidad'+(producto)+'" readonly style="background:rgba(247, 247, 247, 0.57);""unidad'+(producto)+'" required><option value="">Seleccionar</option></select>'+
							'</td>'+
							//Cantidad
							'<td class="nopadding" >'+
								'<div class="form-group"><input type="text" class="form-control" id="cantidad'+(producto)+'" readonly style="background:rgba(247, 247, 247, 0.57);""cantidad'+(producto)+'" onchange="calculo_iva_valor('+(producto)+');" required /></div>'+
							'</td>'+	
							//IVA
							'<td class="nopadding" >'+
								'<div class="form-group"><input type="text" class="form-control" id="ivaunitario'+(producto)+'" readonly style="background:rgba(247, 247, 247, 0.57);""ivaunitario'+(producto)+'" onchange="calculo_iva_valor('+(producto)+');" required /></div>'+
							'</td>'+
							//Valor Unitario
							'<td class="nopadding" >'+
								'<div class="form-group"><input type="text" class="form-control" id="valorunitario'+(producto)+'" readonly style="background:rgba(247, 247, 247, 0.57);""valorunitario'+(producto)+'" onchange="calculo_iva_valor('+(producto)+');" required /></div>'+
							'</td>'+
							//Valor Total
							'<td class="nopadding" >'+
								'<div class="form-group"><input type="text" class="form-control" id="valortotal'+(producto)+'" readonly style="background:rgba(247, 247, 247, 0.57);""valortotal'+(producto)+'" readonly required /></div>'+
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
							$('#cantidad'+producto).val(element.cant_prd_fact);
							$('#ivaunitario'+producto).val(element.iva_unt_fact);
							$('#valorunitario'+producto).val(element.val_unt_fact);
							$('#valortotal'+producto).val(element.val_tol_fact);
							$('#ordencompra'+producto).val(element.ord_comp_id);
							var model = $('#unidad'+producto);
							model.empty();
							model.append("<option value='' selected>Seleccionar</option>");
								$.each(element.producto.unidades, function(index, element2) {
									var text_append="<option value='"+ element2.id + "'>" + element2.des_und + "</option>"
									model.append(text_append);
								});
							$('#unidad'+producto).val(element.unidad_solicitada_factura.id);
							calculo_iva_valor(producto);
						}
					});
				});
			}

	function calculo_iva_valor(rid) {
		var iva_und = $('#ivaunitario'+rid).val();
		if (!iva_und){
			iva_und = 0;
		}
		var val_und = $('#valorunitario'+rid).val();
		if (!val_und){
			val_und = 0;
		}
		var cnt = $('#cantidad'+rid).val();
		if (!cnt){
			cnt = 1;
			$('#cantidad'+rid).val(cnt);
		}
		var val_tot = parseFloat(cnt) * (parseFloat(val_und) + parseFloat(val_und * (iva_und/100)));
		$('#valortotal'+rid).val(val_tot);
		var subt_fact = 0;
		var iva_fact = 0;
		var tol_fact = 0;
		for(i = 1; i <= producto; i++){
			subt_fact = parseFloat(subt_fact) + parseFloat($('#cantidad'+i).val() * $('#valorunitario'+i).val());
			iva_fact = parseFloat(iva_fact) + parseFloat($('#cantidad'+i).val() * ($('#valorunitario'+i).val() * ($('#ivaunitario'+i).val()/100)));
			tol_fact = parseFloat(tol_fact) + parseFloat($('#valortotal'+i).val());
		}
		$('#subt_fact').val(subt_fact);
		$('#iva_fact').val(iva_fact);
		$('#tol_fact').val(tol_fact);
		
	}		
	   
	</script> 
@stop
