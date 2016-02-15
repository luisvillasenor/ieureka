<?php
	$template = 'register';
	include 'includes/header_front.php';
?>

<div id="wrap-content">

	<section id="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xs-12"><a href="<?php echo base_url('welcome/index');?>">Inicio</a> / <a href="<?php echo base_url('welcome/register');?>">Registro de nuevo usuario</a></div>
			</div>
		</div>
	</section>

	
		<div class="container">
			<div class="row">

				<section id="login-form">
				<div class="col-xs-12 col-sm-6 col-md-5">
					<h1 class="h-bold">Registrar nuevo usuario</h1>
					<form method="post" action="<?php echo base_url('admin/register');?>" data-toggle="validator" role="form">
						<input type="hidden" name="register" value="si">
						<div class="form-group">
							<label class="label-input">Correo electrónico</label>
							<div class="input-wrapper">
								<i class="ico-input icon-email"></i>
								<input type="email" name="correo" class="input-control input-with-icon" placeholder="ej. pitagoras@dynno.education" required>
								<span class="ico-validate fa form-control-feedback" aria-hidden="true"></span>
							</div>
							<span class="help-block with-errors input-tooltip">El correo que proporciones sera el que utilices para iniciar sesión.</span>
						</div>

						<div class="form-group">
							<label class="label-input">Elige una contraseña</label>
							<div class="input-wrapper">
								<i class="ico-input icon-lock"></i>
								<input type="password" name="password" class="input-control input-with-icon" placeholder="" required>
								<span class="ico-validate fa form-control-feedback" aria-hidden="true"></span>
							</div>
							<span class="help-block with-errors input-tooltip">La contraseña que proporciones sera la que utilices para iniciar sesión.</span>
						</div>

						<div class="form-group">
							<label class="label-input label-input-check-radio">Quiero registrame como</label>
							<span class="help-block with-errors input-tooltip input-tooltip-check-radio">Selecciona al menos una opción</span>
							<div class="input-wrapper-check-radio">
								<input type="radio" id="radio01" name="rol" value="2" required>
								<label for="radio01"></label>
								<span>Creador de contenido</span>
							</div>
							<div class="input-wrapper-check-radio">
								<input type="radio" id="radio02" name="rol" value="1" required>
								<label for="radio02"></label>
								<span>Consumidor de contenido</span>
							</div>
						</div>

						<div class="form-group">
							<label class="label-input label-input-check-radio">Términos y condiciones</label>
							<span class="help-block with-errors input-tooltip input-tooltip-check-radio">Debes aceptar los términos y condiciones</span>
							<div class="text-terminos-condiciones">
								<p>Lorem ipsum dolor sit amet, veniam numquam has te. No suas nonumes recusabo mea, est ut graeci definitiones. His ne melius vituperata scriptorem, cum paulo copiosae conclusionemque at. Facer inermis ius in, ad brute nominati referrentur vis. Dicat erant sit ex. Phaedrum imperdiet scribentur vix no, ad latine similique forensibus vel.</p>
								<p>Dolore populo vivendum vis eu, mei quaestio liberavisse ex. Electram necessitatibus ut vel, quo at probatus oportere, molestie conclusionemque pri cu. Brute augue tincidunt vim id, ne munere fierent rationibus mei. Ut pro volutpat praesent qualisque, an iisque scripta intellegebat eam.</p>
								<p>Mea ea nonumy labores lobortis, duo quaestio antiopam inimicus et. Ea natum solet iisque quo, prodesset mnesarchum ne vim. Sonet detraxit temporibus no has. Omnium blandit in vim, mea at omnium oblique.</p>
							</div>
							<div class="input-wrapper-check-radio">
								<input type="checkbox" id="terminos-condiciones" name="terminosycondiciones" value="1" required>
								<label for="terminos-condiciones"></label>
								<span>Acepto los términos y condiciones.</span>
							</div>
						</div>

						<div class="form-footer">
							<div class="form-group">
								<input type="submit" class="cta cta-medium" value="Registrarme en Dynno">
							</div>
							<a href="<?php echo base_url('welcome/index');?>">¿Ya tienes cuenta? Inicia sesión</a>
						</div>
						
					</form>
				</div>
				</section>

				<section id="dynno-text">
				<div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-1">
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