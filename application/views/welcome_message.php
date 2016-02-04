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


<!-- Modal 
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
      Modal content
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