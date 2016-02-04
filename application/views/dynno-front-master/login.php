<?php
	$template = 'login';
	include 'includes/header_front.php';
?>

<div id="wrap-content">

	<section id="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xs-12"><a href="http://ieureka.localhost">Inicio</a> / <a href="http://ieureka.localhost">Iniciar sesión</a></div>
			</div>
		</div>
	</section>
	
		<div class="container">
			<div class="row">

				<section id="login-form">
				<div class="col-xs-12 col-md-5">
					<h1 class="h-bold">Iniciar sesión</h1>
					<form method="post" action="<?php echo base_url('admin/login');?>" data-toggle="validator" role="form">

						<div class="form-group">
							<label class="label-input">Usuario</label>
							<div class="input-wrapper">
								<i class="ico-input icon-user"></i>
								<input type="text" name="email_address" class="input-control input-with-icon" placeholder="ej. Pitágoras de Samos" required>
								<span class="ico-validate fa form-control-feedback" aria-hidden="true"></span>
							</div>
							<span class="help-block with-errors input-tooltip">Escribe el nombre usuario o correo electrónico utilizado al registrarte.</span>
						</div>

						<div class="form-group">
							<label class="label-input">Contraseña</label>
							<div class="input-wrapper">
								<i class="ico-input icon-lock"></i>
								<input type="password" name="password" class="input-control input-with-icon" placeholder="" required>
								<span class="ico-validate fa form-control-feedback" aria-hidden="true"></span>
							</div>
							<span class="help-block with-errors input-tooltip">Escribe la contraseña utilizada al registrarte.</span>
						</div>

						<div class="form-base">
							<div class="box-1">
								<p>¿No tienes cuenta? <a href="#">Crea una aquí</a></p>
							</div>
							<div class="box-2">
								<div class="form-group">
									<div class="input-wrapper-check-radio">
										<input type="checkbox" id="recordar-sesion" name="" value="">
										<label for="recordar-sesion"></label>
										<span>Recordar sesión</span>
									</div>
								</div>
							</div>
						</div>

						<div class="form-footer">
							<div class="form-group">
								<input type="submit" class="cta cta-medium" value="Iniciar Sesión">
							</div>
							<a href="#">¿Olvidaste tu contraseña?</a>
						</div>
						
					</form>
				</div>
				</section>

				<section id="dynno-text">
				<div class="col-xs-12 col-md-6 col-md-offset-1">
					<div class="image-box">
						<img src="<?php echo base_url();?>assets/images/graphic-03.png" alt="Dynno.education">
					</div>
					<div class="text">
						<h2 class="h-hiro">Bienvenido a la Educación Colaborativa</h2>
						<p>En su primer etapa, Dynno, será un espacio para que maestros, de una institución respetada, y con una experiencia sólida en un tema, compartan y vendan hacia otros maestros, con menos recursos que estos, clases previamente diseñada por ellos.</p>
					</div>
				</div>
				</section>

			</div>
		</div>
	

</div>

<?php include 'includes/footer_front.php'; ?>