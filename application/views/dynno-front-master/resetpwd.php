<?php
	$template = 'login';
	include 'includes/header_front.php';
?>

<div id="wrap-content">

		<div class="container">
			<div class="row">

				<section id="login-form">
				<div class="col-xs-12 col-md-5">

					<form id="enableForm" method="post" action="<?php echo base_url('users/updatepwd');?>" class="form-horizontal">
					    
					    <input type="hidden" class="form-control" name="id_user" id="id_user" value="<?php echo $id_user;?>" />


						<div class="form-group">
							<label class="label-input">Nuevo Password</label>
							<div class="input-wrapper">
								<input type="password" name="password" class="input-control input-with-icon" required>
								<span class="ico-validate fa form-control-feedback" aria-hidden="true"></span>
							</div>
							<span class="help-block with-errors input-tooltip">Políticas del password</span>
						</div>

						<div class="form-group">
							<label class="label-input">Nuevo Password</label>
							<div class="input-wrapper">
								<input type="password" name="confirm_password" class="input-control input-with-icon" required>
								<span class="ico-validate fa form-control-feedback" aria-hidden="true"></span>
							</div>
							<span class="help-block with-errors input-tooltip">Políticas del password</span>
						</div>

						<div class="form-footer">
							<div class="form-group">
								<input type="submit" class="cta cta-medium" value="Cambiar Contraseña">
							</div>
						
						</div>


					</form>

				</div>
				</section>

				<section id="dynno-text">
				<div class="col-xs-12 col-md-6 col-md-offset-1">
					<div class="text">
						<h2 class="h-hiro">Cambiar la contraseña?</h2>
						<p>Al Cambiar la contraseña, Dynno te enviará un correo electrónico con un código
						de seguridad para reactivar tu cuenta 
						y puedas accesar nuevamente a tus datos.</p>
						<p>Este último paso es importantesignifica que Dynno almacena las contraseñas de tal forma que 
						nadie puede saber tu contraseña sino tú mismo. Para asegurar esto, Dynno sustituye la contraseña por una nueva y
						diferente a la anterior, con esto garantizamos tu acceso al sistema.</blockquote></p>
					</div>
				</div>
				</section>



			</div>
		</div>
	

</div>

<?php include 'includes/footer_front.php'; ?>