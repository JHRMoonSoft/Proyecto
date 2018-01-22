@extends('layouts.app')
@section('content') 
@section('x_content')
	

    <div class="x_panel">
	    <div class="x_title">
			<h2>Editar Proveedor</h2> &nbsp&nbsp&nbsp
			<a  href="{{ url('/proveedor/'.$proveedors->id) }}"class="btn btn-danger  right" role="button">Ver </a>
			<a  href="{{ url('/proveedor') }}" class="btn btn-default  right" role="button"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp&nbsp&nbspVolver al listado </a>
			
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
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/proveedor/'.$proveedors->id) }}">
				{{ csrf_field() }}
				<input name="_method" type="hidden" value="PUT">						
				<input id="id" name="id" type="hidden" value="{{ $proveedors->id }}">
				<!-- <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a></p>-->
		
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="raz_soc">Razón social<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="raz_soc" class="form-control col-md-7 col-xs-12" data-validate-length-range="11"  name="raz_soc" value="{{$proveedors->raz_soc}}"  required="required" type="text">
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
					
						<select id="tip_doc" class="form-control col-md-7 col-xs-12" data-validate-length-range="7"  name="tip_doc" value="{{$proveedors->tip_doc}}" required="required">
							<option value=" " selected>Seleccionar</option>
							<option value="NIT" {{ $proveedors->tip_doc == 'NIT' ? ' selected':'' }}>NIT</option>
							<option value="RUT" {{ $proveedors->tip_doc == 'RUT' ? ' selected':'' }}>RUT</option>
						</select>
					</div>
				</div>
				
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_doc">No. Documento <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="num_doc" class="form-control col-md-7 col-xs-12" data-validate-length-range="10"  name="num_doc" value="{{$proveedors->num_doc}}"  required="required" type="text">
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
					  <input type="text" id="tel_fij" name="tel_fij" value="{{$proveedors->tel_fij}}" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
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
					  <input type="text" id="tel_cel" name="tel_cel" value="{{$proveedors->tel_cel}}" class="form-control col-md-7 col-xs-12">
						@if ($errors->has('tel_cel'))
							<span class="help-block">
								<strong>{{ $errors->first('tel_cel') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Categorias 	</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						  @if(!$categoriasGeneral->isEmpty())
								<select multiple="multiple" id="categorias"  name="categorias[]" class="form-control col-md-7 col-xs-12" >
									@foreach($categoriasGeneral as $categoria)
									<option value="{{$categoria->id}}" @if(in_array($categoria->id,$categorias))selected="selected"@endif>{{$categoria->des_cat}}</option>
									@endforeach
								</select>
							@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="dir_mail">E-mail </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="email" id="dir_mail" name="dir_mail" value="{{$proveedors->dir_mail}}" class="form-control col-md-7 col-xs-12">
						@if ($errors->has('dir_mail'))
							<span class="help-block">
								<strong>{{ $errors->first('dir_mail') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="dir_prov">Dirección </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="dir_prov" name="dir_prov" value="{{$proveedors->dir_prov}}"data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
						@if ($errors->has('dir_prov'))
							<span class="help-block">
								<strong>{{ $errors->first('dir_prov') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="brr_prov">Barrio</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="brr_prov" type="text" name="brr_prov" value="{{$proveedors->brr_prov}}" class="optional form-control col-md-7 col-xs-12">
						@if ($errors->has('brr_prov'))
							<span class="help-block">
								<strong>{{ $errors->first('brr_prov') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ciu_prov">Ciudad</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="ciu_prov" type="text" name="ciu_prov" value="{{$proveedors->ciu_prov}}" class="optional form-control col-md-7 col-xs-12">
						@if ($errors->has('ciu_prov'))
							<span class="help-block">
								<strong>{{ $errors->first('ciu_prov') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pai_prov">Pais </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="pai_prov" type="text" name="pai_prov" value="{{$proveedors->pai_prov}}"  class="optional form-control col-md-7 col-xs-12">
						@if ($errors->has('pai_prov'))
							<span class="help-block">
								<strong>{{ $errors->first('pai_prov') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="obs_prov">Observación  </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="obs_prov" type="text" name="obs_prov" value="{{$proveedors->obs_prov}}" class="optional form-control col-md-7 col-xs-12">
						@if ($errors->has('obs_prov'))
							<span class="help-block">
								<strong>{{ $errors->first('obs_prov') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="ln_solid"></div>
				<div class="form-group">
					<div class="col-md-6 col-md-offset-3">
					  <button type="reset"class="btn btn-danger">Borrar</button>
					  <button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</div>
			</form>
			
        </div>
		
    </div>
		
@stop
