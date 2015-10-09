<div class="container">


  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Información sobre el Perfil</h3>
    </div>
    <div class="panel-body">
    	<?php
			print_r($perfil_data);
			foreach ($perfil_data as $key => $value) {
				# code...
			}
		?>
    </div>
  </div>

  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Información Tributaria</h3>
    </div>
    <div class="panel-body">
      <ul>
        <li>Ver legistación sobre impuestos en México</li>
        <li>Persona Física</li>
        <li>Persona Moral</li>
      </ul>
    </div>
  </div>  
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Pago de Regalías (Membresías)</h3>
    </div>
    <div class="panel-body">
      <ul>
        <li>Ver Terminos y Condiciones del tipo de Membresía</li>
        <li>Añadir Cuenta Bancaria</li>
        <li>Añadir Cuenta PayPal</li>
      </ul>      
    </div>
  </div>  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Variables de la COOKIE</h3>
    </div>
    <div class="panel-body">
      <?php $galleta = $this->input->cookie('ci_session');
        echo $galleta;
      ?>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Variables de la SESION</h3>
    </div>
    <div class="panel-body">
      <?php foreach ($all_userdata as $key => $value) {
      # code...
      echo $key.' = ';
      echo $value.'<br>';
    } ?>
    </div>
  </div>

</div> <!-- /container -->