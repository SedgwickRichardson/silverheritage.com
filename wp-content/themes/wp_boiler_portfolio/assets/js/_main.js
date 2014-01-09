// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var ExampleSite = {
  // All pages
  common: {
    init: function() {
      
      
      $(window).scroll(function() {
        if($(this).scrollTop() < 500) {
  				$("#main-nav .active").removeClass("active");
        } else if ($(this).scrollTop() > 600 && $(this).scrollTop() < 700) {
					$("#main-nav li:first-child").addClass("active");
				}
      });
      $("#lightbox .fa").click(function() {
      
        $("#lightbox").hide();
      });
      $(".project_link").click(function() {
        
      
        $.post(MyAjax.ajaxurl,
								
					{
						action:'get_lightbox', 
						id: $(this).attr("id")
					
					},
				
					function( response ) {
						$("#lightbox #ajax").html(response);
						console.log(response);
						$("#lightbox").show();
					}
				);

      });
      $(".tooltips").tooltip();
      $('.team-slider').bxSlider({
			
				//controls: false,
			//	pager: false,
				mode: 'horizontal',
				auto: false,
				speed: 800,
				pause: 6000,
				preloadImages: 'all',
				nextText: '<i class="fa fa-chevron-right"></i>',
				prevText: '<i class="fa fa-chevron-left"></i>'
			});
		
      if (!$("html").hasClass("lt-ie10") && !mobile) {
        $.stellar({
          
          horizontalScrolling: true,
          verticalScrolling: true,
          
          // Set the global alignment offsets
          horizontalOffset: 0,
          verticalOffset: 0,
          
          // Refreshes parallax content on window load and resize
          responsive: false,
          
          // Select which property is used to calculate scroll.
          // Choose 'scroll', 'position', 'margin' or 'transform',
          // or write your own 'scrollProperty' plugin.
          scrollProperty: 'scroll',
          
          // Select which property is used to position elements.
          // Choose between 'position' or 'transform',
          // or write your own 'positionProperty' plugin.
          positionProperty: 'position',
          
          // Enable or disable the two types of parallax
          parallaxBackgrounds: true,
          parallaxElements: true,
          
          // Hide parallax elements that move outside the viewport
          hideDistantElements: true
          
        });
      }
      if (!mobile) {
        $("#main-nav").sticky({topSpacing:0});
      
        $('#main-nav a').smoothScroll({
          
				  offset: 0
				
        }); 
      }

/*
      $(window).scroll(function(){
				if($(this).scrollTop()>=100) {
					$('.subnav').addClass('fixed');
				} else {
					$('.subnav').removeClass('fixed');
        }
	      if($(this).scrollTop() < 500) {
					$(".subnav .active").removeClass("active");
				} else if ($(this).scrollTop() > 600 && $(this).scrollTop() < 700) {
					$(".subnav li:first-child").addClass("active");
				}
				console.log($(this).scrollTop());
				if ($(this).scrollTop() > 0) {
  				$('#roulette').css({ 'background-position' : "center "+-($(this).scrollTop()/12)+"px" }); 
        }
        if ($(this).scrollTop() > 800) {
          $('#casino').css({ 'background-position' : "center "+-($(this).scrollTop()/12)+"px" }); 
        }
				if ($(this).scrollTop() > 1500) {
   				$('#cheers').css({ 'background-position' : "center "+-($(this).scrollTop()/15)+"px" }); 
   			}
        //console.log($(this).scrollTop());
      });
*/
      
      
/*
      $('a[href*=#]:not([href=#])').click(function() {
        console.log('here');
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') || location.hostname === this.hostname) {

          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
*/
   },
    finalize: function() { }
  },
  // Home page
  home: {
    init: function() {
 
    }
  },
  // About page
  about: {
    init: function() {
      // JS here
    }
  }
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = ExampleSite;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

$(document).ready(UTIL.loadEvents);
