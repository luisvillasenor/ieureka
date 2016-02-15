<?php
	$template = 'forgot';
	include 'includes/header_front.php';
?>

<div id="wrap-content">

	<section id="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xs-12"><a href="<?php echo base_url('welcome/index');?>">Inicio</a> / <a href="<?php echo base_url('welcome/index');?>">Recuperar Contraseña</a></div>
			</div>
		</div>
	</section>

	
		<div class="container">
			<div class="row">

				<div class="col-xs-12">
				<section id="login-form">
				
					<h1 class="h-bold">Recuperar Contraseña</h1>
					<p>Si has olvidado tu contraseña utiliza el formulario de la izquierda para recuperarla. Te enviaremos por email una nueva para que puedas ingregar.</p>
					<form method="post" action="<?php echo base_url('admin/validaemailreset');?>" data-toggle="validator" role="form">

						<div class="form-group">
							<label class="label-input">Correo Electrónico</label>
							<div class="input-wrapper">
								<i class="ico-input icon-email"></i>
								<input type="text" name="email_address" class="input-control input-with-icon" placeholder="ej. Pitágoras de Samos" required>
								<span class="ico-validate fa form-control-feedback" aria-hidden="true"></span>
							</div>
							<span class="help-block with-errors input-tooltip">Escribe el correo electrónico utilizado al registrarte.</span>
						</div>

						<div class="form-footer">
							<div class="form-group">
								<input type="submit" class="cta cta-medium" value="Recuperar Contraseña">
							</div>
							<a href="<?php echo base_url('welcome/index');?>">¿Ya tienes cuenta? Inicia Sesión</a>
						</div>
						
					</form>
					
				</section>
				</div>

			</div>
		</div>
	

</div>

<?php include 'includes/footer_front.php'; ?>