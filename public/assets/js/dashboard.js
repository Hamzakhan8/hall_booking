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
                  dropdownAutoWidth: true,
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
      select_bordered: function () {
        if ($('.select_bordered').length) {

            $('.select_bordered').select2({
                // width: 'resolve',
                theme: "bordered-theme",
                minimumResultsForSearch: -1
            });
        }
    },

    select_multiple: function () {
        if ($('.select-multiple').length) {

            $('.select-multiple').select2({
                width: 'resolve',
                theme: "multiple-items",
                dropdownAutoWidth: true,
                multiple: true,
                width: '100%',
                height: '30px',
                placeholder: "Select",
                allowClear: true
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

      toggle_datepicker : function(){

          if( $('[data-toggle="datepicker"]').length ){

              $('[data-toggle="datepicker"]').datepicker({
              autoHide: true,
              zIndex: 2048,
              });
          }
      },

      toggle_offcanvas : function(){

        if( $('[data-toggle="offcanvas"]').length ){

          $('[data-toggle="offcanvas"]').on('click', function () {
            $('body').toggleClass('open')
          });

          $('[data-toggle="offcanvas-mobile"]').on('click', function () {
            $('.offcanvas-collapse-mobile').toggleClass('open')
          })
        }
    },

    sidebar_scroll : function(){

        if ($('.sidebar-nav').length) {

            const ps = new PerfectScrollbar('.sidebar-nav', {
                wheelSpeed: 2,
                wheelPropagation: true,
                minScrollbarLength: 20,
                swipeEasing: true,
                scrollingThreshold: 100
            });

            ps.update();
        }
    },

    reviews_tabbing_wrap_scroll : function(){

        if ($('.reviews-tabbing-wrap').length) {

            const ps = new PerfectScrollbar('.reviews-tabbing-wrap', {
                wheelSpeed: 2,
                wheelPropagation: true,
                minScrollbarLength: 20
                
            });

            ps.update();
        }
    },

    wedding_countdown: function () {

        if ($('#wedding-countdown').length) {

            var now = new Date();
            var day = now.getDate();
            var month = now.getMonth() + 1;
            var year = now.getFullYear() + 1;

            var nextyear = month + '/' + day + '/' + year + ' 07:07:07';

            $('#wedding-countdown').countdown({
                date: nextyear, // TODO Date format: 07/27/2017 17:00:00
                offset: +2, // TODO Your Timezone Offset
                day: 'Day',
                days: 'Days',
                hideOnComplete: true
            }, function (container) {
                alert('Done!');
            });

        }
    },

    toggle_password: function () {

        if ($('.toggle-password').length) {

            $(".toggle-password").click(function () {

                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("data-toggle"));
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });

        }
    },

    checkbox_select: function () {

        if ($('#checkAll').length) {

            $("#checkAll").click(function () {
                $('input:checkbox').not(this).prop('checked', this.checked);
            });
        }
    },

    menu_link_toggle: function () {

        if ($('.dropdown-menu a.dropdown-toggle-click').length) {

            $('.dropdown-menu a.dropdown-toggle-click').on('click', function (e) {
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

    sidebar_panel: function( form, action ){

        if( $( form ).length ){

            $(  form  ).slideReveal({

                width: "300px",
                push: false,
                position: "right",
                speed: 600,
                trigger: $( action ),
                overlay: true,
                top: 0,
                overlayColor: 'rgba(0,0,0,0.5)'
            });
        }
    },

    summernote: function( elm ){

      if( $( elm ).length ){

          $( elm ).summernote({
              placeholder: 'Write your text here...',
              tabsize: 2,
              height: 250
          });
      }
    },

    todo_task_done: function(){

      if( $('.upcoming-task input[type=checkbox]').length ){

          $('.upcoming-task input[type=checkbox]').change(function () {
              if (this.checked) {
                  $(this).next().addClass("checked-label-text");
              } else {
                  $(this).next().removeClass("checked-label-text");
              }
          });
      }
    },

    initializ: function () {
        this.menu_link_toggle();
        this.date_picker();
        this.select_dark();
        this.select_light();
        this.select_bordered();
        this.back_to_top();
        this.data_toggle();
        this.range_slider();
        this.bs_tootltip();
        this.vendor_gallery();
        this.toggle_datepicker();
        this.toggle_offcanvas();
        this.sidebar_scroll();
        this.wedding_countdown();
        this.toggle_password();
        this.checkbox_select();
        this.reviews_tabbing_wrap_scroll();
        this.sidebar_panel(  "#add_new_budget_form", "#add_new_budget_button" );
        this.sidebar_panel(  "#add_new_guest_form",  "#add_new_guest_button"  );
        this.sidebar_panel(  "#add_new_todo_form",   "#add_new_todo_button"  );
        this.summernote( '#summernote' );
        this.todo_task_done();
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
