@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Rol</div>
                <div class="panel-body">
					<div class="row form-group">
						<label for="name" class="col-md-4 control-label">Nombre</label>
						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" value="{{ $role->name }}" disabled="disabled" required>
						</div>
					</div>
					<div class="row form-group">
						<label for="display_name" class="col-md-4 control-label">Nombre Para Mostrar</label>
						<div class="col-md-6">
							<input id="display_name" type="text" class="form-control" name="display_name" value="{{ $role->display_name }}" disabled="disabled" required>
						</div>
					</div>
					<div class="row form-group">
                        <label for="description" class="col-md-4 control-label">Descripción</label>
                        <div class="col-md-6">
                            <input id="description" type="text" class="form-control" name="description" value="{{ $role->description }}" disabled="disabled" required>
                        </div>
                    </div>
				</div>
				@if(!$permissions->isEmpty())
					<div class="panel-heading">Permisos Asociados</div>
					<div class="panel-body">
						<table class="table table-striped table-hover table-bordered" style="font-size:83%;overflow-x:scroll">
							<tr style="text-align:center">
								<th style="vertical-align:middle; text-align:center">
									Nombre
								</th>
								<th style="vertical-align:middle; text-align:center">
									Descripción
								</th>
							</tr>
							@foreach($permissions as $permission)
								<tr style="text-align:center">
									<td style="vertical-align:middle; text-align:center">
										{{ $permission->display_name }}
									</td>
									<td style="vertical-align:middle; text-align:center">
										{{ $permission->description }}
									</td>									
								</tr>
							@endforeach
						</table>
					</div>
				@endif
            </div>
        </div>
    </div>
</div>
@endsection
