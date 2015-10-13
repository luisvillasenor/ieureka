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
<div class="">
    <div class="row">
      
      <br>
      <div class="col-xs-9">
        <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Títulos">
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">          
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filtros por: <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Estado</a></li>
                <li><a href="#">Colaborador</a></li>
                <li><a href="#">ISBN</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
      </div>
    </div>
</div>

<?php foreach ($obras_data as $obra_item) { ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="">
  <div class="well">
    <div class="row">
      <div class="col-xs-3">
        <h4>Portada Obra [<?php echo $obra_item->id_obra; ?>]</h4>
        <h5><img src="..." class="img-responsive" alt="Responsive image"></h5>
      </div>
      <div class="col-xs-3">
        <h4>Título de la obra</h4>
        <h5><?php echo $obra_item->titulo; ?></h5>
        <h4>Descripcion Breve</h4>
        <h5><?php echo $obra_item->descripcion; ?></h5>
      </div>
      <div class="col-xs-3">
        <h4>Estado:</h4>
        <h5><?php echo $obra_item->borrador; ?></h5>
        <h4>Fecha de Alta</h4>
        <h5><?php echo $obra_item->fecha_alta; ?></h5>
      </div>
      <div class="col-xs-3">
        <!-- Indicates caution should be taken with this action -->
        <a type="button" class="btn btn-primary btn-block" href="<?php echo base_url("obras/edit/".$obra_item->id_obra."/".$obra_item->id_user."");?>">Actualizacion Rapida</a>
    <button type="button" class="btn btn-warning btn-block">Actualizar Detalles</button>
    <span id="helpBlock" class="help-block">Asigne una portada, suba su archivo, categorice para facilitar su busqueda, etc...</span>

      </div>
    </div>
  </div>
</div>
<?php } ?>

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