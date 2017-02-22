
var bioParagraphs = ["#bio-p1","#bio-p2","#bio-p3"];
var currentBio=0;

$(document).ready(function(){
  /*
   * Decrease header opacity on page scroll down.
   */
  $(window).scroll(function() {
    $(".bgimg-1 .dark-strip").css({
      'opacity': 1 - (($(this).scrollTop()) / 350)
    });
  });

  /*
   * Setup sliding panel effect for project boxes
   * on mouse enter/leave
   */
  $(".project-box").mouseenter(function() {
      jQuery(this).children("div").slideDown();

  });
  $(".project-box").mouseleave(function() {
      jQuery(this).children("div").slideUp();
  });

  $("#bio-panel").click(function() {
    $(this).fadeOut();
    $("#biop1").fadeIn();

  });
});
