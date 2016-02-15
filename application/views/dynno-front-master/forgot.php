<?php
	$template = 'login';
	include 'includes/header_front.php';
?>

<div id="wrap-content">

		<div class="container">
			<div class="row">

				<section id="login-form">
				<div class="col-xs-12 col-md-5">
					<h1 class="h-bold">¿Olvidaste tu contraseña?</h1>
					<form method="post" action="<?php echo base_url('admin/validaemailreset');?>" data-toggle="validator" role="form">

						<div class="form-group">
							<label class="label-input">Escribe el correo electrónico utilizado al registrarte</label>
							<div class="input-wrapper">
								<i class="ico-input icon-user"></i>
								<input type="text" name="email_address" class="input-control input-with-icon" placeholder="" required>
								<span class="ico-validate fa form-control-feedback" aria-hidden="true"></span>
							</div>
							<span class="help-block with-errors input-tooltip">Te enviaremos a éste correo las instrucciones.</span>
						</div>

											

						<div class="form-footer">
							<div class="form-group">
								<input type="submit" class="cta cta-medium" value="Enviar Instrucciones">
							</div>
						
						</div>
						
					</form>
				</div>
				</section>

				<section id="dynno-text">
				<div class="col-xs-12 col-md-6 col-md-offset-1">
					<div class="text">
						<h2 class="h-hiro">¿Olvidaste tu contraseña?</h2>
						<p>No te preocupes, ingresa el correo electrónico que registraste y te llegarán las instrucciones
						para que puedas resetear tu contraseña.</p>
						<p><blockquote><strong>Resetear</strong> significa que Dynno almacena las contraseñas de tal forma que 
						nadie puede saber tu contraseña sino tú mismo. Para asegurar esto, Dynno sustituye la contraseña por una nueva y
						diferente a la anterior, con esto garantizamos tu acceso al sistema.</blockquote></p>
					</div>
				</div>
				</section>

			</div>
		</div>
	

</div>

<?php include 'includes/footer_front.php'; ?>