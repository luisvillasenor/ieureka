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
					<h1 class="h-bold">Ups!!!</h1>
					<h1 class="h-bold">Parece que hay un problema con su email ó password</h1>					
				</div>
				</section>

				<section id="dynno-text">
				<div class="col-xs-12 col-md-6 col-md-offset-1">
					<div class="image-box">
						<img src="<?php echo base_url();?>assets/images/graphic-03.png" alt="Dynno.education">
					</div>
				</div>
				</section>

			</div>
		</div>
	

</div>

<?php include 'includes/footer_front.php'; ?>