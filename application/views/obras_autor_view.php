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
			    <label for="titulo">Título</label>
			    <input type="text" class="form-control" name="titulo" placeholder="Título">
			  </div>
			  <div class="form-group">
			    <label for="descripcion">Descripción</label>
			    <textarea type="text" class="form-control" name="descripcion" placeholder="Descripción"></textarea>
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
        <h2>¿Cómo?</h2>
        <ul>
        	<li></li>
        	<li></li>
        	<li></li>
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
      </div>
      <div class="col-xs-9">
        <nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Títulos">
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

<?php for ($i=0; $i < 3; $i++) { ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container">
  <div class="well">
  	<div class="row">
      <div class="col-xs-3">
        <h5><img src="..." class="img-responsive" alt="Responsive image"></h5>
      </div>
      <div class="col-xs-3">
        <h5>Título de la obra</h5>

      </div>
      <div class="col-xs-3">
        <h5>Estado:</h5>
        <h5>Ult.Actualización</h5>

      </div>
      <div class="col-xs-3">
        <!-- Indicates caution should be taken with this action -->
		<button type="button" class="btn btn-warning">Actualizar</button>
		<span id="helpBlock" class="help-block">Asigne una portada, suba su archivo, categorice para facilitar su busqueda, etc...</span>

      </div>
  	</div>
  </div>
</div>
<?php } ?>
