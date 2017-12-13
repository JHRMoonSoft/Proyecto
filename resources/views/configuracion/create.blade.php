@extends('layouts.app')
@section('content')  

@section('x_content')

    <div class="x_panel">
	    <div class="x_title">
			
		<h2>Información  Empresa</h2> &nbsp&nbsp&nbsp
		<a  href="{{ url('/configuracion') }}" class="btn btn-default  right" role="button"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp&nbsp&nbspVolver </a>
				
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
			<form class="form-horizontal" method="POST" action="{{ url('/configuracion') }}">
			  {{ csrf_field() }}

				<!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a></p>-->
			  
				
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tip_empr">Tipo. Empresa<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					
						<select id="tip_empr" class="form-control col-md-7 col-xs-12" data-validate-length-range="7" data-validate-words="2" name="tip_empr"  required="required">
							<option value="" selected>Seleccionar</option>
							<option value="E.I.R.L">E.I.R.L</option>
							<option value="S.C">S.C</option>
							<option value="S.A">S.A</option>
							<option value="S.R.L">S.R.L</option>
							<option value="S.A.C">S.A.C</option>
							<option value="Fundación">Fundación</option>
							<option value="Asociación">Asociación</option>
							<option value="Unipersonal">Unipersonal</option>
							<option value="Persona natural">Persona natural</option>
						</select>
						@if ($errors->has('tip_empr'))
							<span class="help-block">
								<strong>{{ $errors->first('tip_empr') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="raz_soc">Razón social<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="raz_soc" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="raz_soc"  required="required" type="text">
						@if ($errors->has('raz_soc'))
							<span class="help-block">
								<strong>{{ $errors->first('raz_soc') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tip_doc">Tipo. Documento<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					
						<select id="tip_doc" class="form-control col-md-7 col-xs-12" data-validate-length-range="7" data-validate-words="2" name="tip_doc"  required="required">
							<option value=" " selected>Seleccionar</option>
							<option value="NIT">NIT</option>
							<option value="RUT">RUT</option>
						</select>
						@if ($errors->has('ip_doc'))
							<span class="help-block">
								<strong>{{ $errors->first('ip_doc') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_doc">No. Documento <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="num_doc" class="form-control col-md-7 col-xs-12" data-validate-length-range="11"  name="num_doc"  required="required" type="text">
						@if ($errors->has('num_doc'))
							<span class="help-block">
								<strong>{{ $errors->first('num_doc') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tel_fij">Telefono fijo <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="tel_fij" name="tel_fij" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
						@if ($errors->has('tel_fij'))
							<span class="help-block">
								<strong>{{ $errors->first('tel_fij') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tel_cel">Telefono celular </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="tel_cel" name="tel_cel"  data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
						@if ($errors->has('tel_cel'))
							<span class="help-block">
								<strong>{{ $errors->first('tel_cel') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="dir_mail">Email 
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="email" id="dir_mail" name="dir_mail"  class="form-control col-md-7 col-xs-12">
						@if ($errors->has('dir_mail'))
							<span class="help-block">
								<strong>{{ $errors->first('dir_mail') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="dir_empr">Dirección 
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="dir_empr" name="dir_empr"  class="form-control col-md-7 col-xs-12">
						@if ($errors->has('dir_empr'))
							<span class="help-block">
								<strong>{{ $errors->first('dir_empr') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="brr_empr">Barrio</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input  type="text" id="brr_empr" name="brr_empr" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
						@if ($errors->has('brr_empr'))
							<span class="help-block">
								<strong>{{ $errors->first('brr_empr') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ciu_empr">Ciudad</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="ciu_empr" type="text" name="ciu_empr" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
						@if ($errors->has('ciu_empr'))
							<span class="help-block">
								<strong>{{ $errors->first('ciu_empr') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pai_empr">Pais </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="pai_empr" type="text" name="pai_empr" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
						@if ($errors->has('pai_empr'))
							<span class="help-block">
								<strong>{{ $errors->first('pai_empr') }}</strong>
							</span>
						@endif
					</div>
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
@stop
        <!-- /page content -->
		<!--
		<script type="text/javascript">
			$(document).ready(function(){
				function onFinishCallback(){
				$('#wizard').smartWizard('showMessage','Finish Clicked');
			} 
			});
			
			
		</script>
		-->
@stop
<!--6581128-->
<!--229392650-->