var textnav = $('.textnav');
$(window).scroll(function (event) {
  var scrollTop = $(window).scrollTop();
  if (scrollTop > 41) {
    textnav.removeClass('text-light');
    navA();
  }
  if (scrollTop < 41) {
    textnav.addClass('text-light');
    navB();
  }
});
var imgnav = document.querySelector('.imgnav');
var nav = document.querySelector('#nav');
function navA() {
  imgnav.setAttribute('src', 'assets/fav-icon-placetobuy.png');
  imgnav.classList.add('w-35');
  nav.classList.add('fixed-top');
  nav.classList.add('bg-light');
}
function navB() {
  imgnav.setAttribute('src', 'assets/fav-icon-placetobuy_blanco.png');
  imgnav.classList.remove('w-35');
  nav.classList.remove('fixed-top');
  nav.classList.remove('bg-light');
}
$('.menubar').click(function () {
  $('.nav-oc').addClass('nav-oc-show');
  $('.ocmen').addClass('show');
})
$('.ocmen').click(function () {
  $('.nav-oc').removeClass('nav-oc-show');
  $('.ocmen').removeClass('show');
})

$('.carousel1').carousel({
  interval: 5000,
});

$(".carousel").swipe({

  swipe: function (event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll: "vertical"

});