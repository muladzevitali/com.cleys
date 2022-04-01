jQuery(document).ready(function ($) {
	var mobilewidth = 1024; //mobile delimeter
	var headerMenuHeight = $('#header-menu').outerHeight();

	//fixed-menu
	$(window).on("scroll", function () {
		menuOnScroll();
		headerMenuHeight = $('#header-menu').outerHeight();
	});
	menuOnScroll();

	function menuOnScroll() {
		if ($(this).scrollTop() > 0){
			$("#header-menu").addClass("scroll");
		} else{
			$("#header-menu").removeClass("scroll");
		}
	}

	// js-login-top
	$('.js-login-top__trigger').click(function (e) { 
		e.preventDefault();
		$(this).next().slideToggle();
		$(this).parent().toggleClass('open');
	});

	//smooth scroll
	$(".js-scroll-to").on("click", function (event) {
		let url = $(this).attr('href');
		let anchor = getHashFromUrl(url);		
		let top = $('#' + anchor).offset().top - parseInt($('#' + anchor).css('marginTop'));
		$('body,html').animate({
			scrollTop: top - headerMenuHeight
		}, 750);
	});
	function getHashFromUrl(url) {
		return $("<a />").attr("href", url)[0].hash.replace(/^#/, "");
	}

	//form
	// show/hide factuur
	$('.js-r-factuur').on('change', function () {
		showHideDeliveryAddress();
	});

	function showHideDeliveryAddress() {
		if ($('.js-r-factuur').is(":checked")) {
			$('.js-factuur-fieldset').show(200);
			$('.js-factuur-fieldset .required input').prop('required', true);
		} else {
			$('.js-factuur-fieldset').hide(200);
			$('.js-factuur-fieldset .required input').val('').prop('required', false);
		}
	}

	//toggle edit form
	$('.js-edit-r-details').click(function (e) { 
		e.preventDefault();
		let formClass = $(this).attr('data-toggleclass');
		$('.' + formClass).slideToggle().css('display', 'grid');
	});

});
