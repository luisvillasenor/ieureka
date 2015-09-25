<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url();?>">Login</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url();?>">Actividades</a></li>
          <li><a href="<?php echo base_url();?>">Que es iEureka?</a></li>        
      </ul>
    </div>
  </div>
</nav>

<div class="container">

  
<?php echo form_open("admin/login","class='form-signin'") ?>    
    <h2 class="form-signin-header">Por favor inicie sesion</h2>
    <label for="inputEmail" class="sr-only">Direccion de Correo</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Direccion de Correo" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    <a type="button" class="btn btn-lg btn-warning btn-block" href="<?php echo base_url('users/index');?>">Crear Cuenta</a>
<?php echo form_close() ?>
  
</div>


<!-- Modal 

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
<?php echo form_open("admin/login","rol='form'") ?>
            <div class="form-group">
              <label for="email_address"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" name="email_address" class="form-control" id="email_address" placeholder="Escriba su email">
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Escriba su password">
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
<?php echo form_close() ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
          <p>No es miembro? <a href="<?php echo base_url('users/index');?>">Registrese aquí</a></p>
          
        </div>
      </div>
  </div>
</div>
-->