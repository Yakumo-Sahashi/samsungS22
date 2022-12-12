$(document).ready(() => {
	let altura = $('.menu').offset().top;
	$(window).on('scroll', () => {
		if ($(window).scrollTop() > altura) {
			$('.menu').addClass('menu-fixed');
			$('.menu').removeClass('bg-transparente').addClass('bg-azul');
		} else {
			$('.menu').removeClass('menu-fixed');
			$('.menu').removeClass('bg-azul').addClass('bg-transparente');
		}
	});
});

window.onscroll = () => {
    if(document.documentElement.scrollTop > 100 ) {
        $('.go-top-container').addClass('show');
    }else{
        $('.go-top-container').removeClass('show');
    }
}

document.querySelector('.go-top-container').addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

window.onload = () => {
	let carga = document.getElementById('contenedor');
	carga.style.visibility = 'hidden';
	carga.style.opacity = '0';
}

const cargar = () => {
	let carga = document.getElementById('contenedor2');
	carga.style.visibility = 'visible';
	carga.style.opacity = '100';
}

const finalizado = () => {
	let carga = document.getElementById('contenedor2');
	carga.style.visibility = 'hidden';
	carga.style.opacity = '0';
}