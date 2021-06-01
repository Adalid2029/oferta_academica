	<!-- Header -->
	<header id="header" class="header clearfix">
		<div class="container">
			<div class="header-wrap clearfix">
				<div id="logo" class="logo">
					<a href="index-2.html" rel="home">
						<img width="100%" src="<?= base_url('theme/images/imagenes_maqueta/logos/logo web.png') ?>" alt="image">
					</a>
				</div>
				<div class="nav-wrap">
					<div class="btn-menu">
						<span></span>
					</div>
					<nav id="mainnav" class="mainnav">
						<ul class="menu">
							<li>
								<a class="active" href="<?= route_to('inicio') ?>">Inicio</a>
							</li>
							<li class="has-sub"><a href="#">Oferta Académica</a>
								<ul class="submenu">
									<li><a href="<?= route_to('programas.diplomados') ?>">Diplomados</a></li>
									<li><a href="<?= route_to('programas.maestrias') ?>">Maestrias</a></li>
									<li><a href="<?= route_to('programas.especialidades') ?>">Especialidad</a></li>
									<li><a href="<?= route_to('programas.doctorados') ?>">Doctorado</a></li>
								</ul>
							</li>

							<li class="has-sub"><a href="#">Institución</a>
								<ul class="submenu">
									<li><a class="menu--link" href="<?= route_to('vision_mision') ?>">Misión y Visión</a></li>
									<li><a class="menu--link" href="<?= route_to('organizacion') ?>">Organización</a></li>

								</ul>
							</li>
							<li><a class="menu--link" href="<?= route_to('campus') ?>">Campus Virtual</a>

							</li>
							<li><a class="menu--link" href="<?= route_to('actividades') ?>">Actividades</a>
							</li>

							<!-- <li><a class="menu--link" href="<?= route_to('actividades') ?>">Documentación</a>
	                        </li> -->
							<li><a class="menu--link" href="<?= route_to('contacto') ?>">Contacto</a>
							</li>

						</ul><!-- /.menu -->
					</nav><!-- /.mainnav -->
				</div><!-- /.nav-wrap -->

				<!-- <div id="s" class="show-search">
	                <a href="#"><i class="fa fa-search"></i></a>
	            </div>		 -->

				<!-- <div class="submenu top-search">
	                <div class="widget widget_search">
	                    <form class="search-form">
	                        <input type="search" class="search-field" placeholder="Search …">
	                        <input type="submit" class="search-submit">
	                    </form>
	                </div>
	            </div>
	        </div> -->
			</div>
	</header>