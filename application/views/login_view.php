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
        <li><a href="<?php echo base_url('users/login');?>"><span class="glyphicon glyphicon-log-in"></span> Ingresa</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          
        </li>        
      </ul>
    </div>
  </div>
</nav>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="">
  <div class="container">
  	<div class="row">
      <div class="well col-md-6">
        <h1>Acceso</h1>
			<fieldset>
			<?php echo form_open("admin/login","rol='form'") ?>
          <div class="form-group">
            <label for="email_address"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="email" name="email_address" class="form-control input-lg" id="email_address" placeholder="Escriba su email">
          </div>
          <div class="form-group">
            <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Escriba su password">
          </div>
          <button type="submit" class="btn btn-success btn-lg">LOGIN</button>
      <?php echo form_close() ?>
      </fieldset>
      </div>

      <div class="well col-md-6">
        <h1>Nuevo Registro</h1>
      <fieldset>
      <?php echo form_open("users/nuevo_usuario") ?>
        <input type="hidden" name="grabar" value="si" />
          <div class="form-group">
            <label for="Correo">Email address</label>
            <input type="email" class="form-control input-lg" name="correo" placeholder="Correo">
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control input-lg" name="password" placeholder="Password">
          </div>
          
            <label class="radio-inline">
              <input type="radio" name="rol" id="rol1" value="1"> Quiero ser Usuario
            </label>
          
          
            <label class="radio-inline">
              <input type="radio" name="rol" id="rol2" value="2"> Quiero ser Creador
            </label>
          
          <div class="checkbox">
            <label>
              <input type="checkbox" name="terminos" id="terminos" value="1"> Acepto Términos y Condiciones
            </label>
          </div>
          <button type="submit" class="btn btn-primary btn-lg">REGISTRAR CUENTA</button>
          <button type="reset" class="btn btn-primary btn-lg">Reset Datos</button>
      <?php echo form_close() ?>
      </fieldset>
      </div>
  	</div>
  </div>
</div>

