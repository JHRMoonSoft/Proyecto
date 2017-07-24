@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Rol</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/role/'.$role->id) }}">
                        {{ csrf_field() }}
						<input name="_method" type="hidden" value="PUT">						
						<input id="id" name="id" type="hidden" value="{{ $role->id }}">
						
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $role->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
                            <label for="display_name" class="col-md-4 control-label">Nombre Para Mostrar</label>

                            <div class="col-md-6">
                                <input id="display_name" type="text" class="form-control" name="display_name" value="{{ $role->display_name }}" required autofocus>

                                @if ($errors->has('display_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('display_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Descripción</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ $role->description }}" required autofocus>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="permissions" class="col-md-4 control-label">Permisos</label>
                            <div class="col-md-6">
                                @if(!$permissionsGeneral->isEmpty())
									<select multiple="multiple" name="permissions[]" id="permissions" class="form-control">
										@foreach($permissionsGeneral as $permission)
										<option value="{{$permission->id}}" @if(in_array($permission->id,$permissions))selected="selected"@endif>{{$permission->name}} {{$permission->description}}</option>
										@endforeach
									</select>
								@endif
                            </div>
                        </div>
						
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Editar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
