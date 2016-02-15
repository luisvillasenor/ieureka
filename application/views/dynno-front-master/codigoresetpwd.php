<?php
	$template = 'login';
	include 'includes/header_front.php';
?>

<div id="wrap-content">

		<div class="container">
			<div class="row">

				<section id="login-form">
				<div class="col-xs-12 col-md-5">
<form method="post" action="<?php echo base_url('admin/resetpassword');?>" data-toggle="validator" role="form">			    
				<div class="form-group">
					<label class="label-input">Ingrese el Código para Cambiar Password</label>
					<div class="input-wrapper">
						<input type="text" name="codigo" class="input-control input-with-icon" required>
						<span class="ico-validate fa form-control-feedback" aria-hidden="true"></span>
					</div>
					<span class="help-block with-errors input-tooltip">Codigo Ejemplo: </span>
				</div>

				<div class="form-group">
					<label class="label-input">Ingrese Nuevo Password</label>
					<div class="input-wrapper">
						<input type="password" name="v" class="input-control input-with-icon" required>
						<span class="ico-validate fa form-control-feedback" aria-hidden="true">Nuevo Password</span>
					</div>
					<span class="help-block with-errors input-tooltip"></span>
				</div>

				<div class="form-group">
					<label class="label-input">Confirme Password</label>
					<div class="input-wrapper">
						<input type="password" name="confirmpassword" class="input-control input-with-icon" required>
						<span class="ico-validate fa form-control-feedback" aria-hidden="true">Confirme su nuevo password</span>
					</div>
					<span class="help-block with-errors input-tooltip"></span>
				</div>

				<div class="form-footer">
					<div class="form-group">
						<button type="submit">Enviar</button>
						
					</div>
				</div>

</form>
				</div>
				</section>

				<section id="dynno-text">
				<div class="col-xs-12 col-md-6 col-md-offset-1">
					<div class="text">
						<h2 class="h-hiro">Código para cambiar la contraseña</h2>
						<p>El código para cambiar la contraseña es un numero único que permite 
						que Dynno remplace la contraseña olvidada con la nueva contraseña.</p>
						<p>Los código tienen caducidad de 20 minutos a partir de solicitar el cambio
						. Si el código caduca debera solicitar nuevamente cambiar la contraseña.</blockquote></p>
					</div>
				</div>
				</section>



			</div>
		</div>
	

</div>

<?php include 'includes/footer_front.php'; ?>