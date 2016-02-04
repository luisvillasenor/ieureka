<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container">
  <div class="well">
  	<div class="row">
      <div class="col-xs-9">
        <h1>Actualización</h1>
			<fieldset>
      <?php $attributes = array('class' => '', 'id' => 'FormRegistroEditarQuick'); 
      echo form_open("obras/quick_update",$attributes) ?>
      <?php foreach ($obra_data as $ob_item) { ?>
      <legend>Obra [<?php echo $ob_item->id_obra; ?>]</legend>
			  <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user');?>">
        <input type="hidden" name="id_obra" value="<?php echo $ob_item->id_obra; ?>">
			  <div class="form-group has-warning">
			    <label class="control-label" for="titulo">Título</label>
			    <input type="text" class="form-control input-lg" name="titulo" value="<?php echo $ob_item->titulo; ?>">
			  </div>
			  <div class="form-group has-warning">
			    <label class="control-label" for="descripcion">Descripción</label>
			    <textarea type="text" class="form-control input-lg" rows="6" name="descripcion"><?php echo $ob_item->descripcion; ?></textarea>
			  </div>
        <div class="form-group">
          <label for="Categoria">Categoria Actual: <?php echo $ob_item->categoria; ?></label>
            <select class="form-control input-lg" name="categoria" id="categoria" onchange="slctryole(this,this.form.subcategoria)">
                <option><?php echo $ob_item->categoria; ?></option> 
                <option value="ciencias_sociales">Ciencias Sociales</option> 
                <option value="ciencias_exactas">Ciencias exactas</option> 
            </select>            
        </div>
        <div class="form-group">
          <label for="Subcategoria">Sub Categoria Actual: <?php echo $ob_item->subcategoria; ?></label>
            <select class="form-control input-lg" name="subcategoria" id="subcategoria">
                <option><?php echo $ob_item->subcategoria; ?></option> 
            </select>            
        </div>
        <div class="form-group has-warning">
          <label for="derechos">Derechos</label>
          <input type="text" class="form-control input-lg" name="derechos" value="<?php echo $ob_item->derechos; ?>" placeholder="Derechos de la obra">
        </div>
        <div class="form-group has-warning">
          <label for="palabras">Palabras clave, máximo 7 separados por coma</label>
          <input type="text" class="form-control input-lg" name="palabras" value="<?php echo $ob_item->palabras; ?>" placeholder="Palabras clave">
        </div>
        <div class="form-group has-warning">
          <label for="precio">Precio</label>
          <input type="text" class="form-control input-lg" name="precio" value="<?php echo $ob_item->precio; ?>" placeholder="Precio">
        </div>
        <div class="form-group has-warning">
          <label for="lanzamiento">Status de Publicacion</label>
          <input type="text" class="form-control input-lg" name="lanzamiento" value="<?php echo $ob_item->lanzamiento; ?>" placeholder="lanzamiento">
        </div>
        
			  <button type="submit" class="btn btn-warning btn-lg">Actualizar</button>
      <?php } ?>  
			<?php echo form_close() ?>
			</fieldset>
      </div>
      <div class="col-xs-3">
        <img src="<?php echo base_url('Amarillo-180x180.png');?>" alt="imagen de portada" class="img-thumbnail">
        
        <p class="help-block">
          <?php 
          $portada = array(
              'nombre' => 'portada',
              'tipo' => 'image/png'
          );
          foreach ($portada as $key => $value) {
            echo $key;
            echo " => ";
            echo $value;
            echo "<br>";
          }
        ?>
        </p>
      </div>
  	</div>
  </div>
</div>





<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container">
  <div class="well">
    <div class="row">
      <div class="col-xs-9">
        <h1>Archivo(s)</h1>
        <table class="table table-bordered">
          <tr class="info">
            <th>Nombre del Archivo</th>
            <th>Descripcion Breve</th>
          </tr>
          <tbody>
          <?php for ($i=0; $i < 10; $i++) { ?>
            <tr>
              <td>archivo1.pdf</td>
              <td>descripcion breve del archivo1</td>
            </tr>
          <?php } ?>
            
          </tbody>
          
        </table>

      </div>
      <div class="col-xs-3">
      <fieldset>
      <?php $attributes = array('class' => '', 'id' => ''); 
      echo form_open("#",$attributes) ?>
      <?php foreach ($obra_data as $ob_item) { ?>
      <legend>Obra [<?php echo $ob_item->id_obra; ?>]</legend>
        <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user');?>">
        <input type="hidden" name="id_obra" value="<?php echo $ob_item->id_obra; ?>">
        <div class="form-group has-warning">
          <label for="archivo">Actividad digital</label>
          <input type="file" id="archivo">
          <p class="help-block">Agregue su archivo {pdf, doc, xls}</p>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      <?php } ?>  
      <?php echo form_close() ?>
      </fieldset>        
      </div>
    </div>
  </div>
</div>

