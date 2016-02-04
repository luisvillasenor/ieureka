<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title"> Cambio de Clave de Acceso</h3>
    </div>
    <div class="panel-body">

<form id="enableForm" method="post" action="<?php echo base_url('users/updatepwd');?>" class="form-horizontal">
    
    <input type="hidden" class="form-control" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user');?>" />

    <div class="form-group">
        <label class="col-xs-3 control-label">Nuevo Password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="password" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Confirme Password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="confirm_password" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-5 col-xs-offset-3">
            <button type="submit" class="btn btn-default">Cambiar Password</button>
        </div>
    </div>

</form>

    
    </div>
  </div>
</div> <!-- /container -->