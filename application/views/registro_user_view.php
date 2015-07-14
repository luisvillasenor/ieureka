<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
  	<div class="row">
      <div class="col-md-6">
        <h1>Nuevo Registro</h1>
			<fieldset>
			<legend>Quiero ser Miembro</legend>
			<?php echo form_open("users/nuevo_usuario") ?>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				<input type="hidden" name="rol" value="Autor" />
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox"> Check me out
			    </label>
			  </div>
			  <button type="submit" class="btn btn-warning">Submit</button>
			<?php echo form_close() ?>
			</fieldset>
      </div>
      <div class="col-md-6">
        <h1>Mi Cuenta</h1>
			<fieldset>
			<legend>Ya soy Miembro</legend>
			<?php echo form_open("admin/login") ?>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <?php  
        echo form_input('email_address', set_value('email_address'), 'id="email_address" class="form-control" placeholder="Email"');
        ?>
				<input type="hidden" name="rol" value="Autor" />
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <?php  
        echo form_password('password', '', 'id="password" class="form-control" placeholder="Password"');
        ?>
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox"> Check me out
			    </label>
			  </div>
			  <button type="submit" class="btn btn-danger">Submit</button>
			<?php echo form_close() ?>
			</fieldset>
      </div>
  	</div>
  </div>
</div>

