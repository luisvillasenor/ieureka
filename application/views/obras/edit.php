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
        <div class="form-group has-warning">
          <label for="categoria">Categoría</label>
            <select class="form-control input-lg" name="categoria" id="categoria" placeholder="Categoria" title="Categoría">
              <?php foreach ($categorias as $item) { ?>
                <option value="<?php echo $item->id;?>"><?php echo $item->categoria;?></option> 
              <?php } ?>
            </select>
        </div>
        <div class="form-group has-warning">
          <label for="subcategoria">Sub categoria</label>
            <select class="form-control input-lg" name="subcategoria" id="subcategoria" placeholder="subcategoria" title="subcategoria">
              <?php foreach ($subcategorias as $subitem) { ?>
                <option value="<?php echo $subitem->id;?>"><?php echo $subitem->subcategoria;?></option> 
              <?php } ?>            
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
        <div class="form-group has-warning">
          <label for="portada">Portada</label>
          <input type="file" id="portada">
          <p class="help-block">Agregue una portada {png, jpeg}</p>
        </div>
        <div class="form-group has-warning">
          <label for="archivo">Actividad digital</label>
          <input type="file" id="archivo">
          <p class="help-block">Agregue su archivo {pdf, doc, xls}</p>
        </div>
			  <button type="submit" class="btn btn-warning">Actualizar</button>
      <?php } ?>  
			<?php echo form_close() ?>
			</fieldset>
      </div>
      <div class="col-xs-3">
      </div>
  	</div>
  </div>
</div>

