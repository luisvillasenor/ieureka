<?php
	$template = 'change-password';
	include 'includes/header_front.php';
?>

<div id="wrap-content">

	<section id="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xs-12"><a href="<?php echo base_url('welcome/index');?>">Inicio</a> / <a href="<?php echo base_url('welcome/index');?>">Recuperar Cuenta</a></div>
			</div>
		</div>
	</section>

	
		<div class="container">
			<div class="row">

				<div class="col-xs-12">
				<section id="login-form">
				
					<h1 class="h-bold">Código para cambiar contraseña</h1>
					<p>Duis eu lorem fermentum arcu maximus elementum. Mauris vel commodo massa, at sagittis eros. Aenean cursus, lectus et finibus odio nisl lobortis erat quis sodales.</p>
					<form data-toggle="validator" role="form">

						<div class="form-group">
							<label class="label-input">Token</label>
							<div class="input-wrapper">
								<input type="text" class="input-control" placeholder="ej. Pitágoras de Samos" required>
								<span class="ico-validate fa form-control-feedback" aria-hidden="true"></span>
							</div>
							<span class="help-block with-errors input-tooltip">Debe ser el código enviado por correo.</span>
						</div>

						<div class="form-group">
							<label class="label-input">Nueva contraseña</label>
							<div class="input-wrapper">
								<i class="ico-input icon-lock"></i>
								<input type="password" class="input-control input-with-icon" placeholder="" required>
								<span class="ico-validate fa form-control-feedback" aria-hidden="true"></span>
							</div>
							<span class="help-block with-errors input-tooltip">Escribe tu nueva contraseña.</span>
						</div>

						<div class="form-group">
							<label class="label-input">Repetir nueva contraseña</label>
							<div class="input-wrapper">
								<i class="ico-input icon-lock"></i>
								<input type="password" class="input-control input-with-icon" placeholder="" required>
								<span class="ico-validate fa form-control-feedback" aria-hidden="true"></span>
							</div>
							<span class="help-block with-errors input-tooltip">Repite la contraseña proporcionada arriba.</span>
						</div>

						<div class="form-footer">
							<div class="form-group">
								<input type="submit" class="cta cta-medium" value="Recuperar Cuenta">
							</div>
							<a href="#">¿Ya tienes cuenta? Inicia Sesión</a>
						</div>
						
					</form>
					
				</section>
				</div>

			</div>
		</div>
	

</div>

<?php include 'includes/footer_front.php'; ?>