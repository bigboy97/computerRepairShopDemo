//Configures Carousel
$('.carousel').carousel({
    interval: 2000,
    pause: false
  });

  //Specifiys a target to spy on
  $('body').scrollspy({ target: '#navbarSupportedContent' });

  //Init tooltips
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });