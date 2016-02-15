<?php
	$template = 'account';
	include 'includes/header_front.php'
?>

<section id="initial">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-5">
				<h1 class="h-baymax">Bienvenido a la Educación Colaborativa</h1>
				<h3 class="h-tadashi">En su primer etapa, Dynno, será un espacio para que maestros, de una institución respetada, y con una experiencia sólida en un tema, compartan y vendan hacia otros maestros, con menos recursos que estos, clases previamente diseñada por ellos.</h3>
			</div>
		</div>
	</div>
</section>

<section id="middle">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-4">
					<h2 class="h-hiro">Ayudanos a redescubrir la forma de educar</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="image-box">
					<img src="<?php echo base_url();?>assets/images/graphic-03.png" alt="Dynno.education">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-3">
					<h2 class="h-bold">de todos, uno...</h2>
					<p>El rezago que tenemos es un problema que debemos solucionar. Es necesario que se reforme, de forma efectiva la manera en que el conocimiento es transmitido a la juventud, pues esta es la solución a todos los problemas.</p>
					<a href="<?php echo base_url('welcome/register');?>" class="cta cta-medium">Registrate como Educador</a>
			</div>
		</div>
	</div>
</section>

<?php include 'includes/footer_front.php' ?>