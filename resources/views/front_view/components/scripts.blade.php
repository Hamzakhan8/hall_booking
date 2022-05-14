<script src="{{asset('assets')}}/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('assets')}}/library/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/library/bootstrap/js/bootstrap-dropdownhover.min.js"></script>
<script src="{{asset('assets')}}/library/owlcarousel/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/library/select2/js/select2.min.js"></script>
<script src="{{asset('assets')}}/library/jquery-ui/js/jquery-ui.min.js"></script>
<script src="{{asset('assets')}}/library/jquery-ui/js/jquery.ui.touch-punch.min.js"></script>
<script src="{{asset('assets')}}/library/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets')}}/library/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('assets')}}/library/datepicker/js/datepicker.js"></script>
<script src="{{asset('assets')}}/js/script.js"></script>

@if ($errors && (is_array($errors) || $errors->all()))
    <script type="text/javascript">
        $(document).ready(function () {

            var front_modal = $('.front_login_modal').modal('show');

            $('.login_panel').removeClass(['show', 'active']);
            $('.login_panel_title').removeClass(['show', 'active']);

            $('.register_panel').addClass(['show', 'active']);
            $('.register_panel_title').addClass(['show', 'active']);

        });
    </script>
@endif

<script type="text/javascript">
    $(document).ready(function() {

    $("#owl-demo").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]

    });

    });
</script>
