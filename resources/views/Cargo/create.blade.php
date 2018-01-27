@extends('layouts.app')

@section('content')
  <div class="x_panel">
	    <div class="x_title">
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/cargo') }}">
				{{ csrf_field() }}
				<h2 class="  left">Lista de Cargos   </h2> &nbsp&nbsp&nbsp
				<div class="col-md-1 col-sm-1 col-xs-1 right">
						<button type="submit" class="btn btn-success">Crear</button>
				</div>
				<div class=" col-md-3 col-sm-3 col-xs-6 right">				
					<input type="text" class="form-control" id="des_crg" name="des_crg" required placeholder=" Nuevo Cargo"/>
					@if ($errors->has('des_crg'))
						<span class="help-block">
							<strong>{{ $errors->first('des_crg') }}</strong>
						</span>
					@endif	

				</div>
				<div class=" col-md-2 col-sm-2 col-xs-2 right">				
					
				</div>
			</form>	
			
			<div class="clearfix"></div>
	    </div>
		<div class="x_content"><br/>
			<div class="table-responsive">
				<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
				  <thead>
				   <tr>
						<th class="text-center">Código</th>
						<th class="text-center">Detalle Cargos </th>
						<th class="text-center">Fecha de Creación</th>
						<th class="text-center">Fecha de Modificación</th>
						<!--<th>Eliminar</th>-->
					</tr>
				  </thead>
				  <tbody>
					@foreach($cargos as $cargo)
						<tr>
							<td>{{ $cargo->id}}</td>
							<td>{{ $cargo->des_crg}}</td>
							<td>{{ $cargo->created_at->format('Y-m-d') }}</td>	
							<td>{{ $cargo->updated_at->format('Y-m-d') }}</td>
						
						</tr>                       
					@endforeach 
				  </tbody>
				</table>
			</div>
        </div>
		
	</div>
@endsection
