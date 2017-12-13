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
													<label for="ex3">Empresa</label>
													<input class="form-control input-sm" id="ex3" type="text" readonly  style="background:#fff;">
												</div>
												<div class="col-md-2 col-sm-6 col-xs-12">
													<label for="ex1">Nit. Empresa</label>
													<input class="form-control input-sm" id="ex1" type="text" readonly  style="background:#fff;">
												</div>
										
												<div class="col-md-3 col-sm-6 col-xs-12">
													<label for="ex2">Realizado</label>
													<input class="form-control input-sm" id="ex2" type="text" readonly  style="background:#fff;">
												
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
										<label for="ex3">Documento OCP</label>
										<select class="form-control " id="exampleSelect1">
											<option value="volvo " selected>Seleccionar</option>
											<option value="volvo" selected>Seleccionar</option>
											<option value="saab">Orden de compra 0283</option>
											<option value="saab">Orden de compra 0284</option>
											<option value="vw">Orden de compra 0282</option>
											<option value="audi" >Orden de compra 0245)</option>
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
									<table class="table table-bordered table-hover" id="education_fields2">
										<thead>
											<tr >
												<th>#</th>
												<th><a href="/producto" title="Producto" target="_blank" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-title="Producto"></a>Producto</th>
												<th><a href="/unidad" title="Unidad" target="_blank" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-title="Unidad"></a>Unidad</th>
												<th> Cantidad</th>
												<th> IVA. Unt</th>
												<th> Val. Unitario</th>
												<th> Val. Total</th>
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
														<input type="text" class="form-control input-sm" id="Schoolname" name="Schoolname[]" value="" placeholder="">
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
													<div class="input-group-btn">
														<button class="btn btn-sm btn-primary glyphicon glyphicon-plus btn-xs" type="button"  onclick="education_fields2();"> <span  aria-hidden="true"></span> </button>
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
									<div class="col-xs-3">
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" align="right" for="subt_fact">SUBTOTAL</label>
											<div class="col-md-8 col-sm-8 col-xs-12  right">
											  <input type="text" id="subt_fact" name="subt_fact"  required="required" class="form-control col-md-7 col-xs-12 " readonly  style="background:#fff;">
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
											  <input type="text" id="iva_fact" name="iva_fact"   required="required" class="form-control col-md-7 col-xs-12" readonly  style="background:#fff;">
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
											  <input type="text" id="tol_fact" name="tol_fact"  required="required" class="form-control col-md-7 col-xs-12" readonly  style="background:#fff;">
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
		function education_fields2() {
		 
			room++;
			var objTo = document.getElementById('education_fields2')
			var divtest = document.createElement("tbody");
			divtest.setAttribute("class", "form-group tr removeclass"+room);
			var rdiv = 'removeclass'+room;
			divtest.innerHTML = '<tr><td>' + (room) + '</td><td class="nopadding" ><select class="form-control input-sm" id="educationDate" name="educationDate[]"><option value="" selected>Seleccionar</option><option name="" value="">Aceite</option><option value="">Arepas antioqueñas precocidas </option><option value="" >Arroz  (bolsas de medio kilo)</option><option value="" >Bocadillo</option></select></td><td class="nopadding" ><select class="form-control input-sm" id="educationDate" name="educationDate[]"><option value="" selected>Seleccionar</option><option name="" value="">Barra</option><option name="" value="">Bloque</option><option name="" value="">Bolsa</option><option name="" value="">Botella</option><option name="" value="">Caja</option><option name="" value="">Frasco</option><option value="">Lata</option><option value="">Paquete</option><option value="">Pote</option><option value="">Tarro</option><option value="">Tubo</option><option value="">Vaso</option><option name="" value="">Unidad</option><option value="">Kg</option><option value="">Kilo</option><option value="">Litro</option><option value="">Lonjas</option></select></td><td class="nopadding" ><div class="form-group"><input type="text" class="form-control input-sm" id="Schoolname" name="Schoolname[]" value="" placeholder=""></div></td><td class="nopadding" ><div class="form-group"><input type="text" class="form-control input-sm" id="Schoolname" name="Schoolname[]" value="" placeholder=""></div></td><td class="nopadding" ><div class="form-group"><input type="text" class="form-control input-sm" id="Schoolname" name="Schoolname[]" value="0%" placeholder=""></div></td><td class="nopadding" ><div class="form-group"><input type="text" class="form-control input-sm" id="Schoolname" name="Schoolname[]" value="" placeholder=""></div></td><td class="nopadding" ><div class="form-group"><input type="text" class="form-control input-sm" id="Schoolname" name="Schoolname[]" value="" placeholder=""></div></td><td class="nopadding" ><div class="input-group-btn"><button class="btn btn-sm btn-danger glyphicon glyphicon-minus btn-xs" type="button" onclick="remove_education_fields2('+ room +');"> <span  aria-hidden="true"></span> </button></div></td></tr>';
			
			objTo.appendChild(divtest)
			  
		}
	   function remove_education_fields2(rid) {
		   $('.removeclass'+rid).remove()
		   
		   room--;
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
	   
	</script> 
@stop
