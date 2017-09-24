@extends('layouts.app')
@section('content')  
@section('pagetitle')
  <h3>Formato de Requisición interna</h3>
@stop
@section('x_search')
	<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
						
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Search for...">
		<span class="input-group-btn">
				  <button class="btn btn-default" type="button">Go!</button>
			  </span>
		</div>
	</div>   
	
@stop

@section('x_content')

    <div class="x_panel">
	    <div class="x_title">
			<h2>Autorización RQS interna</h2>
		
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
			</ul>
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
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
									  <a>Espacio exclusivo para el Asistente de Gestión Administrativa:</a>
								  </h2>
						<br />
						
						<div class="container">
							
							<div class="row ">
								<div class="btn-group  col-md-12">
									<label for="success" class="btn btn-success">Solicitud Consumo  <input type="checkbox" id="success" class="badgebox"><span class="badge">&check;</span></label>
									<label for="warning" class="btn btn-warning">Solicitud Inversión  <input type="checkbox" id="warning" class="badgebox"><span class="badge">&check;</span></label>
								</div>
								<div class="btn-group   col-md-4" data-toggle="buttons"><br>
									<h5>Proveedor Autorizado</h5>
									
									<label class="btn btn-primary ">
										<input type="radio" name="options" id="option2" autocomplete="off" chacked>SI
										<span class="glyphicon glyphicon-ok"></span>
									</label>

									<label class="btn btn-danger">
										<input type="radio" name="options" id="option1" autocomplete="off">No
										<span class="glyphicon glyphicon-ok"></span>
									</label>
								
								</div>
								<div class="btn-group  col-md-4 " data-toggle="buttons"><br>
									
									
									<h5>Aprobado en comite</h5>
									<label class="btn btn-primary ">
										<input type="radio" name="options" id="option2" autocomplete="off" chacked>SI
										<span class="glyphicon glyphicon-ok"></span>
									</label>

									<label class="btn btn-danger">
										<input type="radio" name="options" id="option1" autocomplete="off">No
										<span class="glyphicon glyphicon-ok"></span>
									</label>
								
								</div>	
								<div class="form-group   col-md-4"><br>
									<h5>Fecha</h5>
									<div class="input-group registration-date-time">
										<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
										<input class="form-control" name="registration_date" id="registration-date" type="date">
										<span class="input-group-btn">
										</span>
									</div>
								</div>	
									
							</div>
							<br><p class=""> Notificar Autorización</p>
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="to" class="col-sm-1 control-label">Para:</label>
									<div class="col-sm-11">
										  <input type="email" class="form-control select2-offscreen" id="to" placeholder="" tabindex="-1">
									</div>
								</div>
								<div class="form-group">
									<label for="cc" class="col-sm-1 control-label">Asunto:</label>
									<div class="col-sm-11">
										  <input type="email" class="form-control select2-offscreen" id="cc" placeholder="" tabindex="-1">
									</div>
								</div>
							  
							</form>
					
							<div class="col-sm-11 col-sm-offset-1">
								
								  <div class="x_content">
										  <div id="alerts"></div>
										  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
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
											  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
											  <div class="dropdown-menu input-append">
												<input class="span2" placeholder="URL" type="text" data-edit="createLink" />
												<button class="btn" type="button">Add</button>
											  </div>
											  <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
											</div>

											<div class="btn-group">
											  <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
											  <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
											</div>

											<div class="btn-group">
											  <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
											  <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
											</div>
										  </div>

										  <div id="editor-one" class="editor-wrapper"></div>

										  <textarea name="descr" id="descr" style="display:none;"></textarea>
										  
										  <br />
										</div>
								<!--
								<div class="form-group">	
									<button type="submit" class="btn btn-success">Send</button>
									<button type="submit" class="btn btn-default">Draft</button>
									<button type="submit" class="btn btn-danger">Discard</button>
								</div>-->
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
					<div class="block_content">
						<h2 class="title">
									  <a>Detalles de la autorización</a>
						 </h2>
						<br />		
							
							<div class="table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered ">
									<thead>
									   <tr>
											<th>Cod. RQS</th>
											<th>Fecha RQS</th>																																																				
											<th>Asunto</th>	
											<th>Justificacion</th>
											<th>Estado</th>
											<th>Solicitante</th>
											<th>Cargo</th>
											<th>Detalle</th>
											
											
										</tr>
									</thead>
									<tbody>
										
										<tr>
										  <td>0023933</td>
											<td>26-06-2017</td>
											<td>solicitud compa prueba</td>
											<td>Mensaje Justificacion prueba </td>
											<td>Activo</td>
											<td>Belkis Buelvas</td>
											<td>Cargo</td>
											<td>Area - Coordinacion</td>	
											
										</tr> 
									</tbody>
								</table>
							</div>
						
							<div class="form-group">
									<label for="exampleSelect1">Estado de la autorización</label>
									<select class="form-control" id="exampleSelect1">
									  <option value="" selected>Seleccionar</option>
									  <option> AUTORIZAR / SOLICITUD DE COMPRAS</option>
									  <option>RECHAZAR / REQUISICION</option>
									</select>
								</div>
							
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
									<th>Cantidad</th>
									<th><button type="button" class="btn btn-sm btn-primary glyphicon glyphicon-ok btn-xs" data-toggle="modal" data-target=".unidad"></button>Unidad</th>
									<th>Detalle del producto</th>	
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
											<select class="form-control">
											  <option value="" selected>Seleccionar</option>
											  <option value="">Taller de Cocina</option>
											  <option value="">Papeleria</option>
											  <option value="" >Didacticos</option>
											  <option value="" >Aseo</option>
											</select>
										</div>
									</td>
									<td class="nopadding" >
										<select class="form-control" id="educationDate" name="educationDate[]">
											<option value="" selected>Seleccionar</option>
											<option name="" value="">Aceite</option>
											<option value="">Arepas antioqueñas precocidas </option>
											<option value="" >Arroz  (bolsas de medio kilo)</option>
											<option value="" >Bocadillo</option>
									  </select>
									</td>
									<td class="nopadding" >
										<div class="form-group">
											<input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="Cantidad">
										</div>
									</td>
									<td class="nopadding" >
										<select class="form-control" id="educationDate" name="educationDate[]">
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
									
									<td class="nopadding" >
										<div class="form-group">
											<input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="Detalle">
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
			divtest.innerHTML = '<tr><td>' + (room) + '</td><td><div class="form-group "><select class="form-control"><option value="" selected>Seleccionar</option><option value="">Taller de Cocina</option><option value="">Papeleria</option><option value="" >Didacticos</option><option value="" >Aseo</option></select></div></td><td class="nopadding" ><select class="form-control" id="educationDate" name="educationDate[]"><option value="" selected>Seleccionar</option><option name="" value="">Aceite</option><option value="">Arepas antioqueñas precocidas </option><option value="" >Arroz  (bolsas de medio kilo)</option><option value="" >Bocadillo</option></select></td><td class="nopadding" ><div class="form-group"><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="Cantidad"></div></td><td class="nopadding" ><select class="form-control" id="educationDate" name="educationDate[]"><option value="" selected>Seleccionar</option><option name="" value="">Barra</option><option name="" value="">Bloque</option><option name="" value="">Bolsa</option><option name="" value="">Botella</option><option name="" value="">Caja</option><option name="" value="">Frasco</option><option value="">Lata</option><option value="">Paquete</option><option value="">Pote</option><option value="">Tarro</option><option value="">Tubo</option><option value="">Vaso</option><option name="" value="">Unidad</option><option value="">Kg</option><option value="">Kilo</option><option value="">Litro</option><option value="">Lonjas</option></select></td><td class="nopadding" ><div class="form-group"><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="Detalle"></div></td><td class="nopadding" ><div class="input-group-btn"><button class="btn btn-sm btn-danger glyphicon glyphicon-minus btn-xs" type="button" onclick="remove_education_fields2('+ room +');"> <span  aria-hidden="true"></span> </button></div></td></tr>';
			
			objTo.appendChild(divtest)
			  
		}
	   function remove_education_fields2(rid) {
		   $('.removeclass'+rid).remove()
		   
		   room--;
	   }

	</script>  
@stop

