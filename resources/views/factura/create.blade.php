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
												<label for="ex1">Código</label>
												<input class="form-control input-sm" id="ex1" type="text"  disabled style="background:#fff;">
											  </div>
											  <div class="col-md-2 	col-sm-6 col-xs-12">
													 <label for="single_cal2">Fecha</label>
													<input type="text" class="form-control input-sm has-feedback-left " id="single_cal2" placeholder="First Name" aria-describedby="inputSuccess2Status2">
													
											  </div>
												<div class="col-md-2 col-sm-6 col-xs-12">
													<label for="ex3">Empresa</label>
													<input class="form-control input-sm" id="ex3" type="text"  disabled style="background:#fff;">
												</div>
												<div class="col-md-2 col-sm-6 col-xs-12">
													<label for="ex1">Nit. Empresa</label>
													<input class="form-control input-sm" id="ex1" type="text"  disabled style="background:#fff;">
												</div>
										
												<div class="col-md-2 col-sm-6 col-xs-12">
													<label for="ex2">Realizado</label>
													<input class="form-control input-sm" id="ex2" type="text"  disabled style="background:#fff;">
												</div>
												<div class="col-md-2 col-sm-6 col-xs-12">
													<label for="ex3">No. Factura</label>
													<input class="form-control input-sm" id="ex3" type="text">
												</div>
											</form>
										</div>
										
									</div>
									
									<div class="x_panel">
										<div class=" row ">	
											<div class=" col-sm-3 col-xs-6">
												<div class="form-group">
													<label for="ex1">Proveedor</label>
													<select class="form-control input-sm " id="exampleSelect1">
														<option value="volvo" selected>Seleccionar</option>
														<option value="">ALMACENES EXITO</option>
														<option value="">MEGA TIENDAS </option>
														<option value="">PAPELERÍA TAURO </option>
														<option value="">EL GIGANTE DEL HOGAR</option>
														<option value="">SAFARI COMPUTADORES</option>
														<option value="">DISTRIBUIDORA Y PAPELERÍA VENEPLAS</option>
													</select>
												</div>
											</div>
										
											<div class=" col-sm-3 col-xs-6">
												<div class="form-group">
													<label for="ex1">Nit/Rut</label>
													<input class="form-control input-sm" id="ex1" type="text"  disabled style="background:#fff;">
												</div>
											</div>
											
											<div class="col-sm-3 col-xs-6">
												<div class="form-group">
													<label for="ex2">Dirección</label>
													<input class="form-control input-sm" id="ex2" type="text"  disabled style="background:#fff;">
												</div>	
											</div>
											<div class="col-sm-3 col-xs-6">
												<div class="form-group">
													<label for="ex3">Ciudad</label>
													<input class="form-control input-sm" id="ex3" type="text"  disabled style="background:#fff;">
												</div>
											</div>
											<div class="col-sm-3 col-xs-6">
												<div class="form-group">
													<label for="ex1">Teléfono</label>
													<input class="form-control input-sm" id="ex1" type="text"  disabled style="background:#fff;">
												</div>
											</div>
									
											<div class="col-sm-3 col-xs-6">
												<div class="form-group">
													<label for="ex2">E-mail</label>
													<input class="form-control input-sm" id="ex2" type="text"  disabled style="background:#fff;">
												</div>
											</div>
											<div class="col-sm-3 col-xs-6">
												<label for="ex3">Concepto</label>
												<input class="form-control input-sm" value="FACTURA DE COMPRA" id="ex3" type="text">
											</div>
											<div class="col-sm-3 col-xs-6">
												<div class="form-group">
													<label for="ex1">Comprado por</label>
													<input class="form-control input-sm" id="ex1" type="text">
												</div>
											</div>
											<div class="col-sm-3 col-xs-6">
												<div class="form-group">
													<label for="ex1">Forma de pago</label>
													<select class="form-control input-sm" id="exampleSelect1">
														<option value="volvo " selected>Seleccionar</option>
														<option>CONTADO</option>
														<option>CREDITO</option>
													</select>
												</div>
											</div>
									
											<div class="col-sm-3 col-xs-6">
												<div class="form-group">
													<label for="ex2">Dias de credito</label>
													<input class="form-control input-sm" id="ex2" type="text">
												</div>
											</div>
											<div class="col-sm-3 col-xs-6"> 
												<div class="form-group">
													<label for="ex3">Tiempo de entrega</label>
													<input class="form-control input-sm" id="ex3" type="text">
												</div>
											</div>
											<div class="col-sm-3 col-xs-6">
												<div class="form-group">
													<label for="ex3">Otro</label>
													<input class="form-control input-sm" id="ex3" type="text">
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
												<th><button type="button" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-toggle="modal" data-target=".producto"></button> Producto </th>											
												<th><button type="button" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-toggle="modal" data-target=".unidad"></button> Unidad </th>
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
										<label for="ex3">Obeservaciones</label><br/>
										<div class="col-md-9 col-sm-9 col-xs-12">
										  <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
										</div>
									</div>
									<div class="col-xs-3">
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" align="right" for="first-name">SUBTOTAL</label>
											<div class="col-md-8 col-sm-8 col-xs-12  right">
											  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12 "  disabled style="background:#fff;">
											</div>
										</div>
									
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12 " align="right" for="first-name"><br/>IVA</label>
											<div class="col-md-8 col-sm-8 col-xs-12  right">
											  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12"  disabled style="background:#fff;">
											</div>
										</div>
								
										<div class="form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" align="right" for="first-name"><br/>TOTAL</label>
											<div class="col-md-8 col-sm-8 col-xs-12  right">
											  <input type="text" id="first-name"   required="required" class="form-control col-md-7 col-xs-12"  disabled style="background:#fff;">
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

		  <!-- Productos modal -->		  

		  <div class="modal fade producto" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Nuevo Producto</h4>
				</div>
				<div class="modal-body">
					<label class="control-label " for="first-name"> Producto</label>
					<div class="form-group input-group ">
						<input name="multiple[]" class="form-control ">
						<span class="input-group-btn"><button type="button" class="btn btn-primary btn-add">+</button></span>
					</div>
					<small>Pulse + para agregar otro producto /  Pulse - para eliminar un producto.</small>
				</div>
				<div class="modal-footer"><!--
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				  <button type="submit" class="btn btn-danger">Deshacer</button>
				  <button type="button" class="btn btn-primary">Guardar</button>
				</div>

			  </div>
			</div>
		  </div>
		  <!-- /modals -->
		  
		   <!-- Unidad modal -->		  

		  <div class="modal fade unidad" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Nueva Unidad</h4>
				</div>
				<div class="modal-body">
					<label class="control-label " for="first-name"> Unidad</label>
					<div class="form-group input-group ">
						<input name="multiple[]" class="form-control ">
						<span class="input-group-btn"><button type="button" class="btn btn-primary btn-add">+</button></span>
					</div>
					<small>Pulse + para agregar otro unidad /  Pulse - para eliminar un unidad.</small>
				</div>
				<div class="modal-footer"><!--
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				  <button type="submit" class="btn btn-danger">Deshacer</button>
				  <button type="button" class="btn btn-primary">Guardar</button>
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

	</script> 
@stop
