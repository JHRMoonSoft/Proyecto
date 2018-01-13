@extends('layouts.app')

@section('content')
  <div class="x_panel">
	    <div class="x_title">
			<h2>Listado de Área/ Sección/ Programa </h2> &nbsp&nbsp&nbsp
			
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<div class="table-responsive">
				<table id="datatable-buttons" class="table table-striped table-bordered ">
				  <thead>
				   <tr>
						<th class="text-center">Código</th>
						<th class="text-center">Tipo Dependencia</th>
						<th class="text-center">Detalle Dependencia </th>
						<th class="text-center">Fecha de Creación</th>
						<th class="text-center">Fecha de Modificación</th>
						<!--<th>Eliminar</th>-->
					</tr>
				  </thead>
				  <tbody>
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/area') }}">
						{{ csrf_field() }}
						<tr>
						  <td class="text-center">Nuevo</td>
							<td>
								@if(!$tipoareas->isEmpty())
									<select id="tipos_area_id"  name="tipos_area_id" class="form-control col-md-7 col-xs-12" >
										<option value="" selected>Seleccionar</option>
										@foreach($tipoareas as $tipoarea)
											<option value="{{$tipoarea->id}}">{{$tipoarea->des_tip_are}} </option>
										@endforeach
									</select>
									
								@endif

							</td>
							<td>
								<div class="col-md-9 col-sm-9 col-xs-9">
									<input type="text" class="form-control" id="des_are" name="des_are"/>
									@if ($errors->has('des_are'))
										<span class="help-block">
											<strong>{{ $errors->first('des_are') }}</strong>
										</span>
									@endif
								</div>
								<div class="col-md-1 col-sm-1 col-xs-1">
									<button type="submit" class="btn btn-success">Guardar</button>
								</div>
								
								
							</td>
							<td> </td>
							<td></td>
							
						</tr> 
					</form>
					@foreach($areas as $area)
						<tr>
							<td>{{ $area->id}}</td>
							<td>{{ $area->tipoarea->des_tip_are}}</td>
							<td>{{ $area->des_are}}</td>
							<td>{{ $area->created_at->format('Y-m-d') }}</td>	
							<td>{{ $area->updated_at->format('Y-m-d') }}</td>
						
						</tr>                       
					@endforeach 
				  </tbody>
				</table>
			</div>
        </div>
		
	</div>
@endsection
