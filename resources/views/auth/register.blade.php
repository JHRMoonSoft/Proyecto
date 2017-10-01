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
			<form class="form-horizontal form-label-left" novalidate>
			  
				<span class="section">Información Peronal</span>

				
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipo.Documento <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					
						<select id="tip_doc" name="tip_doc" class="form-control col-md-7 col-xs-12" data-validate-length-range="7" data-validate-words="2" name="name" required="required">
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
					  <input  id="num_doc" name="num_doc" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="nom_usr"  name="nom_usr"  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" type="text">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Apellidos <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="ape_usr"  name="ape_usr"  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  required="required" type="text">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Usuario <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="usuario" name="usuario" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"   required="required" type="text">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Rol <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					
						
							@if(!$rolesGeneral->isEmpty())
									<select id="roles" multiple="multiple" name="roles[]" class="form-control col-md-7 col-xs-12" required="required">
										@foreach($rolesGeneral as $role)
											<option value="{{$role->id}}">{{$role->name}} {{$role->description}}</option>
										@endforeach
									</select>
								@endif
						</select>
					
					</div>
				</div>
				<div class="form-group">
                            <label for="permissions" class="col-md-4 control-label">Permisos</label>
                            <div class="col-md-6">
                                @if(!$permissionsGeneral->isEmpty())
									<select multiple="multiple" name="permissions[]" id="permissions" class="form-control">
										@foreach($permissionsGeneral as $permission)
											<option value="{{$permission->id}}">{{$permission->name}} {{$permission->description}}</option>
										@endforeach
									</select>
								@endif
                            </div>
                        </div>
				
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Cargo <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="crg_usr" name="crg_usr" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  required="required" type="text">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipo. Dependencia <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					
						<select id="tip_ dep" name="tip_ dep" class="form-control col-md-7 col-xs-12" data-validate-length-range="7" data-validate-words="2"  required="required">
							<option value="volvo " selected>Seleccionar</option>
							<option>CEDULA DE CIUDADANIA</option>
							<option>EXTRANGERIA</option>
							<option>PASAPORTE</option>
						</select>
					
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Dpendencia <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="dep_usr" type="dep_usr" name="dep_usr" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Coordinacion <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="crd_usr"  name="crd_usr" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
					</div>
				</div>
								
				<div class="item form-group">
					<label for="password" class="control-label col-md-3">Contraseña<span class="required">*</span></label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
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
					  <input type="dir_mail" id="dir_mail" name="dir_mail" required="required" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefono celular <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="tel_cel" id="tel_cel" name="tel_cel" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefono fijo </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="tel_fij" id="tel_fij" name="tel_fij" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Activo</label>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="checkbox" id="sta_usr" class="js-switch" class="form-control col-md-7 col-xs-12">  
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
		
		  <!-- Productos modal -->		  

		  <div class="modal fade responsable" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel2">Nuevo Responsable </h4>
				</div>
				<div class="modal-body">
				
					<label for="">Responsable</label>
					<div class="form-group input-sm">
						<input class="form-control input-sm" id="inputsm" placeholder="Nombre completo" type="text">
					</div>
					
					<label for="">Seleccionar Asunto</label>
					<div class="form-group input-sm">
						<select id="tipo_identidad" class="form-control col-md-7 col-xs-12" data-validate-length-range="7" data-validate-words="2" name="name" placeholder=" ejemplo" required="required">
							<option value="volvo " selected>Seleccionar</option>
							<option>COMPRA PRODUCTOS</option>
							<option>COMPRA INTERNA </option>
							<option>OTROS</option>
						</select>
					</div>
					
					<div class="form-group input-sm">
						<input type="checkbox" class="js-switch">   Activo
					</div>
					
				</div>
				<div class="modal-footer"><!--
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
				  <button type="submit" class="btn btn-danger">Cancelar</button>
				  <button type="button" class="btn btn-primary">Guardar</button>
				</div>

			  </div>
			</div>
		  </div>
		  <!-- /modals -->
	</div>
@endsection
