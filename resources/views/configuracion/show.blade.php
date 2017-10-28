@extends('layouts.app')
@section('content')  


@section('x_content')

    <div class="x_panel">
	    <div class="x_title">
			<h2> Información de la Empresa</h2> &nbsp&nbsp&nbsp
						
			<a  href="/empresa/edit" class="btn btn-warning" role="button">Editar</a>
		
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<form class="form-horizontal" >
				
				<!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a></p>-->
			  				
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tip_empr">Tipo. Empresa<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					
						<select id="tip_empr"   disabled style="background:#fff;"="disabled style="background:#fff;"" class="form-control col-md-7 col-xs-12" data-validate-length-range="7" data-validate-words="2" name="name"  required="required">
							<option value="" selected>Seleccionar</option>
							<option value="E.I.R.L" {{ $configuracion->tip_empr == 'E.I.R.L' ? ' selected':'' }}>E.I.R.L</option>
							<option value="S.C"{{ $configuracion->tip_empr == 'S.C' ? ' selected':'' }}>S.C</option>
							<option value="S.A"{{ $configuracion->tip_empr == 'S.A' ? ' selected':'' }}>S.A</option>
							<option value="S.R.L"{{ $configuracion->tip_empr == 'S.R.L' ? ' selected':'' }}>S.R.L</option>
							<option value="S.A.C"{{ $configuracion->tip_empr == 'S.A.C' ? ' selected':'' }}>S.A.C</option>
							<option value="Fundación" {{ $configuracion->tip_empr == 'Fundación' ? ' selected':'' }}>Fundación</option>
							<option value="Asociación"{{ $configuracion->tip_empr == 'Asociación' ? ' selected':'' }}>Asociación</option>
							<option value="Unipersonal"{{ $configuracion->tip_empr == 'Unipersonal' ? ' selected':'' }}>Unipersonal</option>
							<option value="Persona natural"{{ $configuracion->tip_empr == 'Persona natural' ? ' selected':'' }}>Persona natural</option>
						</select>
					
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="raz_soc">Razón social<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="raz_soc"  value="{{ $configuracion->raz_soc }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" disabled style="background:#fff;"="disabled style="background:#fff;"" name="name"  required="required" type="text">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tip_doc">Tipo. Documento<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					
						<select id="tip_doc" class="form-control col-md-7 col-xs-12" data-validate-length-range="7" data-validate-words="2"  disabled style="background:#fff;"="disabled style="background:#fff;"" name="name"  required="required">
							<option value="" selected>Seleccionar</option>
							<option value="NIT"{{ $configuracion->tip_doc == 'NIT' ? ' selected':'' }}>NIT</option>
							<option value="RUT"{{ $configuracion->tip_doc == 'RUT' ? ' selected':'' }}>RUT</option>
						</select>
					
					</div>
				</div>
				
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="num_doc">No. Documento <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="num_doc"  value="{{ $configuracion->num_doc }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" disabled style="background:#fff;"="disabled style="background:#fff;""  required="required" type="text">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tel_fij">Telefono fijo <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="tel_fij" name="tel_fij" value="{{ $configuracion->tel_fij }}" required="required" data-validate-length-range="8,20" disabled style="background:#fff;"="disabled style="background:#fff;""  class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tel_cel">Telefono celular </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="tel_cel" name="tel_cel" value="{{ $configuracion->tel_cel }}" required="required" data-validate-length-range="8,20"  disabled style="background:#fff;"="disabled style="background:#fff;"" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="dir_mail">Email 	</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="email" id="dir_mail" name="dir_mail" value="{{ $configuracion->dir_mail }}" required="required" disabled style="background:#fff;"="disabled style="background:#fff;"" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="dir_empr">Dirección </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" id="dir_empr" name="dir_empr" value="{{ $configuracion->dir_empr }}" required="required" disabled style="background:#fff;"="disabled style="background:#fff;"" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="brr_empr">Barrio</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="brr_empr" type="text" name="brr_empr" value="{{ $configuracion->brr_empr }}" data-validate-length-range="5,20" disabled style="background:#fff;"="disabled style="background:#fff;""  class="optional form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ciu_empr">Ciudad</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="ciu_empr" type="text" name="ciu_empr" value="{{ $configuracion->ciu_empr }}" data-validate-length-range="5,20" disabled style="background:#fff;"="disabled style="background:#fff;"" class="optional form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pai_empr">Pais </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="pai_empr" type="text" name="pai_empr" value="{{ $configuracion->pai_empr }}" data-validate-length-range="5,20" disabled style="background:#fff;"="disabled style="background:#fff;"" class="optional form-control col-md-7 col-xs-12">
					</div>
				</div>
				
				
				<div class="ln_solid"></div>
			</form>
        </div>
		
		 
	</div>		
@stop
