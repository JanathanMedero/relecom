<header>
	<!-- Header Start -->
	<div class="header-area header-transparent">
		<div class="main-header ">
			<div class="header-bottom header-sticky">
				<div class="container-fluid">
					<div class="row align-items-center">
						<!-- Logo -->
						<div class="col-xl-2 col-lg-2 col-md-1">
							<div class="logo">
								<!-- logo-1 -->
								<a href="{{ route('home') }}" class="big-logo"><img src="{{ asset('assets/img/logo.png') }}" alt="Relecom"></a>
								<!-- logo-2 -->
								<a href="{{ route('home') }}" class="small-logo"><img src="{{ asset('assets/img/logo.png') }}" alt="Relecom"></a>
							</div>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8">
							<!-- Main-menu -->
							<div class="main-menu f-right d-none d-lg-block">
								<nav>
									<ul id="navigation">
										<li><a href="{{ route('home') }}">Inicio</a></li>
										<li><a href="{{ route('us') }}">Nosotros</a></li>
										<li><a href="{{ route('services') }}">Servicios</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xl-2 col-lg-2 col-md-3">
							<div class="header-right-btn f-right d-none d-lg-block">
								<a href="{{ route('contact') }}" class="btn">Contactanos</a>
							</div>
						</div>
						<!-- Mobile Menu -->
						<div class="col-12">
							<div class="mobile_menu d-block d-lg-none"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header End -->
</header>