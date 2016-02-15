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
			</div>
		</div>
</div>
<?php include 'includes/footer_front.php'; ?>