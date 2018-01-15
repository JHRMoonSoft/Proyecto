@extends('layouts.app')
@section('content')  

@section('x_content')

    <div class="x_panel"> 
	    <div class="x_title">
			<h2>Información de la Requisición Interna</h2>
			<a  href="{{ url('requisicion/export/'.$requisicion->id) }}" class="btn btn-primary  right" role="button"><i class="glyphicon glyphicon-cloud-download" aria-hidden="true"></i>&nbsp&nbsp Descargar </a>	
			<a  href="{{ url('/requisicion') }}" class="btn btn-default  right" role="button"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp&nbsp&nbspVolver al listado </a>
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
							 <a>Historial de Registro   </a><br/>
						</h2>				
						<br />
						
						<div class="table-responsive">
							<table id="datatable-buttons" class="table table-striped table-bordered ">
								<thead>
								   <tr>
										
										<th>Fecha</th>																																																				
										<th>Asunto</th>	
										<th>Estado</th>
										<th>Usuario</th>
										<th>Observaciones </th>
									</tr>
								</thead>
								<tbody>
								@foreach($registrohistoricorequisicion as $registrohistoricorqs)
									<tr>
									  
										<td>{{$registrohistoricorqs->created_at->format('d-m-Y')}}</td>
										<td>{{$registrohistoricorqs->accionesrequisicion->des_acc_rqs}} </td>
										<td>{{$registrohistoricorqs->accionesrequisicion->estadorequisionactual->desc_est_req}}</td>
										<td>{{$registrohistoricorqs->user->nom_usr}} {{$registrohistoricorqs->user->ape_usr}} </td>
										<td>{{$registrohistoricorqs->obs_reg_rqs}}</td>
										
									</tr> 
								@endforeach
									 
								</tbody>
							</table>
						</div>
						<br/>
						
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
							<a>Detalle de la Requisición  </a><br/>
						</h2>
						<br/>
						
						<div class="panel panel-default">
							
							<div class="table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered ">
									<thead>
										<tr>
										<th>Cod. RQS</th>
										<th>Fecha RQS</th>
									    <th>Solicitante	</th>										
									    <th>Cargo:</th>
										<th>Área</th>
										<th>Coordinación:</th>
										<th>Justificación:</th>
										</tr>
									</thead>
									<tbody>
										
										<tr>
											<td>{{ $requisicion->id }}</td>
											<td>{{ $requisicion->created_at->format('d-m-Y')}}	</td>
											@if($requisicion->registrohistoricorequisicion->count() == 0)
												<td>Sin Creación</td>
											@else
												@foreach($requisicion->registrohistoricorequisicion as $reghis)
													@if ($loop->first)
														@if($reghis->user === null)
															<td>Sin Creación</td>
															<td></td>
															<td></td>
															<td></td>
														@else
															<td>{{$reghis->user->nom_usr .' '. $reghis->user->ape_usr}}</td>
															<td>{{$reghis->user->cargo->des_crg }}</td>
															<td>{{$reghis->user->area->des_are}}</td>
															<td>{{$reghis->user->crd_usr }}	</td>															
														@endif
													@endif
												@endforeach
											@endif											
											<td>{{$requisicion->jst_rqs}}</td>
										</tr> 
									</tbody>
								</table>
							</div>
						</div>					
						
					 <a>Espacio exclusivo para el Asistente de Gestión Administrativa</a><br/>
					<div class="row ">
						<div class="btn-group col-md-5">
							<h5>Tipo de Solicitud</h5>
							<label for="success" class="btn btn-success">
								Solicitud Consumo
								<input type="radio" name="tip_sol1" id="success" value="{{$requisicion->tip_sol1 }}"s class="badgebox"/ disabled>
								<span class="badge">&check;</span>
							</label>
								@if ($errors->has('tip_sol1'))
									<span class="help-block">
										<strong>{{ $errors->first('tip_sol1') }}</strong>
									</span>
								@endif
							<label for="warning" class="btn btn-warning">
								Solicitud Inversión
								<input type="checkbox" name="tip_sol2" id="warning" value="{{$requisicion->tip_sol2 }}" class="badgebox" disabled>
								<span class="badge">&check;</span>
							</label>
								@if ($errors->has('tip_sol2'))
									<span class="help-block">
										<strong>{{ $errors->first('tip_sol2') }}</strong>
									</span>
								@endif
						</div>
		
						<div class="dlk-radio btn-group  col-md-2" >
							<h5>Aprobado en comite</h5>
							<label class="btn  btn-primary">
								<input name="choices[1]"  type="radio" value="1"disabled>
								<i class="fa fa-check glyphicon glyphicon-ok"></i>SI
						   </label>
						   <label class="btn btn-danger">
							   <input name="choices[1]"  type="radio" value="2"   defaultchecked="checked" disabled >
							   <i class="fa fa-times glyphicon glyphicon-remove"></i>NO
						   </label>
						
						</div>	
						
						<div class="dlk-radio btn-group  col-md-2" >
							<h5>Proveedor Autorizado</h5>
							<label class="btn  btn-primary">
								<input name="choices[1]"  type="radio" value="1"disabled>
								<i class="fa fa-check glyphicon glyphicon-ok"></i>SI
						   </label>
						   <label class="btn btn-danger">
							   <input name="choices[1]"  type="radio" value="2"   defaultchecked="checked" disabled >
							   <i class="fa fa-times glyphicon glyphicon-remove"></i>NO
						   </label>
						
						</div>
						
						 <!--<div class="dlk-radio btn-group  col-md-2" >
						
							<label class="btn  btn-primary">
								<input name="choices[1]"  type="radio" value="1"disabled>
								<i class="fa fa-check glyphicon glyphicon-ok"></i>SI
						   </label>
						   <label class="btn btn-danger">
							   <input name="choices[1]"  type="radio" value="2"   defaultchecked="checked" disabled >
							   <i class="fa fa-times glyphicon glyphicon-remove"></i>NO
						   </label>
						  
							<label class="btn btn-success">
								<input name="choices[1]"  type="radio" value="1">
								<i class="fa fa-check glyphicon glyphicon-ok"></i>SI
						   </label>
						   <label class="btn btn-default">
							   <input name="choices[1]"  type="radio" value="2" defaultchecked="checked">
							   <i class="fa fa-times glyphicon glyphicon-remove"></i>NO
						   </label>
						   
						</div>-->
										
						<div class=" col-md-3 " ><h5>Fecha de aprobación</h5>
								<div class="input-group registration-date-time">
									<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
									<input class="form-control" name="registration_date" disabled style="background:#fff;" id="registration-date" type="date">
									<span class="input-group-btn">
									</span>
								</div>
						</div>	
					</div>
						
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
					<div class="block_content"><br/>
						<h2 class="title">
								 <a>Lista de Productos </a><br/>
							</h2>
							<br/>
							<div class="panel panel-default">
							<div class="panel-heading text-center">
								<span><strong><span class="glyphicon glyphicon-th-list"> </span> Productos</strong></span>
							</div>
							<div class="table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered ">
									<thead>
									   <tr>
											<th>No.</th>
											<th>Producto</th>
											<th>Cant. Solicitada</th>
											<th>Unidad</th>
											<th>Estado</th>
											<th>Cant. Autorizada</th>
										</tr>
									</thead>
									<tbody>
											
										
										<tr>
											<td>1</td>
											<td>Aceite </td>
											<td>2 cajas de 12 UND</td>
											<td>1 caja 2 UND</td>
											<td>Aprobado / Anulado  </td>
											<td>10 UND</td>
										</tr> 
									</tbody>
								</table>
							</div>
						</div>
						<br/>												
					</div>
				  </div>
				</li>
				<li>
				  <div class="block">
					<div class="tags">
					  <a href="" class="tag">
						<span>Paso 4</span>
					  </a> 
					</div>
					<div class="block_content"><br/>
												
						<h2 class="title">
							<a> Proveedores sugeridos </a><br/>
						</h2><br/>
						<div class="panel panel-default">
							<div class="panel-heading text-center">
								<span><strong><span class="glyphicon glyphicon-th-list"> </span> Proveedores</strong></span>
							</div>
							<div class="table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered ">
									<thead>
									   <tr>
											<th>No.</th>
											<th>Nombre Proveedor</th>
											<th>Nit. Proveedor</th>
											<th>Tel. Fijo</th>
											<th>Tel. Celular</th>
											<th>Dirección</th>
											<th>Estado</th>
										</tr> 		
									</thead>
									<tbody>
										
										<tr>
											<td><td>{{$requisicion->id}}</td></td>
											<td>ggdgdf </td>
											<td>2dfgfdg</td>
											<td>gdgf</td>
											<td>gdfd</td>
											<td>esperar de n</td>
											<th>Autorizado</th>
										</tr> 
									</tbody>
								</table>
							</div>
						</div>
						<br/>
						
						<br/>												
					</div>
				  </div>
				</li>
				<li>
				  <div class="block">
					<div class="tags">
					  <a href="" class="tag">
						<span>Paso 5</span>
					  </a> 
					</div>
					<div class="block_content"><br/>
						<h2 class="title">
								 <a>Recibí los elementos solicitados en este documento</a><br/>
							</h2>
							<br/>
						<div class="panel panel-default">
							
							<div class="table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered ">
									<thead>
									 <tr>
											<th>No.</th>
											<th>Producto</th>
											<th>Descripción detallada</th>											
											<th>Cant. Aprobada</th>
											<th>Cant.Recibida </th>
											<th>Cant.Pendiente</th>
										</tr>
									</thead>
									<tbody>
										
										<tr>
											<td>1</td>
											<td>Aceite </td>
											<td>10 UND</td>
											<td>1 caja 2 UND</td>
											<td>dedcd </td>
											<td>6 </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row ">
							<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"><br>
								<div class="form-group">
									<h5 >Observaciones	</h5>																		
									<div class="col-md-8 col-sm-8 col-xs-12"></br>	
										<textarea type="text" id="last-name" disabled style="background:#fff;" name="last-name"rows="6" required="required" class="form-control col-md-7 col-xs-12"></textarea>
									</div><br>
								</div>
								<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>									
									<div class="form-group col-md-12 col-xs-12">
										<h5>Nombre </h5>
											<input type="text" class="form-control" disabled style="background:#fff;" id="Schoolname" name="Schoolname[]" value="" placeholder="¿quien recibe?">
									</div>										
								</div>	
								<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>						
									<div class="form-group col-md-12 col-xs-12">
										<h5>Cargo </h5>
											<input type="text" class="form-control"  disabled style="background:#fff;" id="Schoolname" name="Schoolname[]" value="" placeholder="cargo">
									</div>
								</div>	
								<div class="form-group   col-md-4 col-sm-4 col-xs-12"><br>
							
									<h5>Fecha </h5>
									<div class="input-group registration-date-time">
										<span class="input-group-addon" id="basic-addon1"><span  class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
										<input class="form-control" disabled style="background:#fff;" name="registration_date" id="registration-date" type="date">
										<span class="input-group-btn">
										</span>
									</div>
								
								</div>	
								
							</form>
						</div>
												
					</div>
				  </div>
				</li>
			</ul>

        </div>
		
	</div>		
@stop
        <!-- /page content -->
		<!--
		<script type="text/javascript">
			$(document).ready(function(){
				function onFinishCallback(){
				$('#wizard').smartWizard('showMessage','Finish Clicked');
			} 
			});
			
			
		</script>
		-->
@stop
<!--6581128-->
<!--229392650-->