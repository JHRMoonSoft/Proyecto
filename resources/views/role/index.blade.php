@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
				<div class="panel-heading">
					Listado de Roles
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
									Opciones 
								</th>
							</tr>
							@foreach($roles as $role)
								<tr style="text-align:center">
									<td style="vertical-align:middle; text-align:center">
										{{ $role->display_name }}
									</td>
									<td style="vertical-align:middle; text-align:center">
										{{ $role->description }}
									</td>
									<td style="vertical-align:middle; text-align:center">
									
										<a href="{{ url('/role/'.$role->id) }}"title="ver" class="btn btn-success glyphicon glyphicon-file btn-xs" data-title="ver"></a>
										<a href="{{ url('/role/'.$role->id.'/edit') }}"title="Editar" class="btn btn-primary glyphicon glyphicon-pencil btn-xs" data-title="Editar"></a></td>
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