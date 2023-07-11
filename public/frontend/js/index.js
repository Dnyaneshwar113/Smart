const mobile_nav = document.querySelector(".mobile-navbar-btn");

const nav_header = document.querySelector(".header");



const toggleNavbar = () => {

  nav_header.classList.toggle("active");

};



mobile_nav.addEventListener("click", () => toggleNavbar());



// mobile navbar submenu

$('.service_offerings_icon').click(function(event){

    // event.preventDefault();

   $('#sub-menu-1').slideToggle();

   $('.service_offerings_icon').toggleClass('active');

});

$('.about_sub_icon').click(function(event){

    // event.preventDefault();

   $('#sub-menu-2').slideToggle();

   $('.about_sub_icon').toggleClass('active');

});

$('.itserviceicon').click(function(event){

    // event.preventDefault();

   $('#sub-sub-menu-1').slideToggle();

   $('.itserviceicon').toggleClass('active');

});

$('.itsolutionicon').click(function(event){

    // event.preventDefault();

   $('#sub-sub-menu-2').slideToggle();

   $('.itsolutionicon').toggleClass('active');

});





//services

$(document).ready(function(){

      $('.services').slick({

        slidesToShow: 4,

        slidesToScroll: 1,

        arrows: true,

        dots: false,

        speed: 300,

        infinite: true,

        autoplaySpeed: 5000,

        autoplay: true,

        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',

        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',

        responsive: [

      {

        breakpoint: 991,

        settings: {

          slidesToShow: 3,

        }

      },

      {

        breakpoint: 767,

        settings: {

          slidesToShow: 1,

        }

      }

    ]

      });

    });



//gallery



$('.gallery-slider').slick({

  infinite: false,

  slidesToShow: 4,

  slidesToScroll: 1,

  speed: 300,

  autoplaySpeed: 2000,

  autoplay: true,

  dots: true,

  arrows: true,

          prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',

        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',

          responsive: [

      {

        breakpoint: 991,

        settings: {

          slidesToShow: 3,

        }

      },

      {

        breakpoint: 767,

        settings: {

          slidesToShow: 2,

        }

      },

      {

        breakpoint: 560,

        settings: {

          slidesToShow: 1,

        }

      }

    ]

});
 

// 

$('.multiple-items').slick({

  infinite: true,

  slidesToShow: 2,

  slidesToScroll: 1,

  dots: true,

          prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',

        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',

          responsive: [

      {

        breakpoint: 991,

        settings: {

          slidesToShow: 2,

        }

      },

      {

        breakpoint: 767,

        settings: {

          slidesToShow: 1,

        }

      }

    ]

});



// brand

$('.clients_wrapper').slick({

  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 1,
  speed: 2000,
  autoplaySpeed: 0,
  autoplay: true,
  cssEase: 'linear',
  centerMode: true,
  dots: false,
  arrows: true,
          prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
          responsive: [

      {

        breakpoint: 991,

        settings: {

          slidesToShow: 3,

        }

      },

      {

        breakpoint: 767,

        settings: {

          slidesToShow: 2,

        }

      },

      {

        breakpoint: 560,

        settings: {

          slidesToShow: 1,

        }

      }

    ]

});



// 

$('.testimonials-items').slick({

  infinite: true,

  slidesToShow: 1,

  slidesToScroll: 1,

  dots: true

});





// progress

var skills = {

  ht: 90,

  cs: 80,

  js: 60,

  rc: 50,

  jq: 60

};



$.each(skills, function(key, value) {

  var skillbar = $("." + key);



  skillbar.animate(

    {

      width: value + "%"

    },

    3000,

    function() {

      $(".speech-bubble").fadeIn();

    }

  );

}); 



// sticky header

window.onscroll = function() {scrollFunction()};



function scrollFunction() {

  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {

      document.querySelector(".header").classList.add("fade");

      document.querySelector(".header").classList.add("bg");

      document.querySelector(".logo img").setAttribute("src", "https://wattguru.com/images/wattGuru-logo-blue.png");

      document.querySelector(".logo img").style.height = "5rem";

      

       

     var nodeList = document.querySelectorAll(".navbar-link");

      for (let i = 0; i < nodeList.length; i++) {

      nodeList[i].classList.add("color");

}



var social = document.querySelectorAll(".social_menu a");

      for (let i = 0; i < social.length; i++) {

      social[i].style.border = "0.1rem solid #000";

}



var social1 = document.querySelectorAll(".social_menu a i");

      for (let i = 0; i < social1.length; i++) {

      social1[i].style.color = "#000";

}



  } else {

    document.querySelector(".header").classList.remove("fade");

    document.querySelector(".header").classList.remove("bg");

    document.querySelector(".logo img").setAttribute("src", "https://wattguru.com/images/watt-guru-logo.png"); 

    document.querySelector(".logo img").style.height = "5.5rem";

 

var node = document.querySelectorAll(".navbar-link");

      for (let i = 0; i < node.length; i++) {

      node[i].classList.remove("color");

}



var social = document.querySelectorAll(".social_menu a");

      for (let i = 0; i < social.length; i++) {

      social[i].style.border = "0.1rem solid #fff";

}



var social1 = document.querySelectorAll(".social_menu a i");

      for (let i = 0; i < social1.length; i++) {

      social1[i].style.color = "#fff";

}



  }

}



/*scroll 1*/

$('[href="https://wattguru.com/contact.html#mumbai"]').click(function(e){

      var target = this.hash,

      $target = $(target);



  $('html, body').stop().animate({

    'scrollTop': $target.offset().top-110

  }, 50, function () {

    window.location.hash = target;

  });

});

/*scroll 2*/

$('[href="https://wattguru.com/contact.html#delhi"]').click(function(e){

      var target = this.hash,

      $target = $(target);



  $('html, body').stop().animate({

    'scrollTop': $target.offset().top-110

  }, 50, function () {

    window.location.hash = target;

  });

});

/*scroll 3*/

$('[href="https://wattguru.com/contact.html#kolkata"]').click(function(e){

      var target = this.hash,

      $target = $(target);



  $('html, body').stop().animate({

    'scrollTop': $target.offset().top-110

  }, 50, function () {

    window.location.hash = target;

  });

});

/*scroll 4*/

$('[href="https://wattguru.com/contact.html#hyderabad"]').click(function(e){

      var target = this.hash,

      $target = $(target);



  $('html, body').stop().animate({

    'scrollTop': $target.offset().top-110

  }, 50, function () {

    window.location.hash = target;

  });

});

/*scroll 5*/

$('[href="https://wattguru.com/contact.html#pune"]').click(function(e){

      var target = this.hash,

      $target = $(target);



  $('html, body').stop().animate({

    'scrollTop': $target.offset().top-110

  }, 50, function () {

    window.location.hash = target;

  });

});

// magnific 1
 $(document).ready(function() {
    $('.popup-gallery1').magnificPopup({
      delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.attr('title') + '<small></small>';
        }
      }
    });
  });

// magnific 2
 $(document).ready(function() {
    // $('.popup-gallery2').magnificPopup({
    //   delegate: 'a',
    //   type: 'image',
    //   tLoading: 'Loading image #%curr%...',
    //   mainClass: 'mfp-img-mobile',
    //   gallery: {
    //     enabled: true,
    //     navigateByImgClick: true,
    //     preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    //   },
    //   image: {
    //     tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
    //     titleSrc: function(item) {
    //       return item.el.attr('title') + '<small></small>';
    //     }
    //   }
    // });
    $('.popup-gallery2').magnificPopup({
  delegate: 'a',
  type: 'image',
  gallery: {
    enabled: true,
    navigateByImgClick: true,
    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
  },
  callbacks: {
    elementParse: function(item) {
      console.log(item.el[0].className);
      if(item.el[0].className == 'video') {
        item.type = 'iframe',
        item.iframe = {
           patterns: {
             youtube: {
               index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

               id: 'v=', // String that splits URL in a two parts, second part should be %id%
                // Or null - full URL will be returned
                // Or a function that should return %id%, for example:
                // id: function(url) { return 'parsed id'; } 

               src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
             },
             vimeo: {
               index: 'vimeo.com/',
               id: '/',
               src: '//player.vimeo.com/video/%id%?autoplay=1'
             },
             gmaps: {
               index: '//maps.google.',
               src: '%id%&output=embed'
             }
           }
        }
      } else {
         item.type = 'image',
         item.tLoading = 'Loading image #%curr%...',
         item.mainClass = 'mfp-img-mobile',
         item.image = {
           tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
         }
      }

    }
  }
});
  });

// magnific 2 test
//  $(document).ready(function() {
//     $('.popup-gallery2').magnificPopup({
//       delegate: 'a',
//       type: 'image',
//       tLoading: 'Loading image #%curr%...',
//       mainClass: 'mfp-img-mobile',
//       gallery: {
//         enabled: true,
//         navigateByImgClick: true,
//         preload: [0,1] // Will preload 0 - before current, and 1 after the current image
//       },
//       callbacks: {
//     elementParse: function(item) {
//       console.log(item.el[0].className);
//       if(item.el[0].className == 'video') {
//         item.type = 'iframe',
//         item.iframe = {
//           patterns: {
//              youtube: {
//               index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

//               id: 'v=', // String that splits URL in a two parts, second part should be %id%
//                 // Or null - full URL will be returned
//                 // Or a function that should return %id%, for example:
//                 // id: function(url) { return 'parsed id'; } 

//               src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
//              },
//              vimeo: {
//               index: 'vimeo.com/',
//               id: '/',
//               src: '//player.vimeo.com/video/%id%?autoplay=1'
//              },
//       image: {
//         tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
//         titleSrc: function(item) {
//           return item.el.attr('title') + '<small></small>';
//         }
//       }
//     });
//   });
  
 // magnific 3
 $(document).ready(function() {
    $('.popup-gallery3').magnificPopup({
      delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.attr('title') + '<small></small>';
        }
      }
    });
  });

// magnific 4
 $(document).ready(function() {
    $('.popup-gallery4').magnificPopup({
      delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.attr('title') + '<small></small>';
        }
      }
    });
  });

// magnific 5
 $(document).ready(function() {
    $('.popup-gallery5').magnificPopup({
      delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.attr('title') + '<small></small>';
        }
      }
    });
  });
  
  $(document).ready(function() {
	$('.popup-youtube').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
});

// map location viewer



// ----------------------------------------1
$('.map_left1 .image_wrapper .de').mouseenter(function(){
   $('.map_right1 .green').addClass('show');    
});
$('.map_left1 .image_wrapper .de').mouseleave(function(){
   $('.map_right1 .green.show').removeClass('show');    
});
// ----------------------------------------2
$('.map_left1 .image_wrapper .mu').mouseenter(function(){
   $('.map_right1 .red').addClass('show');    
});
$('.map_left1 .image_wrapper .mu').mouseleave(function(){
   $('.map_right1 .red.show').removeClass('show');    
});
// ----------------------------------------3
$('.map_left1 .image_wrapper .ko').mouseenter(function(){
   $('.map_right1 .blue').addClass('show');    
});
$('.map_left1 .image_wrapper .ko').mouseleave(function(){
   $('.map_right1 .blue.show').removeClass('show');    
});
// ----------------------------------------4
$('.map_left1 .image_wrapper .hy').mouseenter(function(){
   $('.map_right1 .orange').addClass('show');    
});
$('.map_left1 .image_wrapper .hy').mouseleave(function(){
   $('.map_right1 .orange.show').removeClass('show');    
});
// ----------------------------------------5
$('.map_left1 .image_wrapper .pu').mouseenter(function(){
   $('.map_right1 .violet').addClass('show');    
});
$('.map_left1 .image_wrapper .pu').mouseleave(function(){
   $('.map_right1 .violet.show').removeClass('show');    
});

//--------------------------------------------------------------------------------------------------

// ----------------------------------------1
$('.map_right1 .green').mouseenter(function(){
   $('.map_left1 .image_wrapper .de').addClass('show1');    
});
$('.map_right1 .green').mouseleave(function(){
   $('.map_left1 .image_wrapper .de.show1').removeClass('show1');    
});
// ----------------------------------------2
$('.map_right1 .red').mouseenter(function(){
   $('.map_left1 .image_wrapper .mu').addClass('show1');    
});
$('.map_right1 .red').mouseleave(function(){
   $('.map_left1 .image_wrapper .mu.show1').removeClass('show1');    
});
// ----------------------------------------3
$('.map_right1 .blue').mouseenter(function(){
   $('.map_left1 .image_wrapper .ko').addClass('show1');    
});
$('.map_right1 .blue').mouseleave(function(){
   $('.map_left1 .image_wrapper .ko.show1').removeClass('show1');    
});
// ----------------------------------------4
$('.map_right1 .orange').mouseenter(function(){
   $('.map_left1 .image_wrapper .hy').addClass('show1');    
});
$('.map_right1 .orange').mouseleave(function(){
   $('.map_left1 .image_wrapper .hy.show1').removeClass('show1');    
});
// ----------------------------------------5
$('.map_right1 .violet').mouseenter(function(){
   $('.map_left1 .image_wrapper .pu').addClass('show1');    
});
$('.map_right1 .violet').mouseleave(function(){
   $('.map_left1 .image_wrapper .pu.show1').removeClass('show1');    
});


// ----------------------------------------
// $('.gallery-wrapper .read_btn').click(function(){
//   $('.gallery-wrapper .read-more').slideToggle(200);    
// });

// $('.gallery-wrapper .read_btn1').click(function(){
//   $('.gallery-wrapper .rm-1').slideToggle(200);    
// });


  
  $( ".navbar-link" ).each(function() {
       var current_page_URL = location.href;
       var target_URL = $(this).prop("href");
       
       if (target_URL == current_page_URL) {
          $(this).addClass('p-active');
       }
  });


$('.read_btn').click(function() {
  $('.read-more').slideToggle();
  if ($('.read_btn').text() == "Read more") {
    $(this).text("Read less")
  } else {
    $(this).text("Read more")
  }
});




