

/*
* Get a random integer between min and max (inclusive)
*/
function randInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

$(document).ready(function(){
  /*
   * Decrease header opacity on page scroll down.
   * Parallax effect on top image
   */
  $(window).scroll(function() {
    var scrolledY = $(window).scrollTop();
    $('#first-img').css('background-position', 'left ' + scrolledY + 'px');

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
  var bioParagraphs = ["#bio-p1","#bio-p2","#bio-p3","#bio-p4","#bio-p5","#bio-p6","#bio-p7"];
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

});
