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
<script src="https://cdn.lordicon.com/lusqsztk.js"></script>

<script type="text/javascript">
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

    // for selecting and displaying multiple images for slider
    function readURL(input) {
        if (input.files && input.files[0]) {
            for (var i = 0; i < input.files.length; i++){
                var reader = new FileReader();
            reader.onload = function (e) {

            $('#show_img')
            .append("<img src='" + e.target.result + "' class='p-2 rounded' width='150' height='150' alt='images'>");
            };

            reader.readAsDataURL(input.files[i]);
            }
        }
    }

    // for selecting and displaying profile image in dashboard
    function readAvatar(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {

        $('#default_avatar').remove();

        $('#show_avatar')
        .append("<img src='" + e.target.result + "' class='p-2 rounded-circle' style='width:130px;height:120px;' alt='images'>");
        };

            reader.readAsDataURL(input.files[0]);
        }
    }

        // triggerd loop on image icon
        $(document).ready(function () {
            $('#lord_img_icon').mouseenter(function () {
                $(this).attr('trigger', 'loop');
            });

            $('#lord_img_icon').mouseleave(function () {
                $(this).removeAttr('trigger');
            });
        });

        // contact reply update on bootstrap modal
        $(document).ready(function () {
            $('.myModalBtn').click(function () {
                var id = $(this).attr('data-id');
                var username = $(this).attr('data-name');

                var modal = $('#myModal').attr('data-id', id);
                var modal = $('#myModal').attr('data-name', username);

                var cancel_btn = $('.Update_close_btn');

                //concatinating hall id with update form action
                var url = $('.UpdateHallCategoryForm').attr('action');

                url = url.replace(':id', id);

                cancel_btn.click(function () {
                    var url_2 = $('.UpdateHallCategoryForm').attr('action');

                    url_2 = url_2.replace(id, ':id');

                    $('.UpdateHallCategoryForm').attr('action', url_2);
                });

                modal.modal('show');

                $('#contact_id').attr('value', id);
                $('#contact_username').attr('value', username);
                $('.UpdateHallCategoryForm').attr('action', url);
            });
        });

        // comment reply update on bootstrap modal
        $(document).ready(function () {
            $('.myReplyModalBtn').click(function () {
                var id = $(this).attr('data-id');
                var username = $(this).attr('data-name');

                var modal = $('#myModal').attr('data-id', id);
                var modal = $('#myModal').attr('data-name', username);

                modal.modal('show');

                $('#contact_id').attr('value', id);
                $('#contact_username').attr('value', username);
            });
        });

        // comment reply update on bootstrap modal
        $(document).ready(function () {
        $('.myCommentReplybtn').click(function () {
            var id = $(this).attr('data-id');
            var username = $(this).attr('data-name');

            var modal = $('#myModal').attr('data-id', id);
            var modal = $('#myModal').attr('data-name', username);

            modal.modal('show');

            $('#contact_id').attr('value', id);
            $('#contact_username').attr('value', username);
            });
        });

        // comment Reereply update on bootstrap modal
        $(document).ready(function () {
        $('.myReeReplyModalbtn').click(function () {
            var id = $(this).attr('data-id');
            var username = $(this).attr('data-name');

            var modal = $('#myModal').attr('data-id', id);
            var modal = $('#myModal').attr('data-name', username);

            modal.modal('show');

            $('#contact_id').attr('value', id);
            $('#contact_username').attr('value', username);
            });
        });

        $(document).ready(function () {
            $('.select_input_option').click(function () {
                var category = $(this).attr('data-category');
                var category_id = $(this).val();

                $('.select_input').val(category);
                $('.category_input').val(category_id);
            });
        });

        $(document).ready(function () {
            $('.edit_hall_modal').click(function () {
                var hall_id  = $(this).attr('data-id');
                var hall_title  = $(this).attr('data-title');
                var hall_description  = $(this).attr('data-description');
                var hall_category_id  = $(this).attr('data-category');

                var cancel_btn = $('.Update_close_btn');

                //concatinating hall id with update form action
                var url = $('.hallUpdateForm').attr('action');

                url = url.replace(':id', hall_id);

                cancel_btn.click(function () {
                    var url_2 = $('.hallUpdateForm').attr('action');

                    url_2 = url_2.replace(hall_id, ':id');

                    $('.hallUpdateForm').attr('action', url_2);
                });

                $('#edit_hall_description').val(hall_description);
                $('#edit_hall_title').val(hall_title);
                $('#edit_hall_category_id').val(hall_category_id);
                $('.hallUpdateForm').attr('action', url);
            });
        });

</script>
