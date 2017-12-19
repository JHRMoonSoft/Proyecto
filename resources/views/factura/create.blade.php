@extends('layouts.app')
@section('content')  

@section('x_content')

    <div class="x_panel">
	    <div class="x_title">
			<h2>Nueva Factura de Compra</h2>
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
													<label for="raz_soc">Empresa</label>
													<input class="form-control input-sm" id="raz_soc" name="raz_soc" type="text" readonly value="{{ $configuracion->raz_soc }}"/>
												</div>
												<div class="col-md-2 col-sm-6 col-xs-12">
													<label for="ex1">Nit. Empresa</label>
													<input class="form-control input-sm" id="num_doc" name="num_doc" type="text" readonly value="{{ $configuracion->num_doc }}" />
												</div>
										
												<div class="col-md-3 col-sm-6 col-xs-12">
													<label for="nom_rea">Realizado</label>
													<input class="form-control input-sm" id="nom_rea" name="nom_rea" type="text" value="{{ Auth::user()->nom_usr . ' ' . Auth::user()->ape_usr }}" readonly />
												
												</div>
												<div class="col-md-2 col-sm-6 col-xs-12">
													<label for="no_fact">No. Factura</label>
													<input class="form-control input-sm" id="no_fact" name="no_fact" type="text">
													@if ($errors->has('no_fact'))
														<span class="help-block">
															<strong>{{ $errors->first('no_fact') }}</strong>
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
												<label for="cnp_fact">Concepto</label>
												<input class="form-control input-sm" value="FACTURA DE COMPRA" id="cnp_fact" name="cnp_fact"  type="text">
												@if ($errors->has('cnp_fact'))
														<span class="help-block">
															<strong>{{ $errors->first('cnp_fact') }}</strong>
														</span>
												@endif
											</div>
											<div class="col-sm-3 col-xs-6">
												<div class="form-group">
													<label for="comp_fact">Comprado por</label>
													<input class="form-control input-sm" id="comp_fact" name="comp_fact" type="text">
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
													<select class="form-control input-sm" id="form_pag" name="form_pag">
														<option value=" " selected>Seleccionar</option>
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
													@if ($errors->has('no_fact'))
														<span class="help-block">
															<strong>{{ $errors->first('no_fact') }}</strong>
														</span>
													@endif
												</div>
											</div>
											<div class="col-sm-3 col-xs-6">
												<div class="form-group">
													<label for="otr_fact">Otro</label>
													<input class="form-control input-sm" id="otr_fact" name="otr_fact" type="text">
													@if ($errors->has('otr_fact'))
														<span class="help-block">
															<strong>{{ $errors->first('otr_fact') }}</strong>
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
										<label for="doc_ocp">Documento OCP</label>
										<select class="form-control " id="doc_ocp" name="doc_ocp">
											<option value="" selected>Seleccionar</option>											
										</select>
								</div>
								<div class="col-xs-4"><br/>
									<h4><h4/><br>
									<button type="submit" class="btn btn-primary   ">Consultar</button>
									<button type="submit" class="btn btn-primary fa fa-download "></button>
								</div>
							</div>
						
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
												<th>Producto</th>
												<th>Unidad</th>
												<th>Cantidad</th>
												<th>IVA. Unt</th>
												<th>Val. Unitario</th>
												<th>Val. Total</th>
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
														<select id="producto1" class="form-control" name="producto1" onchange="cambio_productos(1);" required>
															<option value="" selected>Seleccionar</option>
															@if(!$productos->isEmpty())
																@foreach($productos as $producto)
																	<option value="{{ $producto->id}}">{{ $producto->des_prd}} </option>
																@endforeach
															@endif
														</select>
														@if ($errors->has('producto1'))
															<span class="help-block">
																<strong>{{ $errors->first('producto1') }}</strong>
															</span>
														@endif
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group input-sm">
															<select class="form-control" id="unidad1" name="unidad1" required>
															<option value="" selected>Seleccionar</option>
														</select>
														@if ($errors->has('unidad1'))
															<span class="help-block">
																<strong>{{ $errors->first('unidad1') }}</strong>
															</span>
														@endif
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control input-sm" id="cantidad1" name="cantidad1" placeholder="" onchange="calculo_iva_valor(1);" required />
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control input-sm" id="ivaunitario1" name="ivaunitario1" value="0" placeholder="" onchange="calculo_iva_valor(1);" />
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control input-sm" id="valorunitario1" name="valorunitario1"  placeholder="" onchange="calculo_iva_valor(1);" required />
													</div>
												</td>
												<td class="nopadding" >
													<div class="form-group">
														<input type="text" class="form-control input-sm" id="valortotal1" name="valortotal1" placeholder="" readonly required />
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
							<small>Pulse + para agregar otro producto /  Pulse - para eliminar un producto.</small>
							
							<div class="panel-default ">
								<div class="row">
									<div class="col-xs-9 col-md-9"><br />
										<label for="obv_fact">Obeservaciones</label><br/>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<textarea id="obv_fact" required="required" name="obv_fact" class="form-control col-md-7 col-xs-12"></textarea>
											@if ($errors->has('obv_fact'))
												<span class="help-block">
													<strong>{{ $errors->first('obv_fact') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="col-xs-3 col-md-3">
										<div class="form-group">
											<label class="control-label col-xs-12 col-sm-3 col-md-3" align="right" for="subt_fact">SUBTOTAL</label>
											<div class="col-md-8 col-sm-8 col-xs-12  right">
											  <input type="text" id="subt_fact" name="subt_fact"  required="required" class="form-control col-md-7 col-xs-12 " readonly />
												@if ($errors->has('subt_fact'))
													<span class="help-block">
														<strong>{{ $errors->first('subt_fact') }}</strong>
													</span>
												@endif
											</div>
										</div>
									
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12 " align="right" for="iva_fact"><br/>IVA</label>
											<div class="col-md-8 col-sm-8 col-xs-12  right">
											  <input type="text" id="iva_fact" name="iva_fact"   required="required" class="form-control col-md-7 col-xs-12" readonly />
												@if ($errors->has('iva_fact'))
													<span class="help-block">
														<strong>{{ $errors->first('iva_fact') }}</strong>
													</span>
												@endif
											</div>
										</div>
								
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" align="right" for="tol_fact"><br/>TOTAL</label>
											<div class="col-md-8 col-sm-8 col-xs-12  right">
											  <input type="text" id="tot_fact" name="tot_fact"  required="required" class="form-control col-md-7 col-xs-12" readonly />
												@if ($errors->has('tot_fact'))
													<span class="help-block">
														<strong>{{ $errors->first('tot_fact') }}</strong>
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
				<button type="submit" class="btn btn-default">Guardar</button>
				<button type="submit" class="btn btn-success"data-toggle="modal" data-target=".almacen" >Almacén</button>
			</div>

        </div>
		
		  <!-- Almacen modal -->		  

		  <div class="modal fade almacen" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Ingreso Almacén</h4>
				</div>
				<div class="modal-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover" id="education_fields2">
							<thead>
								<tr >
									<th>#</th>
									<th> Fecha </th>
									<th> Categoría </th>
									<th> Producto </th>
									<th> Descripcion </th>
									<th> Unidad Almacén </th>
									<th> Cantidad</th>	
					
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										1
									</td>		
									<td class="nopadding" >
										<div class="form-group">
											<input type="text" class="form-control input-sm" value="11-02-2017" id="Schoolname" name="Schoolname[]" value="" placeholder="">
											<div class="col-md-2"><div class="panel"></div></div>
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
										<div class="form-group">
											<input type="text" class="form-control input-sm" id="Schoolname" name="Schoolname[]" value="" placeholder="">
										</div>
									</td>
								</tr>
							</tbody>
				  
						</table>
					</div>
				</div>
				<div class="modal-footer"><!--
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				  <button type="close" class="btn btn-primary  "class="close" data-dismiss="modal" aria-label="Close">Finalizar </button>
				</div>

			  </div>
			</div>
		  </div>
		  <!-- /modals -->
		
	</div>		
	
@stop
    <script>
		var room = 1;
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
				'</select></td>'+
				//Unidades
				'<td class="nopadding" >'+
					'<select class="form-control" id="unidad'+(producto)+'" name="unidad'+(producto)+'"><option value="">Seleccionar</option></select>'+
				'</td>'+
				//Cantidad
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="cantidad'+(producto)+'" name="cantidad'+(producto)+'" onchange="calculo_iva_valor('+(producto)+');" /></div>'+
				'</td>'+	
				//IVA
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="ivaunitario'+(producto)+'" name="ivaunitario'+(producto)+'" onchange="calculo_iva_valor('+(producto)+');" /></div>'+
				'</td>'+
				//Valor Unitario
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="valorunitario'+(producto)+'" name="valorunitario'+(producto)+'" onchange="calculo_iva_valor('+(producto)+');" /></div>'+
				'</td>'+
				//Valor Total
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="valortotal'+(producto)+'" name="valortotal'+(producto)+'" readonly /></div>'+
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
			var tot_fact = 0;
			for(i = 1; i <= producto; i++){
				subt_fact = parseFloat(subt_fact) + parseFloat($('#cantidad'+i).val() * $('#valorunitario'+i).val());
				iva_fact = parseFloat(iva_fact) + parseFloat($('#cantidad'+i).val() * ($('#valorunitario'+i).val() * ($('#ivaunitario'+i).val()/100)));
				tot_fact = parseFloat(tot_fact) + parseFloat($('#valortotal'+i).val());
			}
			$('#subt_fact').val(subt_fact);
			$('#iva_fact').val(iva_fact);
			$('#tot_fact').val(tot_fact);
			
		}
	   
	</script> 
@stop
