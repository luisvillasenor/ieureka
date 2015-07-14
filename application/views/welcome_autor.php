<div class="container">
  <!-- Main component for a primary marketing message or call to action -->
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Bienvenido Zona <?php echo $this->session->userdata('rol'); ?>!</strong> Actualizar Tú Cuenta.
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Información sobre el Autor</h3>
    </div>
    <div class="panel-body">
      <form class="form-horizontal">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nombre Completo del Autor</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Nombre Completo del Autor">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">País</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="País">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Domicilio, línea 1</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Domicilio, línea 1">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Domicilio, línea 2</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Domicilio, línea 2">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Ciudad</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Ciudad">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Estado, provincia ó región</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Estado, provincia ó región">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Código postal</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Código postal">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Teléfono</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Teléfono">
          </div>
        </div>        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Información Tributaria</h3>
    </div>
    <div class="panel-body">
      <ul>
        <li>Ver legistación sobre impuestos en México</li>
        <li>Persona Física</li>
        <li>Persona Moral</li>
      </ul>
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