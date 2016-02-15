<?php
	$template = 'message-page';
	include 'includes/header_front.php';
?>

<div id="wrap-content">

	<section id="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xs-12"><a href="<?php echo base_url('welcome/index');?>">Inicio</a> / <a href="<?php echo base_url('welcome/index');?>">Registro éxitoso</a></div>
			</div>
		</div>
	</section>

	
		<div class="container">
			<div class="row">

				<div class="col-xs-12">
					<div class="message-fail">
						<i class="icon-emoji-sad"></i>
						<h1>Proceso fallido</h1>
						<p>Lamentamos informate que el proceso no finalizó con exito, intenta realizarlo de nuevo, de lo contraio contacta a nuestros técnicos.</p>
					</div>
				</div>

			</div>
		</div>
	

</div>

<?php include 'includes/footer_front.php'; ?>