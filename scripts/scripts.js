

/*
* Get a random integer between min and max (inclusive)
*/
function randInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}


// jQuery to collapse the navbar on scroll
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}


$(document).ready(function(){

  collapseNavbar();
  $(window).scroll(collapseNavbar);
  /*
   * Decrease header opacity on page scroll down.
   * Parallax effect on top image
   */
  $(window).scroll(function() {
    if (screen.width >= 768){
      var scrolledY = $(this).scrollTop();
      $('#first-img').css('background-position', 'left ' + scrolledY + 'px');
    }
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

  /*
   * When bio panel is clicked, make current paragraph
   * disappear and a new one enter
   */
  var bioParagraphs = ["#bio-p1","#bio-p2","#bio-p3","#bio-p4"];
  var currentBio=0;
  $("#main-bio-panel").click(function() {
      if (currentBio < bioParagraphs.length-1){
        currentBio += 1;
        if (currentBio == 1 ) {
          $(bioParagraphs[currentBio-1]).slideUp({queue: false, duration: 1000}, 1000);
        }
        else if (currentBio>1){ //let the first two show.
          $(bioParagraphs[currentBio-1]).fadeOut({queue: false, duration: 1000}, 1000);
          $(bioParagraphs[currentBio-1]).slideUp(1000);
        }
        $(bioParagraphs[currentBio]).slideDown(1000);
      }
      else if (currentBio==bioParagraphs.length-1) {
          $(bioParagraphs[currentBio-1]).fadeOut({queue: false, duration: 1000}, 1000);
          $(bioParagraphs[currentBio-1]).slideUp(1000);
          $(bioParagraphs[currentBio]).slideDown(1000);
          currentBio+=1;
      }
      else {
          $(".bio-panel").fadeOut({queue: false, duration: 1000}, 1000);
          currentBio=0;
          $(bioParagraphs[currentBio]).slideDown(1000);
      }
  });

  $(".project-box").mouseenter(function(){
    $(this).children( "img" ).css('transform', 'scale(1.5)');
  });

  $(".project-box").mouseleave(function(){
    $(this).children( "img" ).css('transform', 'scale(1)');
  });

  $("body").click(function(event) {
      // only do this if navigation is visible, otherwise you see jump in navigation while collapse() is called
       if ($(".navbar-collapse").is(":visible") && $(".navbar-toggle").is(":visible") ) {
          $('.navbar-collapse').collapse('toggle');
      }
  });

  // jQuery for page scrolling feature - requires jQuery UI Easing plugin
  $(function() {
      $('a.page-scroll').bind('click', function(event) {
          var $anchor = $(this);
          $('html, body').stop().animate({
              scrollTop: $($anchor.attr('href')).offset().top
          }, 1000, 'easeInOutExpo');
          event.preventDefault();
      });
  });
});
