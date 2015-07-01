<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
  <div class="row">
      <div class="col-md-12">
        <h1>Bienvenido Mi Sesion en Zona Eureka</h1>
        <blockquote>Aqui todas la Obras Publicadas Listas para Vender</blockquote>
      </div>
  </div>
  </div>
</div>

<div class="container">
  <!-- Main component for a primary marketing message or call to action -->
  <div class="row well">
    <h1>Variables de la SESION:</h1>
  </div>
  
<?php foreach ($all_userdata as $key => $value) {
	# code...
	echo $key.' = ';
	echo $value.'<br>';
} ?>


</div> <!-- /container -->    