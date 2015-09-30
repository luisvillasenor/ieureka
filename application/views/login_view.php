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
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Home <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('users/login');?>"><span class="glyphicon glyphicon-log-in"></span> Ingresa</a></li>
            <li><a href="<?php echo base_url('users/index');?>">Registrese aquí</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url();?>">Actividades</a></li>
          <li><a href="<?php echo base_url();?>">Que es iEureka?</a></li>        
      </ul>
    </div>
  </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
  	<div class="row">
      <div class="col-md-6">
        <h1>Acceso</h1>
			<fieldset>
			
      
      

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

      


			</fieldset>
      </div>
  	</div>
  </div>
</div>

