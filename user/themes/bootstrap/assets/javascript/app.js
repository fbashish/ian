$(document).ready(function(){



  

// $('.members').slick({
//   centerMode: true,
//   centerPadding: '60px',
//   slidesToShow: 9,
//   autoplay: true,
//   arrows: false,
//   responsive: [
//     {
//       breakpoint: 768,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '40px',
//         slidesToShow: 3
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '40px',
//         slidesToShow: 1
//       }
//     }
//   ]
// });


//  $('.slider-for').slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   arrows: false,
//   fade: true,
//   asNavFor: '.slider-nav'
// });
// $('.slider-nav').slick({
//   slidesToShow: 3,
//   slidesToScroll: 1,
//   asNavFor: '.slider-for',
//   dots: true,
//   centerMode: true,
//   focusOnSelect: true
// });


 $('.slick-videos').slick();

  $('.slick-pictures').slick({
    autoplay: true,
    autoplaySpeed: 3500,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: false,
  dots: false,
  variableHeight: true,
  asNavFor: '.landscape-nav'

});

     $('.landscape-nav').slick({
  slidesToShow: 7,
  slidesToScroll: 1,
  asNavFor: '.slick-pictures',
  dots: false,
  centerMode: true,
  focusOnSelect: true,
  arrows: false,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
      }
    },

    
  ]

});


 ///// Portrait Balloon slider

    $('.slick-portrait-pictures').slick({
  autoplay: true,
  autoplaySpeed: 3500,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: false,
  dots: false,
  asNavFor: '.portrait-nav'

});

    $('.portrait-nav').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.slick-portrait-pictures',
  dots: false,
  centerMode: true,
  focusOnSelect: true,
  arrows: false,
   responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
      }
    },

    
  ]
});


 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});


 $('.slick-videos').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: false,
  dots: true
});

  $('.slick-pictures').slick({
    autoplay: true,
    autoplaySpeed: 3500,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: false,
  dots: false,
  variableHeight: true,
  asNavFor: '.landscape-nav'

});

     $('.landscape-nav').slick({
  slidesToShow: 7,
  slidesToScroll: 1,
  asNavFor: '.slick-pictures',
  dots: false,
  centerMode: true,
  focusOnSelect: true,
  arrows: false,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
      }
    },

    
  ]

});


 ///// Portrait Balloon slider

    $('.slick-portrait-pictures').slick({
  autoplay: true,
  autoplaySpeed: 3500,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: false,
  dots: false,
  asNavFor: '.portrait-nav'

});

    $('.portrait-nav').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.slick-portrait-pictures',
  dots: false,
  centerMode: true,
  focusOnSelect: true,
  arrows: false,
   responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
      }
    },

    
  ]
});





 





  $('.homepage-slider').slick({

    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 3500,
    fade: true,
    speed: 1000
  });

    $('.page-slider').slick({
    arrows: true,
    autoplay: true,
  });





    // $(".entry-content").fitVids();


    // $(".entry-content").fitVids();


    if ($('.grid').length != 0){

    // init Masonry
    var $grid = $('.grid').masonry({
      // options...
    });
    // layout Masonry after each image loads
    $grid.imagesLoaded().progress( function() {
      $grid.masonry('layout');
    });
  }



//Fancybox stuff 

  $('.fancybox').fancybox({
        helpers: {
          overlay: {
            locked: false,
          }
        }
  });

    $(".iframeForm").fancybox({
    minWidth  : 325,
    maxWidth : 1000,
    fitToView : false,
    width   : '75%',
    height    : '85%',
    autoHeight: false,
    autoSize  : false,
    closeClick  : false,
    openEffect  : 'fade',
    closeEffect : 'fade',
    autoResize : true,
    modal: false,
    scrolling : 'auto',
  preload   : false,
    helpers: {


          overlay: {
            locked: false,
            closeClick: false
          }
        }
  });


var stickySidebar = $('.sticky');

if (stickySidebar.length > 0) { 
  var stickyHeight = stickySidebar.height(),
      sidebarTop = stickySidebar.offset().top;
}

// on scroll move the sidebar
// $(window).scroll(function () {
//   if (stickySidebar.length > 0) { 
//     var scrollTop = $(window).scrollTop();
            
//     if (sidebarTop < scrollTop) {
//       stickySidebar.css('top', scrollTop - sidebarTop);

//       // stop the sticky sidebar at the footer to avoid overlapping
//       var sidebarBottom = stickySidebar.offset().top + stickyHeight,
//           stickyStop = $('.main-content').offset().top + $('.main-content').height();
//       if (stickyStop < sidebarBottom) {
//         var stopPosition = $('.main-content').height() - stickyHeight;
//         stickySidebar.css('top', stopPosition);
//       }
//     }
//     else {
//       stickySidebar.css('top', '0');
//     } 
//   }
// });

// $(window).resize(function () {
//   if (stickySidebar.length > 0) { 
//     stickyHeight = stickySidebar.height();
//   }
// });


//// OFF CANVAS settings

  $(document).on('opened.zf.offcanvas', function () {
      
      $('.parallax-mirror').addClass('hidden');
      $('button.menu-icon').addClass('rotate');
       // $('html').css('overflow', 'hidden');

  });

   $(document).on('closed.zf.offcanvas', function () {
      
      $('.parallax-mirror').removeClass('hidden');
      $('button.menu-icon').removeClass('rotate');
       $('html').css('overflow', 'auto');

  });




/////  WAYPOINTS

$('#specials').waypoint(             
    function() {
      if ($("#header2").is(":hidden")) {
      $("#header2").slideDown(200);
      } else {
          $("#header2").slideUp(100);
      }
    }
  )



$('#specials').waypoint(             
    function() {
      if ($("#header2").is(":hidden")) {
      $('.sticky-sidebar').addClass('fixed'); 
      } else {
          $('.sticky-sidebar').removeClass('fixed'); 
      }
    }
  )



$('.sidebar').waypoint({

  // $('.boosh').waypoint({


  offset: +115,


    handler: function(direction) {
      $('.sticky-sidebar').toggleClass('sticky-top'); //change position to fixed by adding 'sticky-top' class
      var stickyWidth =     $('.sidebar').width();
      $('.sticky-sidebar').css("width", stickyWidth );
    }
});

$('#footer-container').waypoint({
  // $('.boosh').waypoint({


  offset: $('.sticky-sidebar').height()+155, //calculate menu's height and margin before footer


    handler: function(direction) {
    $('.sticky-sidebar').toggleClass('sticky-top'); //remove 'sticky-top' class
    $('.sidebar').toggleClass('sticky-bottom'); //change position to absolute for the wrapper
    $('.sidebar').css("bottom",$('#footer-container').height()+125);

    // var stickyWidth =     $('.sticky-sidebar').width();
    //   $('.sidebar').css("width", stickyWidth );


  }
});


$( "li.menu-item a:contains('Online Reservations')" ).addClass('iframeForm fancybox.iframe');
$( "li.menu-item a:contains('Purchase Gift Certificates')" ).addClass('iframeForm fancybox.iframe');









});




