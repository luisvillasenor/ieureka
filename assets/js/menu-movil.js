

var Contador = 1;

var Cantidad = 0;

function AbrirMenu(){

	Cantidad = ($('.menu-opciones .nav-menu ul li').length * $('.menu-opciones .nav-menu ul li').outerHeight());

	$('.menu-lineas span:first-child').css({'-webkit-transform-origin':'left' , '-moz-transform-origin':'left' , '-ms-transform-origin':'left' , '-o-transform-origin':'left' , 'transform-origin':'left' , 'top':'40%'});

	$('.menu-lineas span:last-child').css({'-webkit-transform-origin':'left' , '-moz-transform-origin':'left' , '-ms-transform-origin':'left' , '-o-transform-origin':'left' , 'transform-origin':'left' , 'bottom':'40%'});

	$('.menu-lineas span:first-child').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){

		$('.menu-lineas span:first-child').css({'-webkit-transform':'rotate(40deg) translateX(-50%)' , '-ms-transform':'rotate(40deg) translateX(-50%)' , '-o-transform':'rotate(40deg) translateX(-50%)' , 'transform':'rotate(40deg) translateX(-50%)'});

		$('.menu-lineas span:last-child').css({'-webkit-transform':'rotate(-40deg) translateX(-50%)' , '-ms-transform':'rotate(-40deg) translateX(-50%)' , '-o-transform':'rotate(-40deg) translateX(-50%)' , 'transform':'rotate(-40deg) translateX(-50%)'});

		$('.menu-opciones .nav-menu ul').css('height',Cantidad);

		$('.menu-lineas span:last-child').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){

			Contador = 2;

		});

	});

}

function CerrarMenu(){

		$('.menu-lineas span:first-child').css({'-webkit-transform':'rotate(0deg) translateX(-50%)' , '-ms-transform':'rotate(0deg) translateX(-50%)' , '-o-transform':'rotate(0deg) translateX(-50%)' , 'transform':'rotate(0deg) translateX(-50%)'});

		$('.menu-lineas span:last-child').css({'-webkit-transform':'rotate(0deg) translateX(-50%)' , '-ms-transform':'rotate(0deg) translateX(-50%)' , '-o-transform':'rotate(0deg) translateX(-50%)' , 'transform':'rotate(0deg) translateX(-50%)'});

		$('.menu-lineas span:first-child').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){

			$('.menu-lineas span:first-child').css({'-webkit-transform-origin':'left' , '-moz-transform-origin':'left' , '-ms-transform-origin':'left' , '-o-transform-origin':'left' , 'transform-origin':'left' , 'top':'0%'});

			$('.menu-lineas span:last-child').css({'-webkit-transform-origin':'left' , '-moz-transform-origin':'left' , '-ms-transform-origin':'left' , '-o-transform-origin':'left' , 'transform-origin':'left' , 'bottom':'0%'});

			$('.menu-opciones .nav-menu ul').css('height',0);

			$('.menu-lineas span:last-child').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){

				Contador = 1

			});

		});		

}

$(document).ready(function(){
	

	$('.menu-lineas').on('click', function(){

		if(Contador == 1){

			AbrirMenu();

		}
		else{

			CerrarMenu();
		}

	});

});