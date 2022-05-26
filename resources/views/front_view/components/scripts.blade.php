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

<script type="text/javascript">
    $(document).ready(function () {
        $('#submit_comment').click(function () {
            let id = $('#hall_detail').attr('data-id');
            let title = $('#hall_detail').attr('data-title');

            $('#append_hall_id').val(id);
            $('#append_hall_title').val(title);
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.frontCommentReply_btn').click(function () {
            let comment_id = $(this).attr('data-comment-id');
            let comment_username = $(this).attr('data-comment-username');
            let comment_hallId = $(this).attr('data-comment-hallId');
            let comment_hallName = $(this).attr('data-comment-hallName');

            $('#frontCommentUsername').val(comment_username);
            $('#frontCommentId').val(comment_id);
            $('#frontCommentHallId').val(comment_hallId);
            $('#frontCommentHallName').val(comment_hallName);

            $('#frontRepyModal').modal('show');
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.frontReplyToReply_btn').click(function () {
            let comment_id = $(this).attr('data-comment-id');
            let reply_id = $(this).attr('data-reply-id');
            let reply_username = $(this).attr('data-reply-username');
            let reply_hallId = $(this).attr('data-reply-hallId');
            let reply_hallName = $(this).attr('data-reply-hallName');

            $('#frontReplyUsername').val(reply_username);
            $('#frontCommentReplyId').val(comment_id);
            $('#frontReplyId').val(reply_id);
            $('#frontReplyHallId').val(reply_hallId);
            $('#frontReplyHallName').val(reply_hallName);

            $('#frontReRepyModal').modal('show');
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.frontReReply_btn').click(function () {
            let comment_id = $(this).attr('data-comment-id');
            let Re_reply_id = $(this).attr('data-reReply-id');
            let Re_reply_username = $(this).attr('data-reReply-username');
            let Re_reply_hallId = $(this).attr('data-reReply-hallId');
            let Re_reply_hallName = $(this).attr('data-reReply-hallName');

            $('#frontReReplyUsername').val(Re_reply_username);
            $('#frontReReplyCommentId').val(comment_id);
            $('#frontReReplyId').val(Re_reply_id);
            $('#frontReReplyHallId').val(Re_reply_hallId);
            $('#frontReReplyHallName').val(Re_reply_hallName);

            $('#frontReRepiesModal').modal('show');
        });
    });
</script>
