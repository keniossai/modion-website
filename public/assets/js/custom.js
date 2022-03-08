/* Global jQuery */

/* Contents
// ------------------------------------------------>
     1. wow animation
     2. Menu Mobile
     3. Cart
     4. Search
     5. Owl Slider
     6. Light Box
     7. Fixed Header
*/


// Post  alert



// Blog Posts///////////

$(function () {
	window.sr = ScrollReveal()

	if ($(window).width() < 768) {
		if ($('.timeline-content').hasClass('js--fadeInLeft')) {
			$('.timeline-content')
				.removeClass('js--fadeInLeft')
				.addClass('js--fadeInRight')
		}

		sr.reveal('.js--fadeInRight', {
			origin: 'right',
			distance: '300px',
			easing: 'ease-in-out',
			duration: 800,
		})
	} else {
		sr.reveal('.js--fadeInLeft', {
			origin: 'left',
			distance: '300px',
			easing: 'ease-in-out',
			duration: 800,
		})

		sr.reveal('.js--fadeInRight', {
			origin: 'right',
			distance: '300px',
			easing: 'ease-in-out',
			duration: 800,
		})
	}

	sr.reveal('.js--fadeInLeft', {
		origin: 'left',
		distance: '300px',
		easing: 'ease-in-out',
		duration: 800,
	})

	sr.reveal('.js--fadeInRight', {
		origin: 'right',
		distance: '300px',
		easing: 'ease-in-out',
		duration: 800,
	})
})

// The Agency Slide

// Clients Slider
$(document).ready(function () {
	$('.customer-logos').slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 1500,
		arrows: false,
		dots: false,
		pauseOnHover: false,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 4,
				},
			},
			{
				breakpoint: 520,
				settings: {
					slidesToShow: 3,
				},
			},
		],
	})
})

// Smooth Scroll
$(document).ready(function () {
	$('a').on('#click', function (event) {
		if (this.hash !== '') {
			event.preventDefault()

			var hash = this.hash

			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			$('body, body').animate(
				{
					scrollTop: $(hash).offset().top,
				},
				800,
				function () {
					// Add hash (#) to URL when done scrolling (default click behavior)
					window.location.hash = hash
				}
			)
		}
	})
})(
	// Stict mode
	(function ($) {
		'use strict'

		/* ------------------  2. Menu Mobile ------------------ */
		var $menu_show = $('.mobile-toggle'),
			$menu = $('header #menu-main'),
			$list = $('ul.nav-menu li a'),
			$menu_list = $('header li.has-dropdown'),
			$menu_ul = $('ul.sub-menu'),
			$cart_model = $('.cart-model'),
			$cart_link = $('#cart-link'),
			$search_bar = $('#search_bar'),
			$search_close = $('.close-search'),
			$search_bot = $('#search-header'),
			$fixed_header = $('#fixed-header'),
			$fixed_header_dark = $('#fixed-header-dark'),
			$sticky_content = $('.sticky-content'),
			$sticky_sidebar = $('.sticky-sidebar')

		$menu_show.on('click', function (e) {
			$menu.slideToggle()
		})
		$list.on('click', function (e) {
			var submenu = this.parentNode.getElementsByTagName('ul').item(0)
			if (submenu != null) {
				event.preventDefault()
				$(submenu).slideToggle()
			}
		})

		/* ------------------  3. Cart ------------------ */
		$cart_link.on('click', function (e) {
			$cart_model.slideToggle('fast')
		})

		$(window).on('click', function (e) {
			$cart_model.hide('fast')
		})
		$cart_link.on('click', function (e) {
			event.stopPropagation()
		})

		/* ------------------  4. Search ------------------ */
		$search_bot.on('click', function (e) {
			$search_bar.slideToggle('fast')
		})
		$search_close.on('click', function (e) {
			$search_bar.hide('fast')
		})

		/* ------------------  5.Owl Slider ------------------ */
		var owl2 = $('.slider-1')
		var owl3 = $('.travelers-say-3')
		var owl = $('.testimonial-carousel')
		owl.owlCarousel({
			items: 3, //10 items above 1000px browser width
			itemsDesktop: [1000, 3], //5 items between 1000px and 901px
			itemsDesktopSmall: [900, 3], // betweem 900px and 601px
			itemsTablet: [600, 1], //2 items between 600 and 0
			slideSpeed: 1000,
			autoPlay: true,
			itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
		})
		owl2.owlCarousel({
			items: 1, //10 items above 1000px browser width
			itemsDesktop: [1000, 1], //5 items between 1000px and 901px
			itemsDesktopSmall: [900, 1], // betweem 900px and 601px
			itemsTablet: [600, 1], //2 items between 600 and 0
			slideSpeed: 1000,
			autoPlay: true,
			itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
		})
		owl3.owlCarousel({
			dotsContainer: '#carousel-custom-dots',
			items: 3, //10 items above 1000px browser width
			itemsDesktop: [1000, 3], //5 items between 1000px and 901px
			itemsDesktopSmall: [900, 3], // betweem 900px and 601px
			itemsTablet: [600, 1], //2 items between 600 and 0
			itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
		})

		/* ------------------  6. Light Box ------------------ */
		$(document).on('click', '[data-toggle="lightbox"]', function (event) {
			event.preventDefault()
			$(this).ekkoLightbox()
		})

		/* ------------------  7. Fixed Header ------------------ */
		$(window).on('scroll', function () {
			if ($(window).scrollTop() >= 50) {
				$fixed_header.addClass('fixed-header')
				$fixed_header_dark.addClass('fixed-header-dark')
			} else {
				$fixed_header.removeClass('fixed-header')
				$fixed_header_dark.removeClass('fixed-header-dark')
			}
		})

		$('a[href="#search"]').on('click', function (event) {
			event.preventDefault()
			$('#search').addClass('open')
			$('#search > form > input[type="search"]').focus()
		})

		$('#search, #search button.close').on('click keyup', function (event) {
			if (
				event.target == this ||
				event.target.className == 'close' ||
				event.keyCode == 27
			) {
				$(this).removeClass('open')
			}
		})

		// $('form').submit(function (event) {
		// 	event.preventDefault()
		// 	return true
		// })


    /*========== Start Portfolio Trigger Filterizr Js ==========*/
    $("#control li").on('click', function () {
        $(this).addClass('active').siblings().removeClass('active');
    });
    // The Filterizr
    $('#filtr-container').filterizr({
        animationDuration: 0.4
    });

    /*========== Start Magnigic Popup Js ==========*/
    $('.my-work').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });

		
	})(jQuery)
)

function formSuccess(){
	swal("Thank you!", "Your mail has been sent succesfully!", "success",{
		buttons: false,
  		timer: 5000,
	});
}