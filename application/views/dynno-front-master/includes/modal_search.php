<div id="modal-search">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<form>
					<div id="close-search">
						<i class="icon-cross"></i>
					</div>
					<input id="search-input-focus" type="text" value="" name="" placeholder="buscar actividades" autofocus>
					<input type="submit" value="Buscar">
					<span>para iniciar la busqueda presiona enter</span>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	$('#trigger-search').click(function() {
		$('#modal-search').animateCSS('fadeInDownBig');
		$('#search-input-focus').focus();
	});

	$('#close-search i').click(function() {
		$('#modal-search').animateCSS('fadeOutUpBig', function(){
			$('#modal-search').css('display', 'none');
		});
	});
</script>