$(window).scroll(function(){

  if ( $(window).scrollTop() > 25) {
    //  $('#main-nav').slideDown({duration: 1000}, 1000);
      //$('#main-nav').addClass('navbar-inverse');
  }

});

$(".spin").mouseenter(function() {
  console.log("here");
  $(this).rotate(360, {duration: 500});
});
