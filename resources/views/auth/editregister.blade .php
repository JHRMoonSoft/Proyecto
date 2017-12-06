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
						
			<!--
			<button type="button" class="btn btn-warning " data-toggle="modal" data-target=".responsable">Responsable</button>-->
			<!--
			<ul class="nav navbar-right panel_toolbox">
			
			  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
			  </li>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
				<ul class="dropdown-menu" role="menu">
				  <li><a href="#">Settings 1</a>
				  </li>
				  <li><a href="#">Settings 2</a>
				  </li>
				</ul>
			  </li>
			  <li><a class="close-link"><i class="fa fa-close"></i></a>
			  </li>
			</ul>-->
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<form class="form-horizontal form-label-left" novalidate>
			  
				<span class="section">Información Peronal</span>

				
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipo.Documento <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					
						<select id="tip_doc"  name="tip_doc" class="form-control col-md-7 col-xs-12" data-validate-length-range="7" data-validate-words="2" required="required">
							<option value=" " selected>Seleccionar</option>
							<option value="1" {{ $users->tip_doc == '1' ? ' selected':'' }}>CEDULA DE CIUDADANIA</option>
							<option value="CEDULA DE EXTRANJERÍA" {{ $users->tip_doc == 'CEDULA DE EXTRANJERÍA' ? ' selected':'' }}>CEDULA DE EXTRANJERÍA</option>
							<option value="PASAPORTE" {{ $users->tip_doc == 'PASAPORTE' ? ' selected':'' }}>PASAPORTE</option>
						</select>
					
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">No. Documento <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="number" id="number" name="number" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Apellidos <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name"  required="required" type="text">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Cargo <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name"  required="required" type="text">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipo. Dependencia <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					
						<select id="tipo_identidad" class="form-control col-md-7 col-xs-12" data-validate-length-range="7" data-validate-words="2" name="name" required="required">
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
					  <input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Coordinacion <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Rol <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					
						<select id="tipo_identidad" class="form-control col-md-7 col-xs-12" data-validate-length-range="7" data-validate-words="2" name="name"  required="required">
							<option value="volvo " selected>Seleccionar</option>
							<option>ADMINISTRADOR</option>
							<option>COMPRAS</option>
							<option>GENERAL</option>
						</select>
					
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Usuario <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name"  required="required" type="text">
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
					  <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefono celular <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefono fijo </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Activo</label>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<input type="checkbox" class="js-switch" class="form-control col-md-7 col-xs-12">  
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
