<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Scripts -->

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <title>{{ config('app.name', 'Fundacion Aluna') }}</title>
    <!-- Bootstrap -->
	<link href="{{ asset('css/workflow/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- Font Awesome -->
    <link href="{{ asset('css/workflow/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <!-- NProgress -->
	<link href="{{ asset('css/workflow/vendors/nprogress/nprogress.css') }}" rel="stylesheet"/>
	<!-- iCheck -->
    <link href="{{ asset('css/workflow/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('css/workflow/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('css/workflow/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('css/workflow/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
	<!-- Datatables -->
    <link href="{{ asset('css/workflow/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/workflow/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/workflow/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/workflow/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/workflow/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
	<!-- checkboxes  -->
	 <link href="{{ asset('https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
	<link href="{{ asset('css/workflow/build/css/custom.min.css') }}" rel="stylesheet"/>
	

    <!-- bootstrap-wysiwyg -->
	<link href="{{ asset('css/workflow/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet"/>
    <!-- Select2 -->
	<link href="{{ asset('css/workflow/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet"/>
    <!-- Switchery -->
	<link href="{{ asset('css/workflow/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet"/>
    <!-- starrr -->
	<link href="{{ asset('css/workflow/vendors/starrr/dist/starrr.css') }}" rel="stylesheet"/>
		
	<!-- Font Awesome -->
	<link href="{{ asset('css/workflow/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"/>
 
  </head>
   <body class="nav-md">
     @section('containerbody')
		 <div class="container body">
      <div class="main_container">
	
					<!--panel texto -->
					
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
			   <a href="/home" class="site_title"><img src="{{URL::asset('/css/workflow/images/logoaluna.png')}}" >&nbsp;<span>Fundacion Aluna!</span></a>
            </div>
            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Home</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Requisición  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/requisicion/create">Nueva RQS</a></li>				  
					  <li><a href="/recibirRQS">Recibir RQS</a></li>
                      <li><a href="/requisicion">Historial RQS</a></li>
                    </ul>
                  </li>
                </ul>
              </div> 
			   <div class="menu_section">
                <h3>Panel de Configuración </h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-building"></i> Empresa <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/configuracion/create">Empresa</a></li>
					  <li><a href="/area/create">Área / Programa  </a></li>
					  <li><a href="/cargo/create">Cargos</a></li>
					  
                     <!-- <li><a href="projects.html">Projects</a></li>-->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/register">Nuevo Usuario</a></li>
                      <li><a href="/users">Listado de Usuarios</a></li>
					   <!--<li><a href="page_500.html">500 Error</a></li>-->
                    </ul>
                  </li>
				    <li><a><i class="fa fa-cog"></i>Roles <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/role/create">Nuevo Rol</a></li>
                      <li><a href="/role">Listado de Roles</a></li>
                      <!--<li><a href="page_500.html">500 Error</a></li>-->
                    </ul>
                  </li>
				   <li><a><i class="fa fa-cogs"></i> Permisos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/permisos/create">Nuevo Permisos </a></li>
                      <li><a href="/permisos">Listado de Permisos </a></li>
                      <!--<li><a href="page_500.html">500 Error</a></li>-->
                    </ul>
                  </li>
				  <li><a><i class="fa fa-user-plus"></i> Proveedores<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/proveedor/create"> Nuevo Proveedor</a></li>
                      <li><a href="/proveedor">Listado de Proveedores</a></li>
                      <!--<li><a href="login.html">Login Page</a></li>-->
                    </ul>
                  </li>
				   <li><a><i class="fa fa-dropbox"></i>Almacén<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/categoria">Categorías</a></li>
                      <li><a href="/producto">Productos</a></li>
					   <li><a href="/unidad">Unidad</a></li>
					   <li><a href="/conversion"> Unidad empaque</a></li>
					   <li><a href="/almacen">Productos almacén</a></li>
					   <li><a href="/almacen/create">Kárdex almacén</a></li>
                    </ul>
                  </li>
               </ul>
              </div>
			     <div class="menu_section">
                <h3>Panel de Opciones</h3>
                <ul class="nav side-menu">
				
                  <li><a><i class="fa fa-pencil-square-o"></i> Gestionar RQS<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">   
                      <li><a href="/autorizarRQS">Autorizar RQS</a></li>
                      <li><a href="/entregarRQS">Entregar RQS</a></li>
					   <li><a href="/requisicion">Historial RQS</a></li>
                    </ul>
                  </li>
				   <li><a><i class="fa fa-check-square-o"></i>Solicitud de compra <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					<li><a href="/solicitudcompra/create">Nueva SCP</a></li>
                      <li><a href="/solicitudcompra">Historial SCP</a></li>
                      <!--<li><a href="profile.html">Solicitud de compras </a></li>-->
                    </ul>
                  </li>
				  <li><a><i class=" fa fa-file-text-o"></i> Orden de compra <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/ordencompra/create"> Nueva OCP</a></li>
                      <li><a href="/ordencompra">Historial OCP</a></li>
                      <!--<li><a href="login.html">Login Page</a></li>-->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-file"></i> Factura  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/factura/create">Nueva Factura </a></li>
					   <li><a href="/factura">Historial Factura  </a></li>
                      <!--<li><a href="login.html">Login Page</a></li>-->
                    </ul>
                  </li>
				</ul>
              </div>


            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
				<ul class="nav  navbar-left">
				  <div class="nav toggle">
					<a id="menu_toggle"><i class="fa fa-bars"></i></a>
				  </div>
				</ul>
				
				<ul class="nav navbar-nav navbar-left">
					<li class="">
					  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					    CONFIGURACIÓN  
						<span class=" fa fa-angle-down"></span>
					  </a>
						<ul class="dropdown-menu dropdown-usermenu pull-left">
							<li><a href="/configuracion">Empresa</a></li>
							<li><a href="/area/create">Área / Programa  </a></li>
							<li><a href="/cargo/create">Cargos</a></li>
							<li><a href="/users"> Usuarios  </a></li>
							<li><a href="/role"> Roles  </a></li>
							<li><a href="/permisos">Permisos  </a></li>								
							<li><a href="/proveedor">Proveedores </a></li>
							<li><a href="/almacen"> Almacén</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-left">
					<li class="">
					  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					   OPCIONES 
						<span class=" fa fa-angle-down"></span>
					  </a>
						<ul class="dropdown-menu dropdown-usermenu pull-left">
							<li><a href="/requisicion"> Gestionar RQS </a></li>
							<li><a href="/solicitudcompra"> Solicitud de compra</a></li>
							<li><a href="/ordencompra"> Orden de compra</a></li>
							<li><a href="/factura"> Factura</a></li>
							
							
							
						</ul>
					</li>
				</ul><!--
				<ul class="nav navbar-nav navbar-left">
					<li class="">
					  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					  ALMACEN
						<span class=" fa fa-angle-down"></span>
					  </a>
						<ul class="dropdown-menu dropdown-usermenu pull-left">
							<li><a href="javascript:;"> Categorías</a></li>
							<li><a href="javascript:;"> Productos </a></li>
							<li><a href="javascript:;">Unidad </a></li>
							<li><a href="javascript:;">Unidad Empaque </a></li>
							<li><a href="javascript:;">Esatado Almacén </a></li>
						</ul>
					</li>
				</ul>-->
			  

				<ul class="nav navbar-nav navbar-right">
					<li class="">
					  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="{{URL::asset('/css/workflow/images/user.png')}}" alt="">{{Session('username')}}
						<span class=" fa fa-angle-down"></span>
					  </a>
					  <ul class="dropdown-menu dropdown-usermenu pull-right">
						<li><a href="{{ url('/users/'.Auth::user()->id) }}" > Perfil</a></li><!--
						<li>
						  <a href="javascript:;">
							<span class="badge bg-red pull-right">50%</span>
							<span>Cambiar Contraseña</span>
						  </a>
						</li>-->
						<li><a href="javascript:;">Cambiar Contraseña</a></li>
						<li><a href="{{ route('logout') }}" 
								onclick="event.preventDefault();document.getElementById('logout-form').submit();">
								<i class="fa fa-sign-out pull-right"></i>Cerrar Sesión
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
							</form>
						</li>
						
					  </ul>
					</li>

					<li role="presentation" class="dropdown">
					  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-envelope-o"></i>
						<span class="badge bg-green">6</span>
					  </a>
					  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
						<li>
						  <a>
							<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
							<span>
							  <span>John Smith</span>
							  <span class="time">3 mins ago</span>
							</span>
							<span class="message">
							  Film festivals used to be do-or-die moments for movie makers. They were where...
							</span>
						  </a>
						</li>
						<li>
						  <a>
							<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
							<span>
							  <span>John Smith</span>
							  <span class="time">3 mins ago</span>
							</span>
							<span class="message">
							  Film festivals used to be do-or-die moments for movie makers. They were where...
							</span>
						  </a>
						</li>
						<li>
						  <a>
							<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
							<span>
							  <span>John Smith</span>
							  <span class="time">3 mins ago</span>
							</span>
							<span class="message">
							  Film festivals used to be do-or-die moments for movie makers. They were where...
							</span>
						  </a>
						</li>
						<li>
						  <a>
							<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
							<span>
							  <span>John Smith</span>
							  <span class="time">3 mins ago</span>
							</span>
							<span class="message">
							  Film festivals used to be do-or-die moments for movie makers. They were where...
							</span>
						  </a>
						</li>
						<li>
						  <div class="text-center">
							<a>
							  <strong>See All Alerts</strong>
							  <i class="fa fa-angle-right"></i>
							</a>
						  </div>
						</li>
					  </ul>
					</li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
	
        <!-- page content -->
        <div class="right_col" role="main">
		@yield('content')
          <div class="">
            <div class="page-title">
              <div class="title_left">
			   @yield('pagetitle')
                
				@show
              </div>

              <div class="title_right">
				@yield('x_search')
						
			    @show
                
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
			  
				@yield('x_content')
					<!--panel texto -->
					@show
              
              </div>
            </div>
          </div>
		
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Centro de Capacitación y Habilitación  <a href="http://www.aluna.org.co/">"ALUNA"</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
	 @show 
    </body>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<!-- <script src=" URL::asset('css/workflow/vendors/jquery/dist/jquery.min.js') }}"></script> -->
    <!-- Bootstrap -->
	<script src="{{ URL::asset('css/workflow/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script> -->
	
    <!-- FastClick -->
	<script src="{{ URL::asset('css/workflow/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
	<script src="{{ URL::asset('css/workflow/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Custom Theme Scripts -->
	<script src="{{ URL::asset('css/workflow/build/js/custom.min.js') }}"></script>
	<!-- Chart.js -->
    <script src="{{ URL::asset('css/workflow/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ URL::asset('css/workflow/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ URL::asset('css/workflow/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ URL::asset('css/workflow/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ URL::asset('css/workflow/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ URL::asset('css/workflow/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ URL::asset('css/workflow/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ URL::asset('css/workflow/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ URL::asset('css/workflow/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ URL::asset('css/workflow/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ URL::asset('css/workflow/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ URL::asset('css/workflow/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ URL::asset('css/workflow/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ URL::asset('css/workflow/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ URL::asset('css/workflow/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ URL::asset('css/workflow/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ URL::asset('css/workflow/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ URL::asset('css/workflow/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ URL::asset('css/workflow/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	<!-- jQuery Smart Wizard -->
    <script src="{{ URL::asset('css/workflow/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}"></script>
	
	

    <!-- bootstrap-wysiwyg -->
	<script src="{{ URL::asset('css/workflow/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
	<script src="{{ URL::asset('css/workflow/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
	<script src="{{ URL::asset('css/workflow/vendors/google-code-prettify/src/prettify.js') }}"></script>
    <!-- jQuery Tags Input -->
	<script src="{{ URL::asset('css/workflow/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
    <!-- Switchery -->
	<script src="{{ URL::asset('css/workflow/vendors/switchery/dist/switchery.min.js') }}"></script>
    <!-- Select2 -->
	<script src="{{ URL::asset('css/workflow/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- Parsley -->
	<script src="{{ URL::asset('css/workflow/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
    <!-- Autosize -->
	<script src="{{ URL::asset('css/workflow/vendors/autosize/dist/autosize.min.js') }}"></script>
    <!-- jQuery autocomplete -->
	<script src="{{ URL::asset('css/workflow/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
    <!-- starrr -->
	<script src="{{ URL::asset('css/workflow/vendors/starrr/dist/starrr.js') }}"></script>
 
    <!-- validator -->
	<script src="{{ URL::asset('css/workflow/vendors/validator/validator.js') }}"></script>
   

	
	<!-- checkboxes  -->
	<script src="{{ URL::asset('https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js') }}"></script>
	 
	<!-- checkboxes  --> 


		
	<script>
		$( document ).on( 'click', '.btn-add', function ( event ) {
			event.preventDefault();

			var field = $(this).closest( '.form-group ' );
			var field_new = field.clone();
			var field_new1 = field.clone();

			$(this)
				.toggleClass( 'btn-default' )
				.toggleClass( 'btn-add' )
				.toggleClass( 'btn-danger' )
				.toggleClass( 'btn-remove' )
				.html( '–' );

			field_new.find( 'input' ).val( '' );
			field_new.insertAfter( field );
		} );

		$( document ).on( 'click', '.btn-remove', function ( event ) {
			event.preventDefault();
			$(this).closest( '.form-group' ).remove();
		} );
	</script>




	@yield('postscripts')
	
	
</html>	
