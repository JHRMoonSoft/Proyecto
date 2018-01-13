@extends('layouts.app')

@section('content')
  <div class="x_panel">
	    <div class="x_title">
			<h2>Listado de  Cargos </h2> &nbsp&nbsp&nbsp
			
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<div class="table-responsive">
				<table id="datatable-buttons" class="table table-striped table-bordered ">
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
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/cargo') }}">
						{{ csrf_field() }}
						<tr>
						  <td class="text-center">Nuevo</td>
							<td>
								<div class="col-md-9 col-sm-9 col-xs-9">
									<input type="text" class="form-control" id="des_crg" name="des_crg"/>
									@if ($errors->has('des_crg'))
										<span class="help-block">
											<strong>{{ $errors->first('des_crg') }}</strong>
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
