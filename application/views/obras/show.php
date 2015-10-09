<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container">
  <div class="well">
  	<div class="row">
      <div class="col-xs-6">
        <h1>Nueva Obra</h1>
			<fieldset>
			<legend>Registro rápido</legend>
			<?php echo form_open("obras/create","rol='form' class='' ") ?>
			  <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user');?>">
			  <div class="form-group">
			    <label for="titulo">Título de la Obra</label>
			    <input type="text" class="form-control input-lg" name="titulo" placeholder="Título">
			  </div>
			  <div class="form-group">
			    <label for="descripcion">Descripción breve</label>
			    <textarea type="text" class="form-control input-lg" rows="6" name="descripcion" placeholder="Descripción"></textarea>
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox" name="borrador"> Borrador
			    </label>
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
        </ul>
      </div>
  	</div>
  </div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container">
  	<div class="row">
      <div class="col-xs-3">
        <h1>Mis Obras</h1>
        <small>[ <?php echo $this->session->userdata('username');?> ]</small>
      </div>
      <br>
      <div class="col-xs-9">
        <nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control input-lg" placeholder="Títulos">
		        </div>
		        <button type="submit" class="btn btn-default">Buscar</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">          
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filtros por: <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Estado</a></li>
		            <li><a href="#">Colaborador</a></li>
		            <li><a href="#">ISBN</a></li>
		          </ul>
		        </li>
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
      	<h4>Portada Obra [<?php echo $obra_item->id_obra; ?>]</h4>
        <h5><img src="..." class="img-responsive" alt="Responsive image"></h5>
      </div>
      <div class="col-xs-3">
        <h4>Título de la obra</h4>
        <h5><?php echo $obra_item->titulo; ?></h5>
        <h4>Descripcion Breve</h4>
        <h5><?php echo $obra_item->descripcion; ?></h5>
      </div>
      <div class="col-xs-3">
        <h4>Estado:</h4>
        <h5><?php echo $obra_item->borrador; ?></h5>
        <h4>Fecha de Alta</h4>
        <h5><?php echo $obra_item->fecha_alta; ?></h5>
      </div>
      <div class="col-xs-3">
        <!-- Indicates caution should be taken with this action -->
        <a type="button" class="btn btn-primary btn-block" href="<?php echo base_url("obras/edit/".$obra_item->id_obra."/".$obra_item->id_user."");?>">Actualizacion Rapida</a>
		<button type="button" class="btn btn-warning btn-block">Actualizar Detalles</button>
		<span id="helpBlock" class="help-block">Asigne una portada, suba su archivo, categorice para facilitar su busqueda, etc...</span>

      </div>
  	</div>
  </div>
</div>
<?php } ?>
