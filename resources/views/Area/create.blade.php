@extends('layouts.app')

@section('content')
  <div class="x_panel">
	    <div class="x_title">
			
			
		<form class="form-horizontal" role="form" method="POST" action="{{ url('/area') }}">
			{{ csrf_field() }}
			<h2 class="  left">Lista de Dependencias   </h2> &nbsp&nbsp&nbsp
			<div class="col-md-1 col-sm-1 col-xs-1 right">
					<button type="submit" class="btn btn-success">Crear </button>
			</div>
			<div class=" col-md-3 col-sm-3 col-xs-6 right">				
					<input type="text" class="form-control" id="des_are" name="des_are" required placeholder=" Nueva  Sección / Programa" />
				@if ($errors->has('des_are'))
					<span class="help-block">
						<strong>{{ $errors->first('des_are') }}</strong>
					</span>
				@endif		
				<h5>Dependencia</h5>
			</div>
			<div class=" col-md-3 col-sm-3 col-xs-3 right">
				@if(!$tipoareas->isEmpty())
					<select id="tipos_area_id"  name="tipos_area_id" required class="form-control  col-md-4 col-xs-8" >
						<option value="" selected>Seleccionar</option>
						@foreach($tipoareas as $tipoarea)
							<option value="{{$tipoarea->id}}">{{$tipoarea->des_tip_are}} </option>
							
						@endforeach
					</select>
					@if ($errors->has('tipos_area_id'))
						<span class="help-block">
							<strong>{{ $errors->first('tipos_area_id') }}</strong>
						</span>
					@endif	
					<hr> 
				@endif	
				<h5> Tipo Dependencia</h5>
			</div>
		</form>	
		
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
