<div id="modal-olvide_pwd">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<form>
					<div id="close-olvide_pwd">
						<i class="icon-cross"></i>
					</div>
					<input id="olvide_pwd-input-focus" type="text" value="" name="" placeholder="buscar actividades" autofocus>
					<input type="submit" value="Buscar">
					<span>para iniciar la busqueda presiona enter</span>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	$('#trigger-olvide_pwd').click(function() {
		$('#modal-olvide_pwd').animateCSS('fadeInDownBig');
		$('#olvide_pwd-input-focus').focus();
	});

	$('#close-olvide_pwd i').click(function() {
		$('#modal-olvide_pwd').animateCSS('fadeOutUpBig', function(){
			$('#modal-olvide_pwd').css('display', 'none');
		});
	});
</script>