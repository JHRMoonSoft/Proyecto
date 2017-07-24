@extends('layouts.app')

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          
		  
		  
       

        <div class="row" role="main">
            <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="">

					<div class="row">
						  <div class="col-md-4"><br>
							<h3>Workflow Seguros  <!--<small>Graph title sub-title</small>--></h3>
						  </div>
					</div>
				<!------------------------------------------------>
				
					<div class="col-md-12 col-sm-12 col-xs-12"><br>
						<!---------->	

					<div class="x_panel">
						<div class="x_title">
							<h2>Seguimiento</h2>
							<ul class="nav navbar-right panel_toolbox">
							   <li><p data-placement="top" data-toggle="tooltip" title="Regresar"><a href="/workflow/proceso" class="btn btn-default btn-xs" data-title="Ver"><span class="glyphicon glyphicon-arrow-left"></span></a></p>
							  </li>
							  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							  </li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
						  
							<div class="panel panel-default">
								<div class="table-responsive">
									<table class="table table-bordered table-hover vmiddle">
										<thead>
											<tr>
												<div class=" panel-heading text-center">
												<th>Fecha</th>
												<th>Actividad</th>
												<th>Usuario</th>
												<th>Comentario</th>
												</div>
											</tr>
										</thead>
										<tbody>
											@foreach($logs as $log)
											<tr>
												
												<td>{{$log->fec_log}}</td>
												<td>{{$log->des_act}}</td>
												<td>{{$log->username}}</td>
												<td>{{$log->obs_log}}</td>
												
											</tr>
											@endforeach
										
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<!-- Smart Wizard -->
					
					
					<!------------->
					 <div class="x_panel">
						<div class="x_title">
						  <h2>Actividad Realizada</h2>
						  <ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
						  </ul>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<fieldset disabled>
								<ul class="list-unstyled timeline">
							<li>
							  <div class="block">
								<div class="tags">
								  <a href="" class="tag">
									<span>Paso 1</span>
								  </a>
								</div>
								<div class="block_content">
								  <h2 class="title"> <a>Registro de terceros</a> </h2>
									<div class="form-group"><br>
										<div class="x_panel">
											 <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
											  <div class="form-group"><br>
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">IDENTIFICACION</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
												  <input type="text"   id="first-name"  value="{{$registros->campo0}}" required="required"  class="form-control col-md-7 col-xs-12">
												</div>
											  </div>
											  <div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NOMBRES</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
												  <input type="text" id="last-name" value="{{$registros->campo1}}" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
												</div>
											  </div>						 

											</form>
										</div>
									</div>
								</div>
							</li>
							<li>
							  <div class="block">
								<div class="tags">
								  <a href="" class="tag">
									<span>Paso 2</span>
								  </a>
								</div>
								<div class="block_content">
								  <h2 class="title"> <a>Registrar servicios</a> </h2>
									<div class="form-group"><br>
										<div class="x_panel"><br>			 
											<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"><br>
											  <div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TIPO SERVICIO<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
												  <input type="text" id="first-name" value="{{$registros->campo2}}"  required="required" class="form-control col-md-7 col-xs-12">
												</div>
											  </div>
											  <div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NUMERO SOLICITUD<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
												  <input type="text" id="last-name" value="{{$registros->campo3}}" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
												</div>
											  </div>
											  
											 
											</form>
										</div>
									</div>
								</div>
							  </div>
							</li>
						  </ul>
							
							</fieldset>
						</div>
					</div>
					<!---------->	

					<div class="x_panel">
						<div class="x_title">
							<h2>Dodumentos<small>Asociados de Captura</small></h2>
							<ul class="nav navbar-right panel_toolbox">
							  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							  </li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
						  
							<div class="panel panel-default">
								<div class="panel-heading text-center">
									<span><strong><span class="glyphicon glyphicon-folder-open"> </span> Archivos</strong></span>
								</div>
								<div class="table-responsive">
									<table class="table table-bordered table-hover vmiddle">
										<thead>
											<tr>
												<th>Consecutivo</th>	
												<th>Archivos</th>
												<th>Tipo Documento</th>
												<th>Acciones</th>
												
												
											</tr>
										</thead>
										<tbody>
											@foreach($documentos as $doc)
											<tr>
												
												<td>{{$doc->consecutivo}}</td>
												<td>{{$doc->archivo}}</td>
												<td>{{$doc->nom_tp_doc}}</td>
												<td class="text-center">
													<a href="/workflow/downloadfile/{{$doc->codigo}}/{{$doc->consecutivo}}"><span class="btn btn-sm btn-primary glyphicon glyphicon-file"></span></a>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<!-- Smart Wizard -->	
			  </div>
										
						
					</div>
				
				<!------------------------------------------------------->


				</div>
			</div>
          <br />
        </div>
        <!-- /page content -->
@stop
    
<!--
    jQuery
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
	Bootstrap
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    FastClick
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    NProgress
    <script src="../vendors/nprogress/nprogress.js"></script>
    Chart.js
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    gauge.js
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    bootstrap-progressbar
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    iCheck
    <script src="../vendors/iCheck/icheck.min.js"></script>
    Skycons
    <script src="../vendors/skycons/skycons.js"></script>
    Flot
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    Flot plugins
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    DateJS
    <script src="../vendors/DateJS/build/date.js"></script>
    JQVMap
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    bootstrap-daterangepicker
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    Custom Theme Scripts
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
-->