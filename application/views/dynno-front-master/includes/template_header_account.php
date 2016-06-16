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
			<div class="col-xs-12 col-md-10">
				<nav>
					<ul>
						<li><a href="<?php echo base_url('member/');?>">Vista general</a></li>
						<li><a href="<?php echo base_url('obras/nuevo');?>">Crear actividad</a></li>
						<li><a href="<?php echo base_url("obras/show/".$this->session->userdata('id_user')."");?>">Mis actividades</a></li>
						<li><a href="<?php echo base_url('member/autor');?>">Editar perfil</a></li>
						<li><a href="<?php echo base_url('admin/logout');?>">Cerrar sesión</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>