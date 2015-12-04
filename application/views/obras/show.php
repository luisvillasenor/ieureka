<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container">
  <div class="well">
  	<div class="row">
      <div class="col-xs-6">
        <h1>Nueva Actividad</h1>
			<fieldset>
			<legend>Registro rápido</legend>
      <?php $attributes = array('class' => '', 'id' => 'FormRegistroNuevaActividad'); 
      echo form_open("obras/create_quick",$attributes) ?>
			  <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user');?>">
			  <div class="form-group">
			    <label for="titulo">Título de la Actividad</label>
			    <input type="text" class="form-control input-lg" name="titulo" placeholder="Título">
			  </div>
			  <div class="form-group">
			    <label for="descripcion">Descripción breve</label>
			    <textarea type="text" class="form-control input-lg" rows="6" name="descripcion" placeholder="Descripción"></textarea>
			  </div>

			  <button type="submit" class="btn btn-warning">Guardar</button>
			<?php echo form_close() ?>
			</fieldset>
      </div>
      <div class="col-xs-6">
        <h2>¿Porqué un Registro rápido?</h2>
        <blockquote>
          <h3>VENTAJAS</h3>
        </blockquote>
        <ul>
        	<li>El registro rápido te permite de manera fácil agregar en el sistema una obra
          para después terminar de configurar.
          </li>
        	<li>
            Te permitirá tener un mejor control de las obras que pretendes publicar 
          </li>
        	<li>
           Registra tus borradores para despues terminar de configurar su publicación 
          </li>
          <li>
            Por default el registro rápido se da de alta con carácter de Borrador.
          </li>
          <br>
            <a type="button" class="btn btn-primary" href="<?php echo base_url("obras/nuevo");?>">Registro Completo</a>
          
        </ul>
      </div>
  	</div>
  </div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container">
  	<div class="row">
      <div class="col-xs-3">
        <h1>Mis Actividades</h1>
        <small>[ <?php echo $this->session->userdata('username');?> ]</small>
      </div>
      <br>
      <div class="col-xs-9">
        <nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php $attributes = array('class' => 'navbar-form navbar-left', 'id' => 'FormBuscarTitulo'); 
          echo form_open("obras/buscartitulo",$attributes) ?>
		        <div class="form-group">
              <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user');?>">
		          <input type="text" name="titulo" id="titulo" class="form-control input-lg" placeholder="Títulos">
		        </div>
		        <button type="submit" class="btn btn-default">Buscar</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
          <?php $attributes = array('class' => 'navbar-form navbar-left', 'id' => 'FormPorFiltro'); 
          echo form_open("obras/porFiltro",$attributes) ?>
            <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user');?>">
            <select class="form-control input-lg" name="categoria" id="categoria" onchange="slctryole(this,this.form.subcategoria)">
                <option>- - Seleccionar - -</option> 
                <option value="ciencias_sociales">Ciencias Sociales</option> 
                <option value="ciencias_exactas">Ciencias exactas</option> 
            </select>            

            <select class="form-control input-lg" name="subcategoria" id="subcategoria" onchange="this.form.submit()">
                <option>- - - - -</option> 
            </select>            
          </form>


		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
      </div>
  	</div>
</div>

<?php foreach ($obras_data as $obra_item) { ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container">
  <div class="well">
  	<div class="row">
      <div class="col-xs-3">
        <h2>Título de la actividad</h2>
        <h5><?php echo $obra_item->titulo; ?></h5>
        <h2>Descripcion Breve</h2>
        <h5><?php echo $obra_item->descripcion; ?></h5>
      </div>
      <div class="col-xs-4">
        <h2>Estado:</h2>
        <h5><?php echo $obra_item->borrador; ?></h5>
        <h2>Fecha de Alta</h2>
        <h5><?php echo $obra_item->fecha_alta; ?></h5>
      </div>
      <div class="col-xs-4">
        <!-- Indicates caution should be taken with this action -->
        <a type="button" class="btn btn-warning btn-block" href="<?php echo base_url("obras/edit/".$obra_item->id_obra."/".$obra_item->id_user."");?>">Editar Actividad</a>
		    <span id="helpBlock" class="help-block">Asigne una portada, suba su archivo, categorice para facilitar su busqueda, etc...</span>
        <!-- Indicates caution should be taken with this action -->
        
        <?php $attributes = array('class' => '', 'id' => 'FormRegistroEditarQuick'); 
        echo form_open("#",$attributes) ?>
          <div class="form-group">
          <img src="<?php echo base_url('Amarillo-180x180.png');?>" alt="imagen de portada" class="img-thumbnail">
            <input type="file" class="btn btn-default" name="portada" size="20">
            <a type="button" class="btn btn-info btn-block" onclick="this.form.submit()">Cambiar Portada</a>
          </div>
        </form>
        

      </div>
  	</div>
  </div>
</div>
<?php } ?>
