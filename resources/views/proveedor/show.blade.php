@extends('layouts.app')
@section('content')  
@section('pagetitle')
  <h3>Formato de Compras</h3> 
@stop
@section('x_search') 
	<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
						
		<div class="input-group">
		<input type="text" class="form-control" placeholder="Search for...">
		<span class="input-group-btn">
				  <button class="btn btn-default" type="button">Go!</button> 
			  </span>
		</div> 
	</div>
	
@stop 

@section('x_content') 
	

    <div class="x_panel"> 
	    <div class="x_title">
			<h2>Detalle Proveedor </h2> &nbsp&nbsp&nbsp
						
			<a  href="/proveedor/edit" class="btn btn-warning" role="button">Editar</a>
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

				<!-- <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a></p>-->
			  
				<span class="section">Información del  Proveedor</span>

				
			
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Razón social<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" disabled="disabled" required="required" type="text">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipo. Documento<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					
						<select id="tipo_identidad" class="form-control col-md-7 col-xs-12" data-validate-length-range="7" data-validate-words="2" disabled="disabled" name="name" required="required">
							<option value="volvo " selected>Seleccionar</option>
							<option>NIT</option>
							<option>RUT</option>
						</select>
					
					</div>
				</div>
				
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">No. Documento <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" disabled="disabled"name="name"  required="required" type="text">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefono fijo <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" disabled="disabled" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefono celular </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" disabled="disabled" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="email" id="email" name="email" required="required" disabled="disabled" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Dirección </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="number" id="number" name="number" disabled="disabled" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Barrio</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="occupation" type="text" name="occupation" disabled="disabled"  data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Ciudad</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="occupation" type="text" name="occupation" disabled="disabled" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Pais </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" disabled="disabled" class="optional form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Observación  </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="occupation" type="text" name="occupation" data-validate-length-range="10,40" disabled="disabled" class="optional form-control col-md-7 col-xs-12">
					</div>
				</div>
				<fieldset disabled>
					<div class="control-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Categorias</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <input id="tags_1" type="text" class="tags form-control" readonly="readonly"  value="social, adverts, sales" />
						  <div id="suggestions-container"disabled="disabled"  style="position: relative; float: left;  margin: 5px;"></div>
						</div>
					</div>
				</fieldset>		
				
				<div class="ln_solid"></div>
				
			</form>
			
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