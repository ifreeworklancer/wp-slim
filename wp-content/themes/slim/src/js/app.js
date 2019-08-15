import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import 'flickity/dist/flickity.css';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

(function () {

    /**
     * Burger-menu
     */
    var menu = $('.menu');
    $('.burger-menu').click(function () {
        $(this).toggleClass('active');
        menu.slideToggle().css('display', 'flex');
    });

    /**
     * Scroll
     */
    $(".scroll-link").on("click", function (event) {
        event.preventDefault();
        var id = $(this).attr('href');
        if (id.length > 1) {
            var top = ($(id).offset().top - $('#app-header').height());
            $('body,html').animate({
                scrollTop: top
            }, 1500);
            $(this).removeClass('active');
            menu.slideUp();
        }
    });

    /**
     * Header animate
     */
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 0) {
            $('#app-header').addClass('in-scroll');
        } else {
            $('#app-header').removeClass('in-scroll');
        }
    });


    /**
     * Form-label
     */

    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parents('.form-group').addClass('in-focus');
        } else {
            $(this).parents('.form-group').removeClass('in-focus');
        }
    });

    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });

    /**
     * Modal
     */
    var feedbackModal = $('.custom-modal--feedback');
    var packagesModal = $('.custom-modal--packages');
    var closeModal = $('.close-modal');
    var modalMask = $('.modal-mask');

    $('.open-feedback').on('click', function (e) {
        e.preventDefault();
        $(feedbackModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $('.open-packages').on('click', function (e) {
        e.preventDefault();
        let namePackage = $(this).data('name-package');
        $('#package-name').val(namePackage);
        $('.custom-modal--packages .custom-modal-header .title span').text(`“${namePackage}”`);
        $(packagesModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $(closeModal).on('click', function () {
        $(feedbackModal).removeClass('active');
        $(packagesModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(feedbackModal).removeClass('active');
        $(packagesModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            $('.outer').remove();
            $(feedbackModal).removeClass('active');
            $(packagesModal).removeClass('active');
            $(modalMask).removeClass('active');
        }
    });

    /**
     * Youtube video
     */
    $('[data-src]').on('click', function () {
        var id = $(this).data('src'),
            padding = $(window).width() > 768 ? 120 : 30,
            ratio = 608 / 1080,
            width = $(window).width() - padding,
            height = width * ratio,
            html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
                'src="' +
                id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';

        $('body').append('<div class="outer">' + html + '</div>');
    });

    $(document).mouseup(function (e) {
        var container = $('.outer iframe');

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.outer').remove();
        }
    });

    /**
     * Places Progress Bar
     */
    let placesAll,
        placesLeft,
        driverWidth;
    if ($('.places-progress-bar')) {
        document.querySelectorAll('.places-progress-bar').forEach(item => {
            placesAll = item.getAttribute('data-places-all');
            placesLeft = item.getAttribute('data-places-left');
            driverWidth = (placesAll - placesLeft) * 100 / placesAll;
            $(item).children('.driver').css('width', `${driverWidth}%`);
        });
    }

    /**
     * Sliders
     */
    if ($('.portfolio-slider--main')) {

        let elem1 = document.querySelector('.result-slider');
        if (elem1) {
            const flkty1 = new Flickity(elem1, {
                prevNextButtons: false,
                pageDots: false,
                contain: true,
                draggable: false,
                wrapAround: true,
                cellAlign: 'left'
            });

            let prevArrowIntro = document.querySelector('.slider-arrow--result .arrow-item--prev');

            prevArrowIntro.addEventListener('click', function () {
                flkty1.previous(false, false);
            });

            let nextArrowIntro = document.querySelector('.slider-arrow--result .arrow-item--next');

            nextArrowIntro.addEventListener('click', function () {
                flkty1.next(false, false);
            });
        }
    }

    if ($('.reviews-slider')) {

        let elem1 = document.querySelector('.reviews-slider');
        if (elem1) {
            const flkty1 = new Flickity(elem1, {
                prevNextButtons: false,
                contain: true,
                draggable: false,
                wrapAround: true,
                cellAlign: 'center'
            });

            let prevArrowIntro = document.querySelector('.slider-arrow--reviews .arrow-item--prev');

            prevArrowIntro.addEventListener('click', function () {
                flkty1.previous(false, false);
            });

            let nextArrowIntro = document.querySelector('.slider-arrow--reviews .arrow-item--next');

            nextArrowIntro.addEventListener('click', function () {
                flkty1.next(false, false);
            });
        }
    }

    /**
     * Animate scroll
     */
    ScrollReveal().reveal('.intro-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
        interval: 200,
    });
    ScrollReveal().reveal('.about-item .title', {
        origin: 'left',
        delay: 400,
        distance: '200px',
        interval: 200,
    });
    ScrollReveal().reveal('.about-item .description', {
        origin: 'right',
        delay: 400,
        distance: '200px',
        interval: 200,
    });
    ScrollReveal().reveal('.about-video', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
        interval: 200,
    });
    ScrollReveal().reveal('.advantages-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
        interval: 200,
    });
    ScrollReveal().reveal('.packages-card', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
        interval: 200,
    });

})(jQuery);