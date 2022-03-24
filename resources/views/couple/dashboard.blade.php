
<!DOCTYPE html>
<!--

**********************************************************************************************************
Copyright (c) 2020
**********************************************************************************************************

Template Name: WeddingDir - HTML Template
Version: 1.0.0
Author: wp-organic

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]>
-->
<html lang="en">
    <!-- <![endif]-->
    <!-- head -->

<!-- Mirrored from wporganic.com/html/weddingdir/vendor-dashboard-quote.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:30:33 GMT -->
    @extends('couple.components.head')
    <!-- end head -->
    <!--body start-->
    <body class="open">

    <!-- preloader -->
    <div class="preloader">
        <div class="status">
            <img src="{{ asset('assets') }}/images/logo_light.svg" alt="">
        </div>
    </div>
    <!-- end preloader -->

    <!--  WeddingDir top -->
    @extends('couple.components.navbar')

    <!--  WeddingDir top -->

    <!-- =============================
       *
       *   Page Content Start
       *
    =============================== -->

        @extends('couple.components.sidebar')


   <div class="body-content">
    <div class="main-contaner">
        <div class="container">
            <!-- Page Heading -->
            <div class="section-title">
                @yield('title')
            </div>
            <!-- Page Heading -->

            <!-- My Pricing Section -->
            <div class="card-shadow">

            </div>

            <div class="card-shadow-body p-0">
                @yield('content')
               </div>
            <!-- My Pricing Section -->
        </div>
    </div>

    @extends('couple.components.footer')

</div>
</main>


    <!-- Back to Top
    ================================================== -->
    <a id="back-to-top" href="javascript:" class="btn btn-outline-primary back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- Request Quote Modal -->
    <div class="modal fade" id="request_quote" tabindex="-1" aria-labelledby="request_quote" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered register-tab">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="d-flex justify-content-between align-items-center p-3 px-4 bg-light-gray">
                        <h3 class="m-0" >Request A Quote</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="p-3 px-4 pt-0">
                        <div class="request-quote-form">
                            <div class="form-group">
                                <input type="text" placeholder="First and last name" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="number" placeholder="Phone Number" class="form-control" />
                            </div>
                            <div class="form-group pos-rel">
                                <input type="text" class="form-control" data-toggle="datepicker"  placeholder="Choose Date" />
                            </div>
                            <div class="form-group">
                                <textarea rows="6" placeholder="Your message" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <p><strong><small class="txt-orange">Preferred Contact Method</small></strong></p>

                                <div class="custom-control custom-radio custom-control-inline mb-3">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">Call</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mb-3">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">Email</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mb-3">
                                    <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline3">Video call</label>
                                </div>
                            </div>
                            <div class="form-group">
                               <small class="form-text text-muted">By clicking <span class="txt-orange">'Request pricing'</span>, I agree to WeddingDir’s <a href="javascript:" class="text-underline">Privacy Policy</a> and <a href="javascript:">Terms of Use</a> </small>
                            </div>
                            <button type="button" class="btn btn-primary">Request Pricing</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Request Quote Modal -->


    <!-- All The JS Files
      ================================================== -->
      @extends('couple.components.script')

</body>

<!-- Mirrored from wporganic.com/html/weddingdir/vendor-dashboard-quote.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:30:33 GMT -->
</html>
