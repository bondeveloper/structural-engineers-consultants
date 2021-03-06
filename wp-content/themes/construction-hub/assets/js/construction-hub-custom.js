/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

//====  Search Box ====
jQuery(function($){
  "use strict";
    $('.menu > ul').superfish({
      delay:       500,                            
      animation:   {opacity:'show',height:'show'},  
      speed:       'fast'                         
    });

    $('.search-box span a').click(function(){
      $(".serach_outer").toggle();
    });
});

//====  Mobile responsive Menu ====
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

// ===== Scroll to Top ==== 
jQuery(function($){
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {
      $('#return-to-top').fadeIn(200);
    } else {
      $('#return-to-top').fadeOut(200);
    }
  });
  $('#return-to-top').click(function() {
    $('body,html').animate({
      scrollTop : 0
    }, 500);
  });
});