@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		
			<div class="login-body">
				<article class="container-login center-block">
					<section>
						<ul id="top-bar" class="nav nav-tabs nav-justified">
							<li class="active"><a >Iniciar Sesión</a></li>
							<li><a >Fundación Aluna </a></li>
						</ul>
						<div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
							<div id="login-access" class="tab-pane fade active in">
							<br/>					
								<form method="POST" action="{{ route('login') }}" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal">
									 {{ csrf_field() }}
									<div class="form-group{{ $errors->has('usuario') ? ' has-error' : '' }}">
										<label for="usuario" class="sr-only">Usuario</label>
											<input type="text" class="form-control"  id="usuario" name="usuario" id="login_value" value="{{ old('usuario') }}" required autofocus
												placeholder="usuario" tabindex="1" value="" />
												 @if ($errors->has('usuario'))
												<span class="help-block">
													<strong>{{ $errors->first('usuario') }}</strong>
												</span>
											@endif
									</div>
							
									<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
										<label for="password" class="sr-only">Contraseña</label>
											<input type="password" class="form-control" name="password" id="password" required
												placeholder="Password" value="" tabindex="2" />
												 @if ($errors->has('password'))
													<span class="help-block">
														<strong>{{ $errors->first('password') }}</strong>
													</span>
												@endif
									</div>
									<div class="form-group">
										<div class="checkbox">
											<label class="control-label" for="remember_me">
												<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}  value="1" class="" tabindex="3" /> Recordarme
											</label>
										</div>					 
									</div>
									<div class="form-group ">				
											<button type="submit" name="log-me-in" id="submit" tabindex="5" class="btn btn-lg btn-danger"> Iniciar Sesión</button>
									</div>
									<a class="btn btn-link" href="{{ route('password.request') }}">
												¿Olvidó su contraseña?
									</a>
								</form>			
							</div>
						</div>
					</section>
				</article>
			</div>
     
        </div>
    </div>
</div>
@endsection
