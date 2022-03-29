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
<script src="{{asset('assets')}}/library/countdown/js/jquery.countdown.min.js"></script>
<script src="{{asset('assets')}}/library/perfect-scrollbars/perfect-scrollbar.min.js"></script>
<script src="{{asset('assets')}}/js/dashboard.js"></script>
<script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script>
            $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>

{{--<script type="text/javascript">
    $(document).ready(function(){
        $(".delete-image").on('click',function(){
            var img_id=$(this).attr('data-image-id');
            var _vm=$(this);
            $.ajax({
                url:"{{url('admin/halltypeimage/delete')}}/"+img_id,
                dataType:'json',
                beforeSend:function(){

                    _vm.addClass('disabled');

                },

                success:function(res){
                    if(res.bool==true){
                        $(".imgcol"+img_id).remove();
                    }
                    _vm.removeClass('disabled');
                }
            });
        });
    });
</script>
--}}
<script type="text/javascript">

    $(document).ready(function () {

    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 3000);

    });
</script>


<script type="text/javascript">
    $(document).ready(function(){

        $(".checkin-date").on('blur',function(){

            var _checkindate=$(this).val();



                //using Ajax to send request to controller

                $.ajax({

                    url:"{{url('admin/booking/available-halls')}}/"+_checkindate,

                    dataType:'json',
                    success:function(res){
                        console.log(res);
                    }
                });

            });

    });
</script>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            for (var i = 0; i < input.files.length; i++){
                var reader = new FileReader();
            reader.onload = function (e) {

            var img_upload = $('#show_img')
                .append("<img src='" + e.target.result + "' class='p-2 rounded' width='150' height='150' alt='images'>");
            };

            reader.readAsDataURL(input.files[i]);
            }
        }
    }
</script>
