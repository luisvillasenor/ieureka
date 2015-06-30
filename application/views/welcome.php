<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
  <div class="row">
      <div class="col-md-12">
        <h1>Bienvenido  Zona de Miembros de iEureka Web App</h1>
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