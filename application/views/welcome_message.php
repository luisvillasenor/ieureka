<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand"></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <?php $attributes = array('class' => 'navbar-form navbar-right form-inline', 'role' => 'search');
        echo form_open(base_url('admin/login'), $attributes); ?>
        <div class="form-group">
        <?php  
        echo form_input('email_address', set_value('email_address'), 'id="email_address" class="form-control" placeholder="Email"');
        ?>
        </div>
        <div class="form-group">
        <?php  
        echo form_password('password', '', 'id="password" class="form-control" placeholder="Password"');
        ?>
        </div>
        <button type="submit" class="btn btn-danger">Acceso</button>
        <a href="<?php echo base_url('users/');?>" class="btn btn-danger">Registro</a>
        <?php echo form_close(); ?>
    </div><!--/.nav-collapse -->  
  </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
  <div class="row">
      <div class="col-md-12">
        <h1>Zona Publica</h1>
        <blockquote>Aqui todas la Obras Publicadas Listas para Vender</blockquote>
      </div>
  </div>
  </div>
</div>

<div class="container">
  <!-- Main component for a primary marketing message or call to action -->
  <div class="row well">
    <h1>Variables de la $_COOKIE:</h1>
    <?php 
      print_r($_COOKIE);
    ?>
  </div>
  <div class="row well">
    <h1>Variables de la SESSION:</h1>
      <?php $galleta = $this->input->cookie('ci_session');
      echo $galleta;
    ?>
  </div>
</div> <!-- /container -->  



<nav class="navbar-fixed-bottom">
  <div class="container">
  <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        Version 1.0  © 2015
      </div>
      <div class="col-md-4">
        Terminos y Uso
      </div>        
      <div class="col-md-4">
        Aviso de Privacidad
      </div>        
    </div>    
  </div> <!-- /container -->  
</nav>