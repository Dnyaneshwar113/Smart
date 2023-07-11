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
// Read More

$('.read_btn').click(function() {
  $('.read-more').slideToggle();
  if ($('.read_btn').text() == "Read more") {
    $(this).text("Read less")
  } else {
    $(this).text("Read more")
  }
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




//   Popup

$(document).ready(function() {
    // Popup Gallery 1
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

    // Popup Gallery 2
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

    //   Popup Gallery 3
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

    //   Popup Gallery 4
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

    //   Popup Gallery 5
    $('.popup-gallery5').magnificPopup({
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