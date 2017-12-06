@extends('layouts.app')

@section('content')
    <div class="x_panel">
	    <div class="x_title">
		
			<h2>Informacion Personal </h2> &nbsp&nbsp&nbsp
			<a  href="{{ url('/users/'.$users->id.'/edit') }}" class="btn btn-info right" role="button">Editar</a>
			<a  href="{{ url('/users') }}" class="btn btn-default  right" role="button"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp&nbsp&nbspVolver al listado </a>
			<div class="clearfix"></div>
	    </div>
		<div class="x_content">
			<form class="form-horizontal"  role="form">
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipo.Documento <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select id="tip_doc"  name="tip_doc" disabled style="background:rgba(247, 247, 247, 0.57);" class="form-control col-md-7 col-xs-12" required="required">
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
					  <input  id="num_doc" name="num_doc" type="text" required="required" data-validate-minmax="10,100" value="{{$users->num_doc}}" disabled style="background:rgba(247, 247, 247, 0.57);" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="nom_usr"  name="nom_usr" type="text"  class="form-control col-md-7 col-xs-12"disabled style="background:rgba(247, 247, 247, 0.57);" data-validate-length-range="4"  required="required"  value="{{$users->nom_usr }}" required autofocus>
				</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Apellidos <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="ape_usr"  name="ape_usr" type="text" class="form-control col-md-7 col-xs-12" disabled style="background:rgba(247, 247, 247, 0.57);" data-validate-length-range="6" data-validate-words="2" value="{{$users->ape_usr }}"  required="required" >
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="usuario">Usuario <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
				    <input id="usuario" name="usuario" class="form-control col-md-7 col-xs-12"  value="{{$users->usuario}}" disabled style="background:rgba(247, 247, 247, 0.57);" required="required" type="text">
				</div>
				</div>
			
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Cargo <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="crg_usr" name="crg_usr" type="text" class="form-control col-md-7 col-xs-12"  disabled style="background:rgba(247, 247, 247, 0.57);" required="required" value="{{$users->crg_usr }}" >
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tipo. Dependencia <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					
						<select id="tip_dep" name="tip_dep" class="form-control col-md-7 col-xs-12" disabled style="background:rgba(247, 247, 247, 0.57);" data-validate-length-range="7" data-validate-words="2"  required="required">
							<option value="" selected>Seleccionar</option>
							<option value="1" {{ $users->tip_dep == '1' ? ' selected':'' }}>Area</option>
							<option value="2" {{ $users->tip_dep == '2' ? ' selected':'' }}>Seccion</option>
							<option value="3" {{ $users->tip_dep == '3' ? ' selected':'' }}>Programa</option>
						</select>
					
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Dpendencia <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="dep_usr" type="dep_usr" name="dep_usr" data-validate-length-range="5,20" value="{{$users->dep_usr}}" disabled style="background:rgba(247, 247, 247, 0.57);" class="optional form-control col-md-7 col-xs-12">
				</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="crd_usr">Coordinacion <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input id="crd_usr"  name="crd_usr" data-validate-length-range="5,20" value="{{$users->crd_usr }}" disabled style="background:rgba(247, 247, 247, 0.57);" class="optional form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="dir_mail">Email <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="dir_mail" id="dir_mail" name="dir_mail" required="required" value="{{$users->dir_mail }}"disabled style="background:rgba(247, 247, 247, 0.57);"  class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefono celular <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="tel_cel" id="tel_cel" name="tel_cel" required="required" value="{{$users->tel_cel }}"  disabled style="background:rgba(247, 247, 247, 0.57);" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
				</div>
				</div>
				<div class="item form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefono fijo </label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="tel_fij" id="tel_fij" name="tel_fij"  data-validate-length-range="8,20" value="{{$users->tel_fij}}" disabled style="background:rgba(247, 247, 247, 0.57);" class="form-control col-md-7 col-xs-12">
					</div>
				</div>

			</form>
				<div class="x_title">
					<h2>Roles  Asociados</h2> &nbsp&nbsp&nbsp
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<div class="table-responsive">
						<table id="datatable-buttons" class="table table-striped table-bordered ">
							<thead>
							   <tr>
									<th>Nombre</th>
									<th>Descripción</th>	
								</tr>
							</thead>
							<tbody>
								@foreach($roles as $role)
									<tr>
										<td>{{$role->name}}</td>
										<td>{{$role->description }}</td>
									</tr> 
								@endforeach
							</tbody>
						</table>
					</div>
				</div>

        </div>
		
		 
	</div>
@endsection
