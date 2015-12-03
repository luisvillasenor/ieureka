<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title"><a type="button" class="btn btn-warning btn-lg" href="<?php echo base_url("users/edit/".$this->session->userdata('id_user')."");?>">Editar Perfil</a> Información sobre el Perfil</h3>
    </div>
    <div class="panel-body">
      <pre>
        <?php
          print_r($perfil_data);
          //echo json_encode($perfil_data, JSON_PRETTY_PRINT);
        ?>
      </pre>    	
    </div>
  </div>

  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">
        Mis Actividades
        <small>[ <?php echo $this->session->userdata('username');?> ]</small>
      </h3>
    </div>
    <div class="panel-body">
      <!-- Main jumbotron for a primary marketing message or call to action -->




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