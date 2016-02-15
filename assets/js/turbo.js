// Funciones para Abrir/Cerrar modal de Search
$('#trigger-search').click(function() {
	$('#modal-search').animateCSS('fadeInDownBig');
	$('#search-input-focus').focus();
});

$('#close-search i').click(function() {
	$('#modal-search').animateCSS('fadeOutUpBig', function(){
		$('#modal-search').css('display', 'none');
	});
});


// Funciones para Abrir/Cerrar menu mobile
$('#mobile-open').click(function() {
	$(this).hide();
	$('#mobile-close').show();
	$('nav').fadeIn();
	$('nav ul li a').animateCSS('flipInX');
});

$('#mobile-close').click(function() {
	$(this).hide();
	$('#mobile-open').show();
	//$('nav ul li a').animateCSS('flipOutX');
	$('nav').fadeOut();
});