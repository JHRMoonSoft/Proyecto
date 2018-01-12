@extends('layouts.app')
@section('content')  

@section('x_content') 

    <div class="x_panel">
	    <div class="x_title">
			<h2>Entregar Requisición Interna</h2>  
			<a  href="{{ url('/entregarRQS') }}" class="btn btn-default  right" role="button"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp&nbsp&nbspVolver al listado </a>
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
					<div class="block">
						<br/>
						<h5>Espacio exclusivo para el Asistente de Gestión Administrativa<h5><br/><br/>
						<div class="row">
						<div class="col-xs-6 col-md-5 col-md-offset-3 ">
						  
								<!--RQS Pendientes--><!--
							<div class="col-xs-12 ">
								<div class="input-group">
									<input type="text" class="form-control">
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
								<h5>   Buscar RQS autorizadas<h5>
							</div>-->
							<!-- Consolidar RQS-->
						  
						</div>
						</div>	
					
						<div class="tags">
						  <a href="" class="tag">
							<span>Paso 1</span>
						  </a>
						</div>
						<div class="block_content">
							<div class="row ">
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"><br>
									<div class="form-group"><br>
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Asunto </label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input type="text" id="first-name" value="Entregar requisición"  required="required" class="form-control col-md-7 col-xs-12">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="exampleSelect1">Estado</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select class="form-control " id="exampleSelect1">
											  <option value="" selected>Seleccionar</option>
											  <option> ENTREGADO </option>
											  <option>PENDIETE</option>
											</select><br>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Observación</label>																			
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <textarea type="text" id="last-name"  name="last-name"rows="5" required="required" class="form-control col-md-7 col-xs-12"></textarea>
										</div><br>
									</div>
								</form>
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
						<div class="block_content"><br/>
							<h2 class="title">
								 <a>Detalle de productos </a><br/>
							</h2>
							<br/>
							<div class="panel panel-default">
								<div class="panel-heading text-center">
									<span><strong><span class="glyphicon glyphicon-th-list"> </span> Productos</strong></span>
								</div>
								<div class="table-responsive">
									<table class="table table-bordered table-hover" id="education_fields2">
									<thead>
										<tr >
											<th>#</th>
											<th><button type="button" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-toggle="modal" data-target=".categoria"></button>Categoria</th>
											<th><button type="button" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-toggle="modal" data-target=".producto"></button>Producto</th>
											<th><button type="button" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-toggle="modal" data-target=".unidad"></button>Unidad</th>
											<th> Cant. Autorizada</th>
											<th> Cant. Entregada</th>
											<th> Cant. Pendiente</th>
											<th><a></a></th>
							
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												1
											</td>
											<td>
												<div class="form-group ">
													<select class="form-control"disabled >
													  <option value="" selected>Seleccionar</option>
													  <option value="">Taller de Cocina</option>
													  <option value="">Papeleria</option>
													  <option value="" >Didacticos</option>
													  <option value="" >Aseo</option>
													</select>
												</div>
											</td>
											<td class="nopadding" >
												<select class="form-control" id="educationDate" name="educationDate[]"disabled>
													<option value="" selected>Seleccionar</option>
													<option name="" value="">Aceite</option>
													<option value="">Arepas antioqueñas precocidas </option>
													<option value="" >Arroz  (bolsas de medio kilo)</option>
													<option value="" >Bocadillo</option>
											  </select>
											</td>
											
											<td class="nopadding" >
												<select class="form-control" id="educationDate" name="educationDate[]"disabled >
													<option value="" selected>Seleccionar</option>
													<option name="" value="">Barra</option>
													<option name="" value="">Bloque</option>
													<option name="" value="">Bolsa</option>
													<option name="" value="">Botella</option>
													<option name="" value="">Caja</option>
													<option name="" value="">Frasco</option>
													<option value="">Lata</option>
													<option value="">Paquete</option>
													<option value="">Pote</option>
													<option value="">Tarro</option>
													<option value="">Tubo</option>
													<option value="">Vaso</option>
													<option name="" value="">Unidad</option>
													<option value="">Kg</option>
													<option value="">Kilo</option>
													<option value="">Litro</option>
													<option value="">Lonjas</option>
											  </select>
											</td>
											<td class="nopadding"  >
												<div class="form-group">
													<input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder=""disabled >
												</div>
											</td>
											<td class="nopadding" >
												<div class="form-group">
													<input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="">
												</div>
											</td>
											<td class="nopadding" >
												<div class="form-group">
													<input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder=""disabled >
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
							<br />
							
						
								
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
				  <button type="submit" class="btn btn-danger">Deshacer</button>
				  <button type="button" class="btn btn-primary">Guardar</button>
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
			divtest.innerHTML = '<tr><td>' + (room) + '</td><td><div class="form-group "><select class="form-control">  <option value="" selected>Seleccionar</option>  <option value="">Taller de Cocina</option> <option value="">Papeleria</option> <option value="" >Didacticos</option> <option value="" >Aseo</option></select></div></td>	<td class="nopadding" >	<select class="form-control" id="educationDate" name="educationDate[]">	<option value="" selected>Seleccionar</option><option name="" value="">Aceite</option><option value="">Arepas antioqueñas precocidas </option><option value="" >Arroz  (bolsas de medio kilo)</option><option value="" >Bocadillo</option>  </select>	</td><td class="nopadding" >	<select class="form-control" id="educationDate" name="educationDate[]">	<option value="" selected>Seleccionar</option><option name="" value="">Barra</option><option name="" value="">Bloque</option>	<option name="" value="">Bolsa</option>	<option name="" value="">Botella</option>	<option name="" value="">Caja</option><option name="" value="">Frasco</option><option value="">Lata</option><option value="">Paquete</option><option value="">Pote</option><option value="">Tarro</option><option value="">Tubo</option>	<option value="">Vaso</option><option name="" value="">Unidad</option><option value="">Kg</option>	<option value="">Kilo</option><option value="">Litro</option><option value="">Lonjas</option> </select></td><td class="nopadding"  ><div class="form-group"><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder=""></div></td><td class="nopadding" ><div class="form-group"><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder=""></div></td><td class="nopadding" ><div class="form-group"><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="">	</div></td><td class="nopadding" ><div class="input-group-btn"><button class="btn btn-sm btn-danger glyphicon glyphicon-minus btn-xs" type="button" onclick="remove_education_fields2('+ room +');"> <span  aria-hidden="true"></span> </button></div></td></tr>';
			
			objTo.appendChild(divtest)
			  
		}
	   function remove_education_fields2(rid) {
		   $('.removeclass'+rid).remove()
		   
		   room--;
	   }

	</script> 
@stop
