<div class="container">
  
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Información sobre el Autor [id.- <?php echo $this->session->userdata('id_user');?>]</h3>
    </div>
    <div class="panel-body">
<?php echo form_open("users/update","rol='form' class='form-horizontal' ") ?>
        <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user');?>">
        <div class="form-group">
          <label for="nombreCompleto" class="col-sm-2 control-label">Nombre Completo del Autor</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nombreCompleto" id="nombreCompleto" placeholder="Nombre Completo del Autor">
          </div>
        </div>
        <div class="form-group">
          <label for="pais" class="col-sm-2 control-label">País</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="pais" placeholder="País">
          </div>
        </div>
        <div class="form-group">
          <label for="domicilio1" class="col-sm-2 control-label">Domicilio, línea 1</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="domicilio1" placeholder="Domicilio, línea 1">
          </div>
        </div>
        <div class="form-group">
          <label for="domicilio2" class="col-sm-2 control-label">Domicilio, línea 2</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="domicilio2" placeholder="Domicilio, línea 2">
          </div>
        </div>
        <div class="form-group">
          <label for="ciudad" class="col-sm-2 control-label">Ciudad</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="ciudad" placeholder="Ciudad">
          </div>
        </div>
        <div class="form-group">
          <label for="estado" class="col-sm-2 control-label">Estado, provincia ó región</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="estado" placeholder="Estado, provincia ó región">
          </div>
        </div>
        <div class="form-group">
          <label for="cp" class="col-sm-2 control-label">Código postal</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="cp" placeholder="Código postal">
          </div>
        </div>
        <div class="form-group">
          <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="telefono" placeholder="Teléfono">
          </div>
        </div>        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Actualizar Datos del Perfil</button>
          </div>
        </div>
<?php echo form_close() ?>
    </div>
  </div>
</div> <!-- /container -->