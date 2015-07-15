<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url('shop/index');?>">
        <img alt="Tienda" src="...">
      </a>      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url('obras/index');?>">Obras <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Informes</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Título">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a>Hola: <?php echo $this->session->userdata('username');?></a></li>
        <li class="dropdown">          
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi Cuenta <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('member/autor');?>"><button type="button" class="btn btn-primary navbar-btn">Actualizar Mi Cuenta</button></a></li>
            <li><a href="<?php echo base_url('admin/logout');?>"><button type="button" class="btn btn-default navbar-btn">Cerrar Sesion</button></a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>