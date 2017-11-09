@extends('layouts.app')
@section('content')  

@section('x_content')

    <div class="x_panel">
	    <div class="x_title">
			<h2>Nueva Requisición Interna</h2>
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
						<form class="form-horizontal" role="form">
								
							<div class="form-group"><br><br>
								<label for="to" class="col-sm-2 control-label">Para:</label>
								<div class="col-sm-10">
									  <input type="email" class="form-control select2-offscreen" id="to" placeholder="" tabindex="-1">
								</div>
							</div>
							<div class="form-group">
								<label for="cc" class="col-sm-2 control-label">Solicitud:</label>
								<div class="col-sm-10">
									  <input type="text" value="Requisición Interna"class="form-control select2-offscreen" id="cc" placeholder="" tabindex="-1">
								</div>
							</div>
							<div class="form-group">
								<label for="cc" class="col-sm-2 control-label">Justificación:</label>
								<div class="col-sm-10">
									  <input type="tex" class="form-control select2-offscreen" id="cc" placeholder="" tabindex="-1">
								</div>
							</div>
							<!--
							  <div class="control-group">
								<label class="control-label col-sm-1">Input Tags</label>
								<div class="col-sm-11">
								  <input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales" />
								  <div id="suggestions-container" style="position: relative; float: left; width: 350px; margin: 10px;"></div>
								</div>
							  </div>-->
						  
						</form>
						
						<div class="col-sm-10 col-sm-offset-2">
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
<!--
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
								</div>-->

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
				<input type="hidden" class="form-control" id="cantproductos" name="cantproductos" value="1"/>
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
									<th class="text-center">Cantidad</th>
									<th class="text-center">Unidad</th>									
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
										</select>
									
									</td>
									<td class="nopadding" >
										<div class="form-group">
											<input type="text" class="form-control" id="cantidad1" name="cantidad1" value="" placeholder="Cantidad">
										</div>
									</td>
									<td class="nopadding" >
										<select class="form-control" id="unidad1" name="unidad1">
											<option value="" selected>Seleccionar</option>
									    </select>
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
							<br /><!--
						<div class="form-group">
							<form class=" form-label-center">
								<div class="form-group  col-md-6 col-md-offset-3 ">
									<label class="control-label" for="first-name">Seleccionar proveedor </label>
									<div class="form-group input-group ">
										@if(!$proveedores->isEmpty())
											<select id="proveedor" class="form-control" name="productos" >
												<option value="" selected>Seleccionar</option>
												@foreach($proveedores as $proveedor)
													<option value="{{ $proveedor->id}}">{{ $proveedor->raz_soc}} </option>
												@endforeach
											</select>
										@endif
										<span class="input-group-btn"><button type="button" class="btn btn-primary btn-add">+</button></span>
									</div>
									<label class="control-label " for="first-name"> Nuevo proveedor </label>
									<div class="form-group input-group ">
										<input name="multiple[]" class="form-control ">
										<span class="input-group-btn"><button type="button" class="btn btn-primary btn-add">+</button></span>
									</div>
									<small>Pulse + para agregar otro proveedor /  Pulse - para eliminar un proveedor.</small>
								</div>
							</form>
						</div>-->
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
									<th>Telefono </th>	
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
									
									</td>
									<td>
										
										<select id="proveedor1" class="form-control" name="proveedor1" >
											<option value="" selected>Seleccionar</option>
											@if(!$proveedores->isEmpty())
												@foreach($proveedores as $proveedor)
													<option value="{{ $proveedor->id}}">{{ $proveedor->raz_soc}} </option>
												@endforeach
												<option value="0" selected>Otro</option>
											@endif
										</select>
										
									</td>
									<td class="nopadding" >
										<div class="form-group">
											<input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="">
										</div>
									</td>
									<td class="nopadding" >
										<div class="form-group">
											<input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="">
										</div>
									</td>
									
									<td class="nopadding" >
										<div class="input-group-btn">
											<button class="btn btn-sm btn-primary glyphicon glyphicon-plus btn-xs" type="button"  onclick="education_fieds({{$productos}});"> <span  aria-hidden="true"></span> </button>
										</div>
									</td>
								</tr>
							</tbody>
					  
						</table>
						</div>
						
					</div>
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
		
	</div>		
@stop

@stop
@section('postscripts')
	<script>
		var room = 1;
		function education_fields(productos) {
			room++;
			var objTo = document.getElementById('education_fields')
			var divtest = document.createElement("tbody");
			divtest.setAttribute("class", "form-group tr removeclass"+room);
			var rdiv = 'removeclass'+room;
			var text = '<tr><td>' + (room) +'</td>'+
				//Productos
				'<td class="nopadding" >'+
				'<select class="form-control" id="producto'+(room)+'" name="producto'+(room)+'" onchange="cambio_productos('+(room)+');">'+
				'<option value="" selected>Seleccionar</option>';
				$.each(productos, function(index, element) {
						text = text + '<option value="'+ element.id +'">' + element.des_prd + '</option>';
					});
				text = text +
				'</select></td>'+
				//Cantidad
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="cantidad'+(room)+'" name="cantidad'+(room)+'" value="" placeholder="Cantidad"></div>'+
				'</td>'+
				//Unidades
				'<td class="nopadding" >'+
					'<select class="form-control" id="unidad'+(room)+'" name="unidad'+(room)+'"><option value="">Seleccionar</option></select>'+
				'</td>'+
				//Detalle
				'<td class="nopadding" >'+
					'<div class="form-group"><input type="text" class="form-control" id="detalle'+(room)+'" name="detalle'+(room)+'" value="" placeholder="Detalle"></div>'+
				'</td>'+
				//Botones
				 '<td class="nopadding" >'+
					'<div class="input-group-btn"><button class="btn btn-sm btn-danger glyphicon glyphicon-minus btn-xs" type="button" onclick="remove_education_fields('+ room +');">'+
						'<span aria-hidden="true"></span>'+
					'</button></div>'+
				'</td></tr>';
			divtest.innerHTML = text;
			objTo.appendChild(divtest)
			$("#cantproductos").val(room);  
		}
	   function remove_education_fields(rid) {
		   $('.removeclass'+rid).remove()
		   room--;
		   $("#cantproductos").val(room);  
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
	   
	   $('#productos').change(function(){
			$.get("{{ url('requisicion/cargarunidadesproducto')}}", 
				{
					option: $(this).val(),
					
				}, 
				function(data) {
					var model = $('#unidades');
					model.empty();
					model.append("<option value='' selected>Seleccionar</option>");
						$.each(data, function(index, element) {
							model.append("<option value='"+ element.id +"'>" + element.des_und + "</option>");
					});
			});
		});

	</script>
	
@stop