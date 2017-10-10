@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="x_panel">
	    <div class="x_title">
			<h2>Nuevo Usuario</h2> &nbsp&nbsp&nbsp
			
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<form class="form-horizontal" method="POST" action="{{ route('register') }}">
			  
				<span class="section">Información Peronal</span>

				
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipo.Documento <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select id="tip_doc"  name="tip_doc[]" class="form-control col-md-7 col-xs-12" required="required">
					
							<option value="volvo " selected>Seleccionar</option>
							<option>CEDULA DE CIUDADANIA</option>
							<option>CEDULA EXTRANGERA</option>
							<option>PASAPORTE</option>
							
						</select>
					
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">No. Documento <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input  id="num_doc" name="num_doc" type="text" required="required" data-validate-minmax="10,100" value="{{ old('num_doc') }}" class="form-control col-md-7 col-xs-12">
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
					  <input id="nom_usr"  name="nom_usr" type="text"  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required"  value="{{ old('nom_usr') }}" required autofocus>
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
					  <input id="ape_usr"  name="ape_usr" type="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value="{{ old('ape_usr') }}"  required="required" >
						@if ($errors->has('mrc_electr'))
							<span class="help-block">
								<strong>{{ $errors->first('mrc_electr') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Usuario <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="usuario" name="usuario" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"   required="required" type="text">
						@if ($errors->has('usuario'))
							<span class="help-block">
								<strong>{{ $errors->first('usuario') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Rol <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						@if(!$rolesGeneral->isEmpty())
							<select id="roles"  name="roles[]" class="form-control col-md-7 col-xs-12" required="required">
								@foreach($rolesGeneral as $role)
									<option value="{{$role->id}}">{{$role->name}} {{$role->description}}</option>
								@endforeach
							</select>
						@endif
					</div>
				</div>
			
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Cargo <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="crg_usr" name="crg_usr" type="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  required="required" value="{{ old('crg_usr') }}" >
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipo. Dependencia <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					
						<select id="tip_ dep" name="tip_ dep" class="form-control col-md-7 col-xs-12" data-validate-length-range="7" data-validate-words="2"  required="required">
							<option value="volvo " selected>Seleccionar</option>
							<option>Área</option>
							<option>Sección</option>
							<option>Programa</option>
						</select>
					
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Dpendencia <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="dep_usr" type="dep_usr" name="dep_usr" data-validate-length-range="5,20" value="{{ old('dep_usr') }}" class="optional form-control col-md-7 col-xs-12">
						@if ($errors->has('dep_usr'))
							<span class="help-block">
								<strong>{{ $errors->first('dep_usr') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Coordinacion <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="crd_usr"  name="crd_usr" data-validate-length-range="5,20" value="{{ old('dep_usr') }}" class="optional form-control col-md-7 col-xs-12">
						@if ($errors->has('crd_usr'))
							<span class="help-block">
								<strong>{{ $errors->first('crd_usr') }}</strong>
							</span>
						@endif
					</div>
				</div>
								
				<div class="item form-group">
					<label for="password" class="control-label col-md-3">Contraseña<span class="required">*</span></label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
						 @if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
					
					</div>
				</div>
				<div class="item form-group">
					<label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Confirmar contraseña <span class="required">*</span></label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="password-confirm" type="password-confirm" name="password-confirm" data-validate-linked="password-confirm" class="form-control col-md-7 col-xs-12" required="required">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="dir_mail">Email <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="dir_mail" id="dir_mail" name="dir_mail" required="required" value="{{ old('pat_auto') }}" class="form-control col-md-7 col-xs-12">
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
					  <input type="tel_cel" id="tel_cel" name="tel_cel" required="required" value="{{ old('tel_cel') }}"  data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
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
					  <input type="tel_fij" id="tel_fij" name="tel_fij" required="required" data-validate-length-range="8,20" value="{{ old('tel_fij') }}" class="form-control col-md-7 col-xs-12">
						@if ($errors->has('tel_fij'))
							<span class="help-block">
								<strong>{{ $errors->first('tel_fij') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Activo</label>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="checkbox" id="sta_usr" class="js-switch" class="form-control col-md-7 col-xs-12">  
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
					  <button type="submit" class="btn btn-primary">Cancelar</button>
					  <button id="send" type="submit" class="btn btn-success">Guardar</button>
					</div>
				</div>
			</form>
        </div>
		
		 
	</div>
@endsection
