<div class="container">
  
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Información sobre el Autor [id.- <?php echo $this->session->userdata('id_user');?>]</h3>
    </div>
    <div class="panel-body">
<?php echo form_open("users/update","rol='form' class='form-horizontal' name='EditViewPerfil' id='EditViewPerfil' ") ?>
<?php foreach ($perfil_data as $ob_item) { ?>
        <input type="hidden" name="id_user" value="<?php echo $ob_item->id_user;?>">
        <div class="form-group has-warning">
          <label for="nombreCompleto" class="col-sm-2 control-label">Nombre Completo del Autor</label>
          <div class="col-sm-10">
            <input type="text" class="form-control input-lg" name="nombreCompleto" id="nombreCompleto" placeholder="Nombre Completo del Autor" value="<?php echo $ob_item->nombreCompleto;?>">
          </div>
        </div>
        <div class="form-group has-warning">
          <label for="pais" class="col-sm-2 control-label">País</label>
          <div class="col-sm-10">
            <select class="form-control input-lg" name="pais" id="pais" placeholder="Pais" title="Pais de Origen" onchange="ComponerListaPaises(document.forms.EditViewPerfil.pais[selectedIndex].value);">
              <?php foreach ($paises as $item) { ?>
                <?php if ($item->idpais == $ob_item->idpais) { ?>
                  <option value="<?php echo $item->idpais;?>" selected><?php echo $item->pais;?></option>  
                <?php } else { ?>
                  <option value="<?php echo $item->idpais;?>"><?php echo $item->pais;?></option> 
                <?php  } ?>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="form-group has-warning">
          <label for="ciudad" class="col-sm-2 control-label">Estado</label>
          <div class="col-sm-10">
            <select class="form-control input-lg" name="estado" id="estado" placeholder="Estado" title="Estado de Origen" onchange="ComponerListaEstados(document.forms.EditViewPerfil.estado[selectedIndex].value);">
              
            </select>            
          </div>
        </div>
        <div class="form-group has-warning">
          <label for="estado" class="col-sm-2 control-label">Municipio</label>
          <div class="col-sm-10">
            <select class="form-control input-lg" name="municipio" id="municipio" placeholder="Municipio" title="Municipio de Origen">
              
            </select>            
          </div>
        </div>

        <div class="form-group has-warning">
          <label for="domicilio1" class="col-sm-2 control-label">Domicilio, línea 1</label>
          <div class="col-sm-10">
            <input type="text" class="form-control input-lg" name="domicilio1" placeholder="Domicilio, línea 1" value="<?php echo $ob_item->domicilio1;?>">
          </div>
        </div>
        <div class="form-group has-warning">
          <label for="domicilio2" class="col-sm-2 control-label">Domicilio, línea 2</label>
          <div class="col-sm-10">
            <input type="text" class="form-control input-lg" name="domicilio2" placeholder="Domicilio, línea 2" value="<?php echo $ob_item->domicilio2;?>">
          </div>
        </div>

        <div class="form-group has-warning">
          <label for="cp" class="col-sm-2 control-label">Código postal</label>
          <div class="col-sm-10">
            <input type="text" class="form-control input-lg" name="cp" placeholder="Código postal" value="<?php echo $ob_item->cp;?>">
          </div>
        </div>

        <div class="form-group has-warning">
          <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
          <div class="col-sm-10">
            <input type="telephone" class="form-control input-lg" name="telefono" placeholder="Teléfono" value="<?php echo $ob_item->telefono;?>">
          </div>
        </div>        


        <div class="form-group has-warning">
          <label for="telefono" class="col-sm-2 control-label">Ocupación</label>
          <div class="col-sm-10">
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Maestro
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Profesionista
            </label>
          </div>
        </div>        
        <hr>
        <div class="form-group has-warning">
          <label for="telefono" class="col-sm-2 control-label">Grado</label>
          <div class="col-sm-10">
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Primaria
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Secundaria
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option3"> Preparatoria
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option4"> Nivel Superior
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option5"> Posgrado
            </label>
          </div>
        </div>        
<hr>

        <div class="form-group has-warning">
          <label for="telefono" class="col-sm-2 control-label">Institución</label>
          <div class="col-sm-10">
            <input type="telephone" class="form-control input-lg" name="institucion" placeholder="Institución" value="">
          </div>
        </div>        
<hr>

        <div class="form-group has-warning">
          <label for="telefono" class="col-sm-2 control-label">Especialidad</label>
          <div class="col-sm-10">
            <input type="telephone" class="form-control input-lg" name="especialidad" placeholder="Especialidad" value="">
          </div>
        </div>        

        <hr>
        <div class="form-group has-warning">
          <label for="telefono" class="col-sm-2 control-label">Areas de Enseñanza</label>
          <div class="col-sm-10">
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Matemáticas
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Español
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option3"> Etica
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option4"> Civismo
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option5"> Quimica
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option6"> Fisica
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option7"> Historia
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option8"> Artes
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option9"> Educación Fisica
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option10"> Geografía
            </label>
          </div>
        </div>        



        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Actualizar Datos del Perfil</button>
            
          </div>
        </div>
<?php } ?>  
<?php echo form_close() ?>
    </div>
  </div>
</div> <!-- /container -->