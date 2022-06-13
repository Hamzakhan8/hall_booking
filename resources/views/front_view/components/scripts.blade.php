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
<!-- Compiled and minified JavaScript -->
{{-- <script src="{{asset('assets')}}/js/script.js"></script> --}}
<script src="https://js.stripe.com/v3/"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#get_live_location").click(function () {
            let address = $(this).attr("data-hall-address");
            let location = $(this).attr("data-hall-city");

            window.location.href="https://www.google.com/maps/search/"+address+' '+location+"/@41.9956771,-93.6403663,17z?hl=en-US";

        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {

    $("#owl-demo").owlCarousel({

        autoPlay: 1000, //Set AutoPlay to 3 seconds

        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,1]

    });

    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#submit_comment').click(function () {
            let id = $('#hall_detail').attr('data-id');
            let title = $('#hall_detail').attr('data-title');

            $('#append_hall_id').val(id);
            $('#append_hall_title').val(title);
        });
    });

    $(document).ready(function () {
        $(".hall_payment_btn").click(function () {
            let hall_id = $(this).attr('data-hall-id');
            let hall_title = $(this).attr('data-hall-title');
            let hall_event = $(this).attr('data-hall-event');
            let hall_price = $(this).attr('data-hall-price');

            let hall_modal = $("#request_quote").attr("data-hall-id", hall_id);

            $("#hallId").val(hall_id);
            $("#hallTitle").val(hall_title);
            $("#ShowHallEvent").val(hall_event);
            $("#hallPrice").val(hall_price);
            $("#ShowHallPrice").val(hall_price);
            $("#hallEvents").val(hall_event);

            hall_modal.modal('show');
        });
    });
</script>

{{-- Setting stripe publishable key to set the stripe card elements --}}
<script type="text/javascript">
    // Set your publishable key: remember to change this to your live publishable key in production
    // See your keys here: https://dashboard.stripe.com/apikeys
    var Publishable_key = "pk_test_51K3NIIAcehZZuafTtf9NQ6PZfGuNnYmHvbraQAqCUKxmin4bKDknYpnKAssVr6TdYGfpje3LjiiYefBlClZeKzDA00b6dHZEky";
    var stripe = Stripe(Publishable_key);

    // Set up Stripe.js and Elements to use in checkout form
    var form = document.getElementById("payment-form");

      form.addEventListener('submit', function(event) {
        event.preventDefault();
        stripe.createSource(card).then(function(result) {
            if (result.error) {
            // Inform the user if there was an error
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
            } else {
            // Send the source to your server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeSource');
                hiddenInput.setAttribute('value', result.source.id);
                form.appendChild(hiddenInput);
                form.submit();
            }
        });
      });

    var elements = stripe.elements();

    var style = {
        base: {
        color: "#32325d",
        }
    };

    var card = elements.create("card", { style: style });

    card.mount("#card-element");

    card.on('change', function(event) {

    var displayError = document.getElementById('card-errors');

    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
    });
</script>

<script type="text/javascript">
    $(".searc_by_location").click(function () {
        let location = $(this).attr("data-hall-location");

        $.ajax({
            type: "POST",
            url: "{{ route('front.search.by_location') }}",
            data: hall_city:location,
            // dataType: "json",
            success: function (response) {
                alert('success');
            },
            error: function (response) {
                alert('not success');
            }
        });

    });
</script>
