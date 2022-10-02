jQuery(document).ready(function($){
    jQuery( "#tabs, #anIntegratedTabs" ).tabs();

    $('.secNavToggle').click(function(){
        $('.humMenuPop').toggleClass('open');
    });

    $('.humMenuPop .ui-tabs .rightSubMenu .ui-tabs-panel .innerWrap .header .closeIt a').click(function(){
        $(this).parents('.humMenuPop').removeClass('open')
    })

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 30) {
            $("header.header").addClass("fixedHeader");
        } else {
            $("header.header").removeClass("fixedHeader");
        }
    });

    $('.testimonialMain-owl').owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    $('.qotSlide').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        items:1,
        animateOut: 'fadeOut'
    })
    $('.clientSlider').owlCarousel({
        loop:true,
        margin:25,
        nav:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
    $('.bannerClientSlider').owlCarousel({
        loop:true,
        margin:25,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

    jQuery(window).on("load",function(){
        $(".whyWpItems .innerWrap").mCustomScrollbar({ theme:"dark"});
        $(".humMenuPop .ui-tabs .leftMainMenu .menuPop, .humMenuPop .ui-tabs .rightSubMenu .ui-tabs-panel .innerWrap .contentPt, .mainNav > .innerNavWrap").mCustomScrollbar({ theme:"light"});
    });

    jQuery(".collapseItems").accordion();


    jQuery(".smoothJump, .anIntegrated .ui-tabs .ui-tabs-nav .ui-tabs-anchor").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            const destination = this.hash;
            $('html,body').animate({
                scrollTop: jQuery(destination).offset().top - 85
            },800);
        }
    });

    jQuery(".secNavToggleMobile").on('click', function(e){
        jQuery(this).toggleClass("show");
        jQuery(".mainNav").toggleClass("show");
    });

    // popup jQuery 

    //----- OPEN
	jQuery('[data-popup-open]').on('click', function(e) {
		var targeted_popup_class = jQuery(this).attr('data-popup-open');
		jQuery('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

		e.preventDefault();
	});

	//----- CLOSE
	jQuery('[data-popup-close]').on('click', function(e) {
		var targeted_popup_class = jQuery(this).attr('data-popup-close');
		jQuery('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

		e.preventDefault();
	});

});