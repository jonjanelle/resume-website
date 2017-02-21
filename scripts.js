$(document).ready(function(){

  $(window).scroll(function() {
    $(".bgimg-1 .dark-strip").css({
      'opacity': 1 - (($(this).scrollTop()) / 350)
    });
  });

});
