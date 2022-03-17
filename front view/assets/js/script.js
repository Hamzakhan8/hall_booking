(function ($) {

    "use strict";

    var wporganic = {

        loader: function () {

            $(window).on('load', function () {

                $('.status').fadeOut();
                $('.preloader').delay(350).fadeOut('slow');
            });
        },
        
        date_picker: function () {
            if ($('.datepicker').length) {

                $( ".datepicker" ).datepicker({
                    altField: "#idTourDateDetailsHidden"
                });
            }
        },
        
        select_dark: function () {
            if ($('select').length) {

                $('select').select2({
                    width: 'resolve',
                    theme: "form-dark",
                    minimumResultsForSearch: -1
                });
            }
        },
       
        select_light: function () {
            if ($('.form-light-select').length) {

                $('.form-light-select').select2({
                    width: 'resolve',
                    theme: "form-light",
                    minimumResultsForSearch: -1
                });
            }
        },

        select_home_1: function () {
            if ($('.home-select-1').length) {

                $('.home-select-1').select2({
                    width: 'resolve',
                    theme: "form-light",
                    placeholder: "Choose Vendor Type"
                });
            }
        },

        select_home_2: function () {
            if ($('.home-select-2').length) {

                $('.home-select-2').select2({
                    width: 'resolve',
                    theme: "form-light",
                    placeholder: "Choose Location"
                });
            }
        },

        select_map_1: function () {
            if ($('.map-select-1').length) {

                $('.map-select-1').select2({
                    width: 'resolve',
                    theme: "form-light",
                    placeholder: "Select Category"
                });
            }
        },

        select_map_2: function () {
            if ($('.map-select-2').length) {

                $('.map-select-2').select2({
                    width: 'resolve',
                    theme: "form-light",
                    placeholder: "Select Location"
                });
            }
        },

        select_map_3: function () {
            if ($('.map-select-3').length) {

                $('.map-select-3').select2({
                    width: 'resolve',
                    theme: "form-light",
                    placeholder: "No. of Guest",
                    minimumResultsForSearch: -1
                });
            }
        },

        select_map_4: function () {
            if ($('.map-select-4').length) {

                $('.map-select-4').select2({
                    width: 'resolve',
                    theme: "form-dark",
                    placeholder: "Sort By",
                    minimumResultsForSearch: -1
                });
            }
        },
        bootstrap_menu: function () {
            if ($('.dropdown-menu a.dropdown-toggle-mob').length) {

                // Dropdown Menu For Mobile
                $('.dropdown-menu a.dropdown-toggle-mob').on('click', function (e) {
                    if (!$(this).next().hasClass('show')) {
                        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                    }
                    var $subMenu = $(this).next(".dropdown-menu");
                    $subMenu.toggleClass('show');

                    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
                        $('.dropdown-submenu .show').removeClass("show");
                    });

                    return false;
                });
            }
        },

        header_anim: function () {
            if ($('.header-anim').length) {

                $(window).scroll(function () {
                    if ($(this).scrollTop() > 50) {
                        $('.header-anim').addClass('fixed');
                    } else {
                        $('.header-anim').removeClass('fixed');
                    }
                });
            }
        },

        back_to_top: function () {

            if ($('#back-to-top').length) {

                $(window).scroll(function () {

                    if ($(this).scrollTop() > 100) {

                        $('#back-to-top').fadeIn();

                    } else {

                        $('#back-to-top').fadeOut();
                    }
                });

                $('#back-to-top').click(function () {

                    $('body,html').animate({ scrollTop: 0 }, 800);
                    return false;
                });
            }
        },

        data_toggle: function () {
            if ($('.theme-accordian [data-toggle="collapse"]').length) {

                $('.theme-accordian [data-toggle="collapse"]').on('click', function (e) {
                    if ($(this).parents('.accordion').find('.collapse.show')) {
                        var idx = $(this).index('[data-toggle="collapse"]');
                        if (idx == $('.collapse.show').index('.collapse')) {
                            // prevent collapse
                            e.stopPropagation();
                        }
                    }
                });
            }
        },

        range_slider: function () {
            if ($('#slider-range').length) {

                $("#slider-range").slider({
                    range: true,
                    step: 1,
                    min: 0,
                    max: 500,
                    values: [150, 300],
                    slide: function (event, ui) {
                        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                        $('.ui-slider-handle:first').html('<div data-toggle="tooltip" data-placement="top" class="btn btn-secondary btn-sm"><div class="arrow"></div>' + ui.values[0] + '</div>');
                        $('.ui-slider-handle:last').html('<div data-toggle="tooltip" data-placement="top" class="btn btn-secondary btn-sm"><div class="arrow"></div>' + ui.values[1] + '</div>');
                    }
                });

                $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

                $(".ui-slider-handle").mouseleave(function () {
                    $('.ui-slider-handle').html("");
                })
                // $(".ui-slider-handle").mouseenter(function () {
                //     var value = $("#slider-range").slider("option", "values");
                //     $('.ui-slider-handle:first').html('<div data-toggle="tooltip" data-placement="top" class="btn btn-secondary btn-sm"><div class="arrow"></div>' + value[0] + '</div>');
                //     $('.ui-slider-handle:last').html('<div data-toggle="tooltip" data-placement="top" class="btn btn-secondary btn-sm"><div class="arrow"></div>' + value[1] + '</div>');
                // })
            }
        },

        bs_tootltip: function () {
            $('[data-toggle="tooltip"]').tooltip()
        },

        slider_about : function(){

            if( $('#slider-about').length ){
    
                $('#slider-about').owlCarousel({
    
                    loop: true,
                    stagePadding: 325,
                    margin: 30,
                    autoplay: true,
                    autoplayTimeout: 10000,
                    smartSpeed: 1000,
                    nav: false,
                    dots: true,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1,
                            stagePadding: 40
                        },
                        600: {
                            items: 1,
                            stagePadding: 50
                        },
                        1200: {
                            items: 1,
                            stagePadding: 325
                        }
                    }
                });
            }
        },

        slider_vendor_single : function(){

            if( $('#slider-vendor-single').length ){
    
                $('#slider-vendor-single').owlCarousel({
    
                    loop: true,
                    stagePadding: 325,
                    margin: 0,
                    autoplay: false,
                    autoplayTimeout: 10000,
                    smartSpeed: 1000,
                    nav: true,
                    dots: false,
                    navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                    responsive: {
                        0: {
                            items: 1,
                            stagePadding: 40
                        },
                        600: {
                            items: 1,
                            stagePadding: 50
                        },
                        1200: {
                            items: 1,
                            stagePadding: 325
                        }
                    }
                });
            }
        },

        slider_feedback : function(){

            if( $('#slider-feedback').length ){
    
                $('#slider-feedback').owlCarousel({
    
                    loop: true,
                    stagePadding: 0,
                    margin: 30,
                    autoplay: false,
                    autoplayTimeout: 10000,
                    smartSpeed: 1000,
                    nav: false,
                    dots: true,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        767: {
                            items: 2
                        }
                    }
                });
            }
        },

        slider_partners : function(){

            if( $('#slider-partners').length ){
    
                $('#slider-partners').owlCarousel({
    
                    loop: true,
                    stagePadding: 0,
                    margin: 30,
                    autoplay: true,
                    autoplayTimeout: 10000,
                    smartSpeed: 1000,
                    nav: false,
                    dots: true,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 2
                        },
                        600: {
                            items: 2
                        },
                        767: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    }
                });
            }
        },

        wedding_listing_single : function(){

            if( $('#wedding-listing-single').length ){
    
                $('#wedding-listing-single').owlCarousel({
    
                    loop: true,
                    stagePadding: 0,
                    margin: 30,
                    items: 1,
                    autoplay: false,
                    autoplayTimeout: 10000,
                    smartSpeed: 1000,
                    nav: false,
                    dots: true,
                    autoHeight: true,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
                });
            }
        },

        slider_home : function(){

            if( $('#slider-home').length ){
    
                $('#slider-home').owlCarousel({
    
                    loop: true,
                    stagePadding: 0,
                    margin: 0,
                    items: 1,
                    autoplay: false,
                    autoplayTimeout: 10000,
                    smartSpeed: 1000,
                    nav: true,
                    dots: true,
                    touchDrag  : false,
                    mouseDrag  : false,
                    autoHeight: true,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
                });
            }
        },

        slider_catgories : function(){

            if( $('#slider-categories').length ){
    
                $('#slider-categories').owlCarousel({
    
                    loop: true,
                    stagePadding: 0,
                    margin: 30,
                    autoplay: false,
                    autoplayTimeout: 10000,
                    smartSpeed: 1000,
                    nav: false,
                    dots: true,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        767: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
            }
        },

        home_slider_listing : function(){

            if( $('#home-slider-listing').length ){
    
                $('#home-slider-listing').owlCarousel({
    
                    loop: true,
                    stagePadding: 0,
                    margin: 30,
                    slideBy: 1,
                    autoplay: true,
                    autoplayTimeout: 10000,
                    smartSpeed: 1000,
                    nav: false,
                    dots: true,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        767: {
                            items: 2
                        },
                        992: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
            }
        },

        vendor_gallery : function(){

            if( $('.vendor-img-gallery').length ){

                $('.vendor-img-gallery').each(function() { // the containers for all your galleries
                    $(this).magnificPopup({
                        delegate: 'a', // the selector for gallery item
                        type: 'image',
                        gallery: {
                            enabled: true, // set to true to enable gallery
                        
                            preload: [0,2], // read about this option in next Lazy-loading section
                        
                            navigateByImgClick: true,
                        
                            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
                        
                            tPrev: 'Previous (Left arrow key)', // title for left button
                            tNext: 'Next (Right arrow key)', // title for right button
                            tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // markup of counter
                        }
                    });
                });
            }
        },

        vendor_gallery_btn : function(){

            if( $('.vendor_gallery_btn').length ){

                $('.gallery-btn a').click(function() {
                    $('i').toggleClass( "active" );
                    if ($('.text').hasClass("active")) {
                    //$('.text').text("Show Less");
                    } else {
                    //$('.text').text("Show More");
                    }
                });
            }
        },

        vendor_video : function(){

            if( $('.vendor-video').length ){

                $('.popup-video').magnificPopup({
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: true ,
                    fixedContentPos: true
                });    
            }
        },


        isotope_gallery: function () {

            // Porfolio isotope and filter
            $(window).on('load', function () {
                var portfolioIsotope = $('.isotope-gallery').isotope({
                    itemSelector: '.gallery-item'
                });

                $('#portfolio-flters li').on('click', function () {
                    $("#portfolio-flters li").removeClass('filter-active');
                    $(this).addClass('filter-active');

                    portfolioIsotope.isotope({
                        filter: $(this).data('filter')
                    });
                    aos_init();
                });
            });
        },

        toggle_datepicker : function(){

            if( $('[data-toggle="datepicker"]').length ){

                $('[data-toggle="datepicker"]').datepicker({
                autoHide: true,
                zIndex: 2048,
                });
            }
        },

        inline_toggle_datepicker : function(){

            if( $('[data-toggle-inline="datepicker"]').length ){

                $('[data-toggle-inline="datepicker"]').datepicker({
                    autoHide: true,
                    zIndex: 2048,
                    inline: true
                });
            }
        },
        
        tab_scrolling: function( elm ){

            if( $(elm).length ){

                $(elm).click(function(event) {
                        
                    if ( location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname ) {
                            
                        var target = $(this.hash);

                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                            
                        if (target.length) {
                        
                            event.preventDefault();

                            $('html, body').animate({

                                scrollTop: target.offset().top - 40

                            }, 1000, function() {
                        
                                var $target = $(target);

                                $target.focus();

                                if ($target.is(":focus")) {

                                    return false;

                                } else {
                                    
                                    $target.attr('tabindex', '-1');
                                    $target.focus();
                                };
                            });
                        }

                    };

                    $(elm).each(function() { $(this).removeClass('active'); });

                    $(this).addClass('active');
                });
            }
        },

        listing_singular_map: function(){

            if( $("#map_extended").length ){

                $("#map_extended").gMap({
                    markers: [{
                        address: "",
                        html: '<div class="vendor-single-popup"><img src="assets/images/vendors/vendo-map.jpg" alt=""><h5>Matrimony Wedding Photography</h5><span class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><small>19</small></span><a href="javascript:" class="btn btn-primary btn-block" data-toggle="modal" data-target="#request_quote">Request Pricing</a></div>',
                        latitude: -33.87695388579145,
                        longitude: 151.22183918952942,
                        icon: {
                            image: "https://wporganic.com/html/weddingdir/assets/images/pin.png",
                            iconsize: [35, 48],
                            iconanchor: [17, 48]
                        }
                    }],
                    icon: {
                        image: "images/pin.png",
                        iconsize: [35, 48],
                        iconanchor: [17, 48]
                    },
                    latitude: -33.87695388579145,
                    longitude: 151.22183918952942,
                    zoom: 16
                });
            }
        },

        listing_singular_map_streetview: function(){

            let panorama;

            function initialize() {
              panorama = new google.maps.StreetViewPanorama(
                document.getElementById("street-view"),
                {
                  position: { lat: 37.86926, lng: -122.254811 },
                  pov: { heading: 165, pitch: 0 },
                  zoom: 1,
                }
              );
            }
        },

        initializ: function () {

            this.select_dark();
            this.date_picker();
            this.select_light();
            this.header_anim();
            this.bootstrap_menu();
            this.back_to_top();
            this.data_toggle();
            this.range_slider();
            this.bs_tootltip();
            this.slider_about();
            this.slider_vendor_single();
            this.slider_feedback();
            this.slider_partners();
            this.vendor_gallery();
            this.vendor_video();
            this.wedding_listing_single();     
            this.slider_home();
            this.select_home_1();      
            this.select_home_2(); 
            this.slider_catgories();     
            this.home_slider_listing();
            this.select_map_1();
            this.select_map_2();
            this.select_map_3();
            this.select_map_4();
            this.isotope_gallery();
            this.toggle_datepicker();
            this.inline_toggle_datepicker();
            this.tab_scrolling( '.left-navbar a' );
            this.tab_scrolling( '.vendor-nav a' );
            this.tab_scrolling( '#write-review-form' );
            this.listing_singular_map();
            this.listing_singular_map_streetview();
        }

    }

    /* ---------------------------------------------
   Document ready function
   --------------------------------------------- */
    $(function () {

        wporganic.loader();
        wporganic.initializ();
    });

    $(window).resize(function () {
        //wporganic.initializ();
    });

})(jQuery);