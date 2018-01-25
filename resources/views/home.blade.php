@extends('layouts.app')

@section('content')
  <div class="x_panel">
	    <div class="x_title">
			<h2>Requisiciones Activas</h2> &nbsp&nbsp&nbsp
						
			<a  href="/requisicion/create" class="btn btn-warning" role="button">Nueva Requisición </a>
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
			<div class="table-responsive">
				 <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
				  <thead>
				   <tr>
						<th class="text-center">Código</th>
						<th class="text-center">Fecha</th>
						<th class="text-center">Antiguedad</th>
						<th class="text-center">Asunto</th>
						<th class="text-center">Estado</th>
						<th class="text-center">Solicitante</th>
						<th class="text-center">Cargo</th>
						<th class="text-center"> Dependencia</th>
						
						<th>Opciones  </th>
						<!--<th>Eliminar</th>-->
					</tr>
				  </thead>
				  <tbody>
				
					@foreach($requisiciones as $requisicion)
						@if($requisicion->registrohistoricorequisicion->first()->user->id == Auth::user()->id )
							<tr>
								<td>{{$requisicion->id}}</td>
								<td>{{$requisicion->created_at->format('d-m-Y')}}</td>
								<td>{{$now->diff($requisicion->created_at)->days}} día(s)</td>
								<td>{{$requisicion->asn_rqs}}</td>
								<td>{{$requisicion->estadorequisicion->desc_est_req}}</td>
								@if($requisicion->registrohistoricorequisicion->count() == 0)
									<td>Sin Creación</td>
								@else
									@foreach($requisicion->registrohistoricorequisicion as $registrorqs)
										@if ($loop->first)
											@if($registrorqs->user === null)
												<td>Sin Creación</td>
											@else
												<td>{{$registrorqs->user->nom_usr .' '. $registrorqs->user->ape_usr}}</td>
												<td>{{$registrorqs->user->cargo->des_crg  }}</td>
												<td>{{$registrorqs->user->area->tipoarea->des_tip_are}} / {{$registrorqs->user->area->des_are}}</td>
											@endif
										@endif
									@endforeach
								@endif
														
								
								
								<td>
									<a href="{{ url('/requisicion/'.$requisicion->id) }}" title="Detalle" class="btn btn-success glyphicon glyphicon-file btn-xs" data-title="Detalle"></a>							
									<a href="{{ url('requisicion/export-pdf/'.$requisicion->id) }}" title="Descargar" class="btn btn-primary glyphicon glyphicon-cloud-download btn-xs" data-title="Descargar"></a><!--
									<a href="" title="Acción" class="btn btn-primary glyphicon glyphicon-ok btn-xs" data-title="Acción"></a>--></td><!--
								<td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><a href="" class="btn btn-danger btn-xs" data-title="Eliminar"><span class=" glyphicon glyphicon-trash"></span></a></p></td>-->
						
							</tr> 
						@else
						@permission('ver-menú-gestionar-rqs')
							<tr>
								<td>{{$requisicion->id}}</td>
								<td>{{$requisicion->created_at->format('d-m-Y')}}</td>
								<td>{{$now->diff($requisicion->created_at)->days}} día(s)</td>
								<td>{{$requisicion->asn_rqs}}</td>
								<td>{{$requisicion->estadorequisicion->desc_est_req}}</td>
								@if($requisicion->registrohistoricorequisicion->count() == 0)
									<td>Sin Creación</td>
								@else
									@foreach($requisicion->registrohistoricorequisicion as $registrorqs)
										@if ($loop->first)
											@if($registrorqs->user === null)
												<td>Sin Creación</td>
											@else
												<td>{{$registrorqs->user->nom_usr .' '. $registrorqs->user->ape_usr}}</td>
												<td>{{$registrorqs->user->cargo->des_crg  }}</td>
												<td>{{$registrorqs->user->area->tipoarea->des_tip_are}} / {{$registrorqs->user->area->des_are}}</td>
											@endif
										@endif
									@endforeach
								@endif
												
								
								
								<td>
									<a href="{{ url('/requisicion/'.$requisicion->id) }}" title="Detalle" class="btn btn-success glyphicon glyphicon-file btn-xs" data-title="Detalle"></a>							
									<a href="{{ url('requisicion/export-pdf/'.$requisicion->id) }}" title="Descargar" class="btn btn-primary glyphicon glyphicon-cloud-download btn-xs" data-title="Descargar"></a><!--
									<a href="" title="Acción" class="btn btn-primary glyphicon glyphicon-ok btn-xs" data-title="Acción"></a>--></td><!--
								<td><p data-placement="top" data-toggle="tooltip" title="Eliminar"><a href="" class="btn btn-danger btn-xs" data-title="Eliminar"><span class=" glyphicon glyphicon-trash"></span></a></p></td>-->
						
							</tr> 
						@endpermission
						@endif
					@endforeach
				
				  </tbody>
				</table>
			</div>
        </div>
		
	</div>
@endsection
