$(document).ready(function(){

  $(window).scroll(function() {
    $(".bgimg-1 .dark-strip").css({
      'opacity': 1 - (($(this).scrollTop()) / 350)
    });
  });

  $(".project-box").mouseenter(function() {
      jQuery(this).children("div").slideDown();

  });
  $(".project-box").mouseleave(function() {
      jQuery(this).children("div").slideUp();
  });

  $("#bio-panel").click(function() {


  });



});
