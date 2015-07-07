<div id="wrapper"> 
  <!-- Sidebar -->
  <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
          <li class="sidebar-brand"><a><span class="glyphicon glyphicon-user"> USER</span></a></li>
          <li><a href="<?php echo base_url('dashboard/index');?>"><span class="glyphicon glyphicon-home"> Bienvenido</span></a></li>
          <li><a href="<?php echo base_url('dashboard/index');?>"><span class="glyphicon glyphicon-object-align-bottom"> Categorias</span></a></li>
          <li><a href="<?php echo base_url('dashboard/index');?>"><span class="glyphicon glyphicon-object-align-bottom"> Usuarios</span></a></li>
          <li><a href="<?php echo base_url('dashboard/index');?>"><span class="glyphicon glyphicon-object-align-bottom"> Términos y Condiciones</span></a></li>
          <li><a href="<?php echo base_url('dashboard/index');?>"><span class="glyphicon glyphicon-object-align-bottom"> Politica de Privacidad</span></a></li>
          <li><a href="<?php echo base_url('dashboard/index');?>"><span class="glyphicon glyphicon-object-align-bottom"> Regalias y Precios</span></a></li>
          <li><a href="<?php echo base_url('dashboard/index');?>"><span class="glyphicon glyphicon-object-align-bottom"> Impuestos</span></a></li>
          <li><a href="<?php echo base_url('admin/logout');?>"><span class="glyphicon glyphicon-off"> Salir</span></a></li>
      </ul>
  </div>
  <!-- /#sidebar-wrapper -->
<!--
  <div class="row" align="center">
  <p class="navbar-text navbar-left"><a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><span class="glyphicon glyphicon-fullscreen"></span></a> Pantalla Completa</p>
  </div> row well -->

  <!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="container-fluid">                
      <div class="row" align="center">
        <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Datos</h3>
              </div>
              <div class="panel-body" align="center">


                <h1>Variables de la COOKIE:</h1>
                <?php $galleta = $this->input->cookie('ci_session');
                  echo $galleta;
                ?>
                <h1>Variables de la SESION:</h1>
                <?php foreach ($all_userdata as $key => $value) {
                  # code...
                  echo $key.' = ';
                  echo $value.'<br>';
                } ?>
                
              </div>
           </div>
          </div>   
        </div>
      </div><!-- row well -->



    </div>
  </div><!-- /#page-content-wrapper -->








</div>
<!-- /#wrapper -->