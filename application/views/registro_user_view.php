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
        <li><a href="<?php echo base_url('users/index');?>">Registrese aquí</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          
        </li>        
      </ul>
    </div>
  </div>
</nav>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
  	<div class="row">
      <div class="col-md-6">
        <h1>Nuevo Registro</h1>
			<fieldset>
			<?php echo form_open("users/nuevo_usuario") ?>
  			<input type="hidden" name="grabar" value="si" />
  			  <div class="form-group">
  			    <label for="Correo">Email address</label>
  			    <input type="correo" class="form-control" name="correo" placeholder="Correo">
  			  </div>
  			  <div class="form-group">
  			    <label for="Password">Password</label>
  			    <input type="password" class="form-control" name="password" placeholder="Password">
  			  </div>
  			  <div class="radio">
  			    <label>
  			      <input type="radio" name="rol" id="rol1" value="1" checked> Quiero ser Usuario
  			    </label>
  			    <label>
  			      <input type="radio" nmae="rol" id="rol2" value="2"> Quiero ser Creador
  			    </label>
  			  </div>
  			  <div class="checkbox">
  			    <label>
  			      <input type="checkbox" name="terminos" value="Acepto"> Acepto Términos y Condiciones
  			    </label>
  			  </div>
  			  <button type="submit" class="btn btn-primary">Registrar</button>
  			  <button type="reset" class="btn btn-primary">Reset Datos</button>
			<?php echo form_close() ?>
			</fieldset>
      </div>
  	</div>
  </div>
</div>

