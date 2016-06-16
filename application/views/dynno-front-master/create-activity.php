<?php
	$template = 'account';
	include 'includes/header_front.php'
?>


<!-- Contenedor general  -->

<div class="contenedor-general">

	<!-- Contenedor contenido -->

	<div class="container">

		<!-- Row por secciones (Header, contenido, footer, etc.) -->

		<div class="row">

			<div class="col-xs-12">

				<div class="contenedor-body">

					<div class="col-sm-3 cont-mascara-menu">

						<div class="mascara-menu"></div>

					</div>

					<div class="row">

						<div class="col-sm-3 hidden-xs">

							<div class="body-nav">

								<div class="nav-perfil">

									<div class="perfil-img">

										<img src="http://placehold.it/100x100" alt="">

									</div>

									<div class="perfil-text">

										¡Hola, <span>Braulio Herrera</span>!

									</div>

								</div>

								<div class="nav-menu">

									<ul>

										<li><i class="icon-info" aria-hidden="true"></i><div>Elige una Licencia</div></li>

										<li class="menu-activo"><i class="icon-news" aria-hidden="true"></i> <div>Crear Actividad</div></li>

										<li><i class="icon-price-tag" aria-hidden="true"></i> <div>Establecer Precio</div></li>

										<li><i class="icon-flag" aria-hidden="true"></i> <div>Publicado</div></li>

									</ul>

								</div>

							</div>

						</div>

						<div class="col-xs-12 col-sm-9">

							<div class="cont-menu-movil visible-xs">

								<div class="menu-movil">

									<div class="menu-opciones">

										<div class="nav-perfil">

											<div class="perfil-img">

												<img src="http://placehold.it/100x100" alt="">

											</div>

											<div class="perfil-text" style="">

												¡Hola, <span>Alan Kimo</span>!

											</div>

											<div class="menu-icon">

												<div class="menu-lineas">

													<span class="linea-arriba"></span>

													<span class="linea-abajo"></span>

												</div>

											</div>

										</div>

										<div class="nav-menu">

											<ul>

												<li class="menu-activo"><i class="icon-info" aria-hidden="true"></i><div>Elige una Licencia</div></li>

												<li><i class="icon-news" aria-hidden="true"></i> <div>Crear Actividad</div></li>

												<li><i class="icon-price-tag" aria-hidden="true"></i> <div>Establecer Precio</div></li>

												<li><i class="icon-flag" aria-hidden="true"></i> <div>Publicado</div></li>

											</ul>

										</div>

									</div>

								</div>

							</div>

							<div class="body-contenido">

								<div class="contenido">

									<div class="contenido-titulo">

										<h1>Crear Actividad</h1>

									</div>

									<?php $attributes = array('class' => '', 'id' => 'FormRegistroNuevaActividad'); 
									echo form_open("obras/create_quick",$attributes) ?>

										<input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user');?>">

										<label for="titulo">Titulo de la actividad</label>

										<input type="text" name="titulo" placeholder="Ingresa un titulo para tu actividad">

										<div class="form-anotacion">Elige un titulo interesante que resuma el contenido de la activdad.</div>										

										<div class="row">

											<div class="col-xs-12 col-md-6">

												<div class="cont-input">

													<label for="">Categoría de la activdad</label>

													<select name="" id="">

														<option value="">Opción 1</option>

														<option value="">Opción 2</option>

														<option value="">Opción 3</option>

														<option value="">Opción 4</option>

													</select>

												</div>

											</div>

											<div class="col-xs-12 col-md-6">

												<div class="cont-input">

													<label for="">Etiquetas relevantes</label>

													<input type="text" placeholder="ej. operaciones algebraicas, etc">

													<div class="form-anotacion">Puedes escribir frases completas o palabras clave separadas por coma.</div>

												</div>

											</div>

										</div>

										<div class="cont-input">

											<label for="descripcion">Descripción de la actividad</label>

											<textarea name="descripcion" id="descripcion" cols="0" rows="15" placeholder="ej. lorem ipsum dolor amet"></textarea>

										</div>

										<button type="submit" class="btn btn-warning">Guardar</button>
									<?php echo form_close() ?>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<?php include 'includes/footer_front.php' ?>