<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container">
  <div class="well">
  	<div class="row">
      <div class="col-xs-6">
        <h1>Nueva Obra</h1>
			<fieldset>
			<legend>Registro rápido</legend>
			<?php echo form_open("") ?>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Título</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Título">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Descripción</label>
			    <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Descripción"></textarea>
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox" checked> Borrador
			    </label>
			  </div>
			  <button type="submit" class="btn btn-warning">Salvar</button>
			<?php echo form_close() ?>
			</fieldset>
      </div>
      <div class="col-xs-6">
        <h1></h1>

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
      <div class="col-md-3">
        <h4><img src="..." class="img-responsive" alt="Responsive image"></h4>
      </div>
      <div class="col-md-3">
        <h4>Título de la obra</h4>

      </div>
      <div class="col-md-3">
        <h4>Estado:</h4>
        <h4>Ult.Actualización</h4>

      </div>
      <div class="col-md-3">
        <!-- Indicates caution should be taken with this action -->
		<button type="button" class="btn btn-warning">Actualizar</button>
		<span id="helpBlock" class="help-block">Asigne una portada, suba su archivo, categorice para facilitar su busqueda, etc...</span>

      </div>
  	</div>
  </div>
</div>
<?php } ?>
