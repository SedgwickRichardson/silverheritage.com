// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var ExampleSite = {
  // All pages
  common: {
    init: function() {
      $(".tooltips").tooltip();
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
  				$('#roulette').css({ 'background-position' : "center "+-($(this).scrollTop()/8)+"px" }); 
  				$('#casino').css({ 'background-position' : "center "+-($(this).scrollTop()/8)+"px" }); 
        }
				if ($(this).scrollTop() > 1500) {
   				$('#cheers').css({ 'background-position' : "center "+-($(this).scrollTop()/15)+"px" }); 
   			}
        //console.log($(this).scrollTop());
      });
      
      
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
