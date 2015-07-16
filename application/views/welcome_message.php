<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>">iEurekaWebApp</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url();?>">Inicio</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>">Pagina 1-1</a></li>
            <li><a href="<?php echo base_url();?>">Pagina 1-2</a></li>
            <li><a href="<?php echo base_url();?>">Pagina 1-3</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url();?>">Pagina 2</a></li>
        <li><a href="<?php echo base_url();?>">Pagina 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
        <li><a data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
          <?php echo form_open("admin/login","rol='form'") ?>
            <div class="form-group">
              <label for="email_address"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" name="email_address" class="form-control" id="email_address" placeholder="Escriba su email">
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Escriba su password">
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          <?php echo form_close() ?>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
          <p>No es miembro? <a href="#">Registrese aquí</a></p>
          <p>Olvido su <a href="#">Password?</a></p>
        </div>
      </div>
  </div>
</div>


  
<div class="container">
  <div class="jumbotron">
    <h1>iEureka eCommerce Webapp!</h1>      
    <p>Esta aplicación crecerá conforme se vayan agregando más y más componentes</p>      
    <a href="<?php echo base_url();?>" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Buscar</a>
  </div>
</div>

<div class="container">
  <div class="jumbotron">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo base_url();?>/banner_01.jpg" alt="Banner01">
        <div class="carousel-caption">
          <h3>Banner01</h3>
          <p>Este es el Banner01.</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>/banner_02.jpg" alt="Banner02">
        <div class="carousel-caption">
          <h3>Banner02</h3>
          <p>Este es Banner02.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="<?php echo base_url();?>/banner_03.jpg" alt="Banner03">
        <div class="carousel-caption">
          <h3>Banner03</h3>
          <p>Este es Banner03.</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>/banner_04.jpg" alt="Banner04">
        <div class="carousel-caption">
          <h3>Banner04</h3>
          <p>Este es Banner04.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previo</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</div>
</div>

<div class="container">
  <div class="jumbotron">
  <h1>Otra Seccion!</h1>
  <p>Responsive a partir de Smartphones hacia arriba.</p>
  <div class="row">
    <div class="col-sm-4 col-sm-push-8" style="background-color:lavender;">.col-sm-4 .col-sm-push-8</div>
    <div class="col-sm-8 col-sm-pull-4" style="background-color:lavenderblush;">.col-sm-8 .col-sm-pull-4</div>
  </div>
</div>
</div>

<div class="container">
  <div class="jumbotron">
  <h1>Sección 4 Columnas!</h1>
  <div class="row">
    <div class="col-xs-6 col-sm-3" style="background-color:lavender;">
      <img src="Amarillo-180x180.png" class="img-responsive" alt="Cinque Terre"><a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Comprar</a><br>
    </div>
    <div class="col-xs-6 col-sm-3" style="background-color:lavenderblush;"><img src="Amarillo-180x180.png" class="img-responsive" alt="Cinque Terre"><br><a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Comprar</a></div>
    <!-- Add clearfix for only the required viewport -->
    <div class="clearfix visible-xs"></div>
    <div class="col-xs-6 col-sm-3" style="background-color:lightcyan;"><img src="Amarillo-180x180.png" class="img-responsive" alt="Cinque Terre"><br><a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Comprar</a></div>
    <div class="col-xs-6 col-sm-3" style="background-color:lightgray;"><img src="Amarillo-180x180.png" class="img-responsive" alt="Cinque Terre"><br><a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Comprar</a></div>
  </div>
  </div>
</div>

<div class="container">
  <div class="jumbotron">
  <h1>Otra Seccion 3 Columnas!</h1>
  <p>Responsive a partir de Smartphones hacia arriba.</p>
  <div class="row">
    <div class="col-sm-4" style="background-color:lavender;">.col-sm-4 .col-sm-push-8</div>
    <div class="col-sm-4" style="background-color:lavenderblush;">.col-sm-8 .col-sm-pull-4</div>
    <div class="col-sm-4" style="background-color:lavenderblush;">.col-sm-8 .col-sm-pull-4</div>
  </div>
</div>
</div>


<nav class="navbar-fixed-buttom">
  <div class="container">
  <!-- Example row of columns -->
    <div class="row">
    <?php $galleta = $this->input->cookie('ci_session');
      echo $galleta;
    ?>
    </div>    
  </div> <!-- /container -->  
</nav>
