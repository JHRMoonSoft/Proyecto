@extends('layouts.app')

@section('content')
    <div class="x_panel">
	    <div class="x_title">
		
			<h2>Editar Usuario </h2> &nbsp&nbsp&nbsp
			<a  href="{{ url('/users/'.$users->id) }}"class="btn btn-danger  right" role="button">Ver </a>
			<a  href="{{ url('/users') }}" class="btn btn-default  right" role="button"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp&nbsp&nbspVolver al listado </a>
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/users/'.$users->id) }}">
			  {{ csrf_field() }}
				<input name="_method" type="hidden" value="PUT">						
				<input id="id" name="id" type="hidden" value="{{ $users->id }}">
				
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipo.Documento <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select id="tip_doc"  name="tip_doc" class="form-control col-md-7 col-xs-12" data-validate-length-range="7" data-validate-words="2" required="required">
							<option value=" " selected>Seleccionar</option>
							<option value="1" {{ $users->tip_doc == '1' ? ' selected':'' }}>CEDULA DE CIUDADANIA</option>
							<option value="2" {{ $users->tip_doc == '2' ? ' selected':'' }}>CEDULA DE EXTRANJERÍA</option>
							<option value="3" {{ $users->tip_doc == '3' ? ' selected':'' }}>PASAPORTE</option>
						</select>
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">No. Documento <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input  id="num_doc" name="num_doc" value="{{ $users->num_doc }}" type="text" required="required" data-validate-minmax="10,100" value="{{ old('num_doc') }}" class="form-control col-md-7 col-xs-12">
						@if ($errors->has('num_doc'))
							<span class="help-block">
								<strong>{{ $errors->first('num_doc') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="nom_usr"  name="nom_usr" value="{{ $users->nom_usr }}" type="text"  class="form-control col-md-7 col-xs-12" data-validate-length-range="4"  required="required"  value="{{ old('nom_usr') }}" required autofocus>
						@if ($errors->has('nom_usr'))
							<span class="help-block">
								<strong>{{ $errors->first('nom_usr') }}</strong>
							</span>
						@endif
					
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Apellidos <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="ape_usr"  name="ape_usr" value="{{ $users->ape_usr }}" type="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value="{{ old('ape_usr') }}"  required="required" >
						@if ($errors->has('ape_usr'))
							<span class="help-block">
								<strong>{{ $errors->first('ape_usr') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="usuario">Usuario <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="usuario" name="usuario" value="{{ $users->usuario }}" class="form-control col-md-7 col-xs-12"   required="required" type="text">
						@if ($errors->has('usuario'))
							<span class="help-block">
								<strong>{{ $errors->first('usuario') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Rol <span class="">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						@if(!$rolesGeneral->isEmpty())
							<select multiple="multiple" id="roles"  name="roles[]" class="form-control col-md-7 col-xs-12" required="required">
								@foreach($rolesGeneral as $role)
								<option value="{{$role->id}}" @if(in_array($role->id,$roles))selected="selected"@endif>{{$role->name}} {{$role->description}}</option>
								@endforeach
							</select>
						@endif
					</div>
				</div>
				
			
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Cargo <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						@if(!$cargos->isEmpty())
							<select id="crg_usr" name="crg_usr" class="form-control col-md-7 col-xs-12" required="required" value="{{ old('crg_usr') }}" >
								<option value="" selected>Seleccionar</option>
								@foreach($cargos as $cargo)
									<option value="{{$cargo->id}}"@if($cargo->id == $users->crg_usr) selected @endif> {{$cargo->des_crg}} </option>
								@endforeach
							</select>
						@endif
						@if ($errors->has('crg_usr'))
							<span class="help-block">
								<strong>{{ $errors->first('crg_usr') }}</strong>
							</span>
						@endif
					  
					</div>
				</div>
				
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Dpendencia <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						@if(!$areas->isEmpty())	
							<select id="dep_usr"  name="dep_usr" class="form-control col-md-7 col-xs-12" required="required" value="{{ old('dep_usr') }}" >
								<option value="" selected>Seleccionar</option>
								@foreach($areas as $area)
									<option value="{{$area->id}}"@if($area->id == $users->dep_usr) selected @endif> {{$area->des_are}} </option>
								@endforeach
							</select>
							
						@endif
						@if ($errors->has('dep_usr'))
							<span class="help-block">
								<strong>{{ $errors->first('dep_usr') }}</strong>
							</span>
						@endif
					</div>					
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="crd_usr">Coordinacion <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="crd_usr"  name="crd_usr" value="{{ $users->crd_usr }}"  data-validate-length-range="5,20" value="{{ old('crd_usr') }}" class="optional form-control col-md-7 col-xs-12">
						@if ($errors->has('crd_usr'))
							<span class="help-block">
								<strong>{{ $errors->first('crd_usr') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="dir_mail">Email <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="dir_mail" id="dir_mail" value="{{ $users->dir_mail }}" name="dir_mail" required="required" value="{{ old('dir_mail') }}" class="form-control col-md-7 col-xs-12">
						@if ($errors->has('dir_mail'))
							<span class="help-block">
								<strong>{{ $errors->first('dir_mail') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefono celular <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="tel_cel" id="tel_cel" name="tel_cel" value="{{ $users->tel_cel }}" required="required" value="{{ old('tel_cel') }}"  data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
						@if ($errors->has('tel_cel'))
							<span class="help-block">
								<strong>{{ $errors->first('tel_cel') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefono fijo </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="tel_fij" id="tel_fij" name="tel_fij" value="{{ $users->tel_fij }}" data-validate-length-range="8,20" value="{{ old('tel_fij') }}" class="form-control col-md-7 col-xs-12">
						@if ($errors->has('tel_fij'))
							<span class="help-block">
								<strong>{{ $errors->first('tel_fij') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="sta_usr">Activo</label>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="checkbox" id="sta_usr" name="sta_usr" value="{{ $users->sta_usr }}" class="js-switch" class="form-control col-md-7 col-xs-12" checked>  
						@if ($errors->has('sta_usr'))
							<span class="help-block">
								<strong>{{ $errors->first('sta_usr') }}</strong>
							</span>
						@endif
					
					</div><!--
					<label class="control-label col-md-2 col-sm-2 col-xs-12" for="telephone">Responsable</label>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="checkbox" class="js-switch" disabled="disabled"  class="form-control col-md-7 col-xs-12">  
					</div>-->
				</div>

				<div class="ln_solid"></div>
				<div class="form-group">
					<div class="col-md-6 col-md-offset-3">
					  <button type="reset" class="btn btn-primary">Cancelar</button>
					  <button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</div>
			</form>
        </div>
		
		 
	</div>
@endsection
