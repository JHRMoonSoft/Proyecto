@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
				<div class="panel-heading">
					Listado de Permisos
				</div>
				<div class="panel-body">
					<table class="table table-striped table-hover table-bordered" style="font-size:83%;overflow-x:scroll">
							<tr style="text-align:center">
								<th style="vertical-align:middle; text-align:center">
									Nombre
								</th>
								<th style="vertical-align:middle; text-align:center">
									Descripcion
								</th>
								<th style="vertical-align:middle; text-align:center">
									Detalles
								</th>
							</tr>
							@foreach($permissions as $permission)
								<tr style="text-align:center">
									<td style="vertical-align:middle; text-align:center">
										{{ $permission->name }}
									</td>
									<td style="vertical-align:middle; text-align:center">
										{{ $permission->description }}
									</td>
									<td style="vertical-align:middle; text-align:center">
										<a href="{{ url('/permission/'.$permission->id) }}">Ver</a>
										<br/>
										<a href="{{ url('/permission/'.$permission->id.'/edit') }}">Editar</a>
									</td>
								</tr>
							@endforeach
						</table>
				</div>
			</div>
        </div>
    </div>
</div>
@stop