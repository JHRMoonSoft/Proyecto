@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Permiso</div>
                <div class="panel-body">
					<div class="row form-group">
						<label for="name" class="col-md-4 control-label">Nombre</label>
						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" value="{{ $permission->name }}" disabled="disabled" required>
						</div>
					</div>
					<div class="row form-group">
						<label for="display_name" class="col-md-4 control-label">Nombre Para Mostrar</label>
						<div class="col-md-6">
							<input id="display_name" type="text" class="form-control" name="display_name" value="{{ $permission->display_name }}" disabled="disabled" required>
						</div>
					</div>
					<div class="row form-group">
                        <label for="description" class="col-md-4 control-label">Descripción</label>
                        <div class="col-md-6">
                            <input id="description" type="text" class="form-control" name="description" value="{{ $permission->description }}" disabled="disabled" required>
                        </div>
                    </div>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
