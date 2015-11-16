<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url('users/login');?>"><span class="glyphicon glyphicon-log-in"></span> Ingresa</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          
        </li>        
      </ul>
    </div>
  </div>
</nav>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="">
  <div class="container">
  	<div class="row">
      <div class="well col-md-6">
        <h1>Acceso</h1>
			<fieldset>
			<?php $attributes = array('class' => '', 'id' => 'FormAcceso'); 
      echo form_open("admin/login",$attributes) ?>
          <div class="form-group">
            <label for="email_address"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="email" name="email_address" class="form-control input-lg" id="email_address" placeholder="Escriba su email">
          </div>
          <div class="form-group">
            <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Escriba su password">
          </div>
          <button type="submit" class="btn btn-success btn-lg">LOGIN</button>
      <?php echo form_close() ?>
      </fieldset>
      </div>

      <div class="well col-md-6">
        <h1>Nuevo Registro</h1>
      <fieldset>
      <?php $attributes = array('class' => '', 'id' => 'FormRegistrarNuevaCuenta'); 
      echo form_open("users/nuevo_usuario",$attributes) ?>
        <input type="hidden" name="grabar" value="si" />
          <div class="form-group">
            <label for="Correo">Email address</label>
            <input type="email" class="form-control input-lg" name="correo" id="correo" placeholder="Correo">
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control input-lg" name="password" id="password" placeholder="Password">
          </div>
                    
          
        <div class="form-group">
        <label class="col-xs-3 control-label">Quiero registrarme como ...</label>
        <div class="col-xs-6">
            <div class="radio">
                <label>
                    <input type="radio" name="rol" value="2" /> Creador
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="rol" value="1" /> Usuario
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
    <label class="col-xs-12 control-label">Lea los Terminos y Condiciones</label>
        <div class="col-xs-12">
            <div style="border: 1px solid #e5e5e5; height: 200px; overflow: auto; padding: 10px;">
                <p>Lorem ipsum dolor sit amet, veniam numquam has te. No suas nonumes recusabo mea, est ut graeci definitiones. His ne melius vituperata scriptorem, cum paulo copiosae conclusionemque at. Facer inermis ius in, ad brute nominati referrentur vis. Dicat erant sit ex. Phaedrum imperdiet scribentur vix no, ad latine similique forensibus vel.</p>
                <p>Dolore populo vivendum vis eu, mei quaestio liberavisse ex. Electram necessitatibus ut vel, quo at probatus oportere, molestie conclusionemque pri cu. Brute augue tincidunt vim id, ne munere fierent rationibus mei. Ut pro volutpat praesent qualisque, an iisque scripta intellegebat eam.</p>
                <p>Mea ea nonumy labores lobortis, duo quaestio antiopam inimicus et. Ea natum solet iisque quo, prodesset mnesarchum ne vim. Sonet detraxit temporibus no has. Omnium blandit in vim, mea at omnium oblique.</p>
                <p>Eum ea quidam oportere imperdiet, facer oportere vituperatoribus eu vix, mea ei iisque legendos hendrerit. Blandit comprehensam eu his, ad eros veniam ridens eum. Id odio lobortis elaboraret pro. Vix te fabulas partiendo.</p>
                <p>Natum oportere et qui, vis graeco tincidunt instructior an, autem elitr noster per et. Mea eu mundi qualisque. Quo nemore nusquam vituperata et, mea ut abhorreant deseruisse, cu nostrud postulant dissentias qui. Postea tincidunt vel eu.</p>
                <p>Ad eos alia inermis nominavi, eum nibh docendi definitionem no. Ius eu stet mucius nonumes, no mea facilis philosophia necessitatibus. Te eam vidit iisque legendos, vero meliore deserunt ius ea. An qui inimicus inciderint.</p>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-9">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="terminos" value="1" /> Acepto los Terminos y Condiciones
                </label>
            </div>
        </div>
    </div>

          <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTRAR CUENTA</button>
          
          </div>

          
          
      <?php echo form_close() ?>
      </fieldset>
      </div>
  	</div>
  </div>
</div>

