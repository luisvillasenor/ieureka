<header>
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-md-2">
				<div class="logo">
					<img src="<?php echo base_url();?>assets/images/logo-final.png" alt="Dynno.education | Educación Colaborativa">
				</div>
			</div>
			<div class="col-xs-4 visible-xs visible-sm">
				<div class="mobile-hamburger">
					<i id="mobile-open" class="icon-menu"></i>
					<i id="mobile-close" class="icon-cross" style="display:none"></i>
				</div>
			</div>
			<div class="col-xs-12 col-md-9">
				<nav>
					<ul>
						<li><a href="#">Actividades</a></li>
						<li><a href="#">¿Que es Dynno?</a></li>
						<li><a href="<?php echo base_url('welcome/index');?>">Iniciar sesión</a></li>
							<li><a href="<?php echo base_url('welcome/register');?>">Registrate</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-xs-12 col-md-1 visible-md visible-lg">
				<div id="search-icon">
					<a href="#" id="trigger-search"><i class="icon-magnifying-glass"></i></a>
				</div>
				<div id="cart-icon">
					<a href="#">
					<span id="count-cart">99</span>
					<i data-icon="&#xe0e5;"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>