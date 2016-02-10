<html>
<head>
	<title>Homepage - Dynno.education</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<!--	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://file.myfontastic.com/xtqYhHuyApx6MR43y8HiHJ/icons.css" rel="stylesheet">
-->
</head>
<body id="<?php echo $template; ?>" class="body-font"> <!-- homepage -->

<div id="wrapper">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-2">
					<div class="logo">
						<img src="<?php echo base_url();?>assets/images/logo-final.png" alt="Dynno.education | Educación Colaborativa">
					</div>
				</div>
				<div class="col-xs-12 col-md-9">
					<nav>
						<ul>
							<li><a href="#">Actividades</a></li>
							<li><a href="#">¿Que es Dynno?</a></li>
							<li><a href="<?php echo base_url('welcome/index');?>">Iniciar sesión</a></li>
							<li><a href="<?php echo base_url('welcome/register');?>">Registrate</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-xs-12 col-md-1">
					<div id="search-icon">
						<a href="#" id="trigger-search"><i class="icon-magnifying-glass"></i></a>
					</div>
					<div id="cart-icon">
						<a href="#">
						<span id="count-cart">99</span>
						<i data-icon="&#xe0e5;"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>