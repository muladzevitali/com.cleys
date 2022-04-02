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
        if ($(this).scrollTop() > 0) {
            $("#header-menu").addClass("scroll");
        } else {
            $("#header-menu").removeClass("scroll");
        }
    }

    function mobileMenu(selector) {

        let menu = $(selector);
        let button = menu.find('#hamburger');
        let overlay = menu.find('#menu-overlay');
        let link = menu.find('li:not(.submenu) a');

        button.on('click', () => toggleMenu());
        overlay.on('click', () => toggleMenu());
        link.on('click', () => toggleMenu());

        function toggleMenu() {
            if ($(window).width() <= mobilewidth) {
                menu.toggleClass('menu-active');

                if (menu.hasClass('menu-active')) {
                    $('body').css('overflow', 'hidden');
                } else {
                    $('body').css('overflow', 'visible');
                    $('.submenu-child').hide();
                    $('.submenu > a').removeClass('focus');
                }
            }
        }
    }

    //submenu
    function submenuClick() {
        $('.submenu > a').click(function (e) {
            if ($(window).width() <= mobilewidth) {
                if (!($(this).hasClass('focus'))) {
                    e.preventDefault();
                    $('.submenu > a').removeClass('focus');
                    $(this).addClass('focus');
                    $(this).next('.submenu-child').fadeToggle(500);
                }
            }
        });
    }

    //init menu
    mobileMenu('#header-menu');
    submenuClick();

    // js-login-top
    $('.js-login-top').click(function () {
        $('.js-login-top__content').fadeToggle(200);
        $(this).toggleClass('open');
    });
    $(document).click(function (event) {
        if (!$(event.target).closest('.js-login-top').length) {
            $('.js-login-top__content').fadeOut(200);
            $('.js-login-top').removeClass('open');
        }
    });

    //dropdown
    function dropdown() {
        $('.js-dropdown > a').click(function (e) {
            if (!($(this).hasClass('focus'))) {
                e.preventDefault();
                $('.js-dropdown__trigger').removeClass('focus');
                $(this).addClass('focus');
                $(this).parents('.js-dropdown').toggleClass("open");
                $(this).next('.js-dropdown__menu').slideToggle();
            }
        });
    }

    dropdown();

    //offer mobile menu trigger
    $('.js-offer__menu-trigger').click(function (e) {
        e.preventDefault();
        $('.js-offer__menu').addClass('offer__menu-open');
    });
    $('.js-offer__menu-close').click(function (e) {
        e.preventDefault();
        $('.js-offer__menu').removeClass('offer__menu-open');
    });

    //smooth scroll
    $(".js-scroll-to").on("click", function (event) {
        let url = $(this).attr('href');
        let anchor = getHashFromUrl(url);
        let top = $('#' + anchor).offset().top - parseInt($('#' + anchor).css('marginTop'));
        $('body,html').animate({
            scrollTop: top
        }, 750);
    });

    function getHashFromUrl(url) {
        return $("<a />").attr("href", url)[0].hash.replace(/^#/, "");
    }

    //form
    //number
    $('.js-like-number .like-number__p').click(function (e) {
        e.preventDefault();
        let curValue = $(this).prev('input').val();
        $(this).prev('input').val(++curValue);
    });
    $('.js-like-number .like-number__m').click(function (e) {
        e.preventDefault();
        let curValue = $(this).next('input').val(),
            minValue = $(this).data('minval');
        if (--curValue <= minValue) {
            $(this).next('input').val('0');
        } else {
            $(this).next('input').val(--curValue);
        }
    });

    //popup
    $('.js-popup-content').wrap('<div class="popup"><div class="popup__inner"></div></div>')
        .before('<button class="js-popup__close close-btn --black" aria-label="Close"><i class="far fa-times"></i></button>');

    $('.js-popup-open').click(function (e) {
        e.preventDefault();
        let popupId = $(this).data('popupid');
        $(popupId).css('display', 'block');
        $(popupId).parents('.popup').fadeIn().css('display', 'flex');
        $('body').css('overflow', 'hidden');
    });
    $('.prod-calc-form').submit(function (e) {
        e.preventDefault();
        const surface = $('#prod-calc-field').val();
        const url = $(this).attr('action');
        const csrf_token = $("[name='csrfmiddlewaretoken']").val();
        $.ajax({
            url: url,
            method: 'post',
            data: {surface: surface, csrfmiddlewaretoken: csrf_token},
            success: function (result) {
                $('.surface-row').html(
                    '<div>Oppervlakte:</div>\n<div>' + surface + ' <span>m<sup>2</sup></span></div>'
                )
                $('.volume-row').html(
                    '<div>Totaal verbruik:</div> <div>' + result.total_amount + ' L</div>'
                )
                $('.quantity-row').text(
                    result.product_quantity + ' emmer(s)'
                )
            },
            error: function (error) {
                console.log(error)
            }

        })

    })
    $('.js-popup__close').click(function (e) {
        e.preventDefault();
        $(this).parents('.popup').fadeOut();
        $('body').css('overflow', 'visible');
    });

    //slider
    function initClientsSlider() {
        $('.js-showcase-slider').slick({
            fade: true,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: true,
            appendDots: $('.showcase__slider-dots'),
        });
    }

    initClientsSlider();

    function initAcademySlider() {
        $('.js-academy-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            variableWidth: true,
            centerMode: true,
            prevArrow: '<div class="sliderPrev"><i class="fal fa-arrow-left"></i></div>',
            nextArrow: '<div class="sliderNext"><i class="fal fa-arrow-right"></i></div>',
            responsive: [
                {
                    breakpoint: 651,
                    settings: {
                        centerMode: false,
                        variableWidth: false,
                    }
                }
            ]
        });
    }

    initAcademySlider();

    //product-detail__slider
    $('.js-product-detail__slider-for').slick({
        arrows: false,
        asNavFor: '.js-product-detail__slider-nav',
    });
    $('.js-product-detail__slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.js-product-detail__slider-for',
        arrows: true,
        prevArrow: '<div class="pd-arrow sliderPrev"><i class="far fa-chevron-left"></i></div>',
        nextArrow: '<div class="pd-arrow sliderNext"><i class="far fa-chevron-right"></i></div>',
        focusOnSelect: true,
        // responsive: [
        // 	{
        // 		breakpoint: 768,
        // 		settings: {
        // 			slidesToShow: 3,
        // 			variableWidth: false,
        // 		}
        // 	}
        // ]
    });

    //masonry layout
    $('.js-masonry-layout').masonry({
        itemSelector: '.masonry-layout__item',
        percentPosition: true,
    });

    //cart remove product
    $('.js-cart-item-remove').click(function (e) {
        e.preventDefault();
        $(this).prev('.js-like-number').children('input').val(0);
        $('#checkout-cart').submit();
    });

    //cart update qty
    $('#checkout-cart .js-like-number input').change(function (e) {
        e.preventDefault();
        alert('change')
        $('#checkout-cart').submit();
    });
    // $('#checkout-cart .js-like-number input').on('change', function () {
    // 	$('#checkout-cart').submit();
    // });
    /*cart update qty ajax example
    //TODO Add ajax example for cart update
    $('#checkout-cart .js-like-number input').on('change', function () {
        $.ajax({
            type: "method",
            url: "url",
            data: "data",
            dataType: "dataType",
            success: function (response) {
                $('#checkout-cart').html(response)
            }
        });
    });*/

    //accordion
    $('.js-accordion .js-acc-head').on('click', fAcc);

    function fAcc() {
        if ($(this).hasClass('active')) {
            $('.js-accordion .js-acc-head').removeClass('active');
            $('.js-accordion .js-acc-body').slideUp(200);
        } else {
            $('.js-accordion .js-acc-head').removeClass('active');
            $('.js-accordion .js-acc-body').not($(this).next()).slideUp(200);
            $(this).next().slideToggle(400);
            $(this).addClass('active');
        }
    }

    //toggle edit form
    $('.js-edit-r-details').click(function (e) {
        e.preventDefault();
        let formClass = $(this).attr('data-toggleclass');
        $('.' + formClass).slideToggle().css('display', 'grid');
    });

    // //video-wrapper
    // function videoWrapper() {
    // 	$('.js-video-wrapper').each(function () {
    // 		let video = $(this).find('video');
    // 		video.attr('controls', false);
    // 		video.after('<div class="play-btn"><i class="fas fa-play"></i></div>');
    // 	});
    // 	$('.play-btn').click(function (e) {
    // 		e.preventDefault();
    // 		let curVideo = $(this).prev('video');
    // 		curVideo[0].play();
    // 		curVideo.attr('controls', true);
    // 		$(this).fadeOut();
    // 		curVideo[0].addEventListener('pause', function (playbtn) {
    // 			$(this).next('.play-btn').fadeIn();
    // 			curVideo.attr('controls', false);
    // 		});
    // 	});
    // }
    // videoWrapper();

    //add .img to parent p for image and video
    function wrapMedia() {
        $('.js-article-body p').each(function () {
            let img = $(this).find('img');
            let iframe = $(this).find('iframe');
            let video = $(this).find('video');
            img.parent('p').addClass('img');
            iframe.parent('p').addClass('video');
            iframe.wrap("<div class='yt-wrapper'></div>");
            video.attr('controls', false);
            video.parent('p').addClass('video');
            video.wrap('<div class="video-wrapper"></div>');
            video.after('<div class="play-btn"><i class="fas fa-play-circle"></i></div>');
        });
        $('.play-btn').click(function (e) {
            e.preventDefault();
            let curVideo = $(this).prev('video');
            curVideo[0].play();
            curVideo.attr('controls', true);
            $(this).fadeOut();
            curVideo[0].addEventListener('pause', function (playbtn) {
                $(this).next('.play-btn').fadeIn();
                curVideo.attr('controls', false);
            });
        });

    }

    wrapMedia();

});
