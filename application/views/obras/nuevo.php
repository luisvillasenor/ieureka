<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container">
  <div class="well">
  	<div class="row">
      <div class="col-xs-9">
        <h1>Nueva Actividad</h1>
			<fieldset>
			<legend>Registro completo</legend>
      <?php $attributes = array('class' => '', 'id' => 'FormRegistroNuevaActividad'); 
      echo form_open("obras/create",$attributes) ?>
			  <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user');?>">
			  <div class="form-group">
			    <label for="titulo">Título de la Actividad</label>
			    <input type="text" class="form-control input-lg" name="titulo" placeholder="Título">
			  </div>
			  <div class="form-group">
			    <label for="descripcion">Descripción breve</label>
			    <textarea type="text" class="form-control input-lg" rows="6" name="descripcion" placeholder="Descripción"></textarea>
			  </div>

        <div class="form-group">
          <label for="Categoria">Categoria</label>
            <select class="form-control input-lg" name="categoria" id="categoria" onchange="slctryole(this,this.form.subcategoria)">
                <option>- - Seleccionar - -</option> 
                <option value="ciencias_sociales">Ciencias Sociales</option> 
                <option value="ciencias_exactas">Ciencias exactas</option> 
            </select>            
        </div>
        <div class="form-group">
          <label for="Subcategoria">Sub Categoria</label>
            <select class="form-control input-lg" name="subcategoria" id="subcategoria" onchange="slctryole(this,this.form.select3)">
                <option>- - Seleccionar - - -</option> 
            </select>            
        </div>



        <div class="form-group">
          <label for="derechos">Derechos</label>
          <input type="text" class="form-control input-lg" name="derechos" placeholder="Derechos de la obra">
        </div>
        <div class="form-group">
          <label for="palabras">Palabras clave, máximo 7 separados por coma</label>
          <input type="text" class="form-control input-lg" name="palabras" placeholder="Palabras clave">
        </div>
        <div class="form-group">
          <label for="precio">Precio</label>
          <input type="text" class="form-control input-lg" name="precio" placeholder="Precio">
        </div>
        <div class="form-group">
          <label for="lanzamiento">Status de Publicacion</label>
          <input type="text" class="form-control input-lg" name="lanzamiento" placeholder="lanzamiento" readonly>
        </div>

			  <button type="submit" class="btn btn-warning">Guardar</button>
			<?php echo form_close() ?>
			</fieldset>
      </div>
      <div class="col-xs-3">
      </div>
  	</div>
  </div>
</div>
