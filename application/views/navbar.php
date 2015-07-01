<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo base_url('member/'); ?>" class="navbar-brand">Home</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">MiBiblioteca</a></li>
        <li><a href="#">MiPefil</a></li>
        <li><a href="<?php echo base_url('admin/logout');?>">(<?php echo $session_id = $this->session->userdata('username');?>) <span class="glyphicon glyphicon-off"> Salir</span></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>