"use strict";

$(document).ready(function () {
  var altura = $('.menu').offset().top;
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > altura) {
      $('.menu').addClass('menu-fixed');
      $('.menu').removeClass('bg-transparente').addClass('bg-azul');
    } else {
      $('.menu').removeClass('menu-fixed');
      $('.menu').removeClass('bg-azul').addClass('bg-transparente');
    }
  });
});

window.onscroll = function () {
  if (document.documentElement.scrollTop > 100) {
    $('.go-top-container').addClass('show');
  } else {
    $('.go-top-container').removeClass('show');
  }
};

document.querySelector('.go-top-container').addEventListener('click', function () {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

window.onload = function () {
  var carga = document.getElementById('contenedor');
  carga.style.visibility = 'hidden';
  carga.style.opacity = '0';
};

var cargar = function cargar() {
  var carga = document.getElementById('contenedor2');
  carga.style.visibility = 'visible';
  carga.style.opacity = '100';
};

var finalizado = function finalizado() {
  var carga = document.getElementById('contenedor2');
  carga.style.visibility = 'hidden';
  carga.style.opacity = '0';
};