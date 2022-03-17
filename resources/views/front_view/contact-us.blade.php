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

<!-- Mirrored from wporganic.com/html/weddingdir/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:30:34 GMT -->
    @extends('front_view.components.head')
    <!-- end head -->
    <!--body start-->
    <body>

    <!-- preloader -->
    <div class="preloader">
        <div class="status">
            <img src="assets/images/logo_light.svg" alt="">
        </div>
    </div>
    <!-- end preloader -->

    <!--  WeddingDir top -->
    @extends('front_view.components.header')
    <!--  WeddingDir top -->

    <!-- =============================
       *
       *   Page Content Start
       *
      =============================== -->

    <main id="body-content">

        <!-- Google Map Start -->
        <section class="map-wrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"></iframe>
        </section>
        <!-- Google Map End -->

        <!-- Contact Details Start -->
        <section>
            <div class="container">
                <div class="row contact-broken">
                    <!-- Contact Details Wrap -->
                    <div class="col-md-4">
                        <div class="contact-details-wrap">
                            <i class="weddingdir_support"></i>
                            <h3 class="txt-primary">Customer Support</h3>
                            <p class="my-4">Call our 24-hour helpline.</p>
                            <div>Phone number: <a href="javascript:" class="btn-link btn-link-default">+800-123-4567</a></div>
                            <div>Email Us: <a href="mailto:info@weddingdir.com" class="btn-link btn-link-primary">info@weddingdir.com</a> </div>
                        </div>
                    </div>
                    <!-- Contact Details Wrap -->

                    <!-- Contact Details Wrap -->
                    <div class="col-md-4">
                        <div class="contact-details-wrap">
                            <i class="weddingdir_location"></i>
                            <h3 class="txt-primary">Our Address</h3>
                            <p class="my-4">Our offices are located in the Georgia.</p>
                            <div>Address: 4998 Elk Creek Road <br>Canton, GA 30114</div>
                        </div>
                    </div>
                    <!-- Contact Details Wrap -->

                    <!-- Contact Details Wrap -->
                    <div class="col-md-4">
                        <div class="contact-details-wrap">
                            <i class="weddingdir_mail"></i>
                            <h3 class="txt-primary">Other Enquiries</h3>
                            <p class="my-4">Please contact us at the email below for all other inquiries.</p>
                            <div>Email Us: <a href="mailto:enquiry@weddingdir.com" class="btn-link btn-link-primary">enquiry@weddingdir.com</a> </div>
                        </div>
                    </div>
                    <!-- Contact Details Wrap -->
                </div>
            </div>
        </section>


        <section class="wide-tb-90">
            <div class="container">

                <div class="row">
                    <div class="col-lg-7 mx-auto col-md-8">
                        <div class="text-center">
                            <h3 class="txt-default fw-7">Feel Free To Contact Us</h3>
                            <p>Excepteur sint occaecat cupidatat non proident sunt</p>
                            <form action="https://wporganic.com/html/weddingdir/form-action.php" method="get">

                                <input type="hidden" name="subject" value="Contact Form" />

                                <div class="row mt-5">
                                    <div class="col-sm-6 mb-0">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-dark" name="First Name" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-0">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-dark" name="Last Name" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-0">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-dark" name="Email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-0">
                                        <div class="form-group">
                                            <input type="number" class="form-control form-dark" name="Contact Number" placeholder="Mobile No.">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-0">
                                        <div class="form-group">
                                            <textarea class="form-control form-dark" name="Message" placeholder="Your Message" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Contact Details End -->
    </main>

    @extends('front_view.components.footer')
    <!-- Back to Top
    ================================================== -->
    <a id="back-to-top" href="javascript:" class="btn btn-outline-primary back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- Modal -->
    <div class="modal fade" id="login_form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered register-tab">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="d-flex justify-content-between align-items-center p-3 px-4 bg-light-gray">
                        <h2 class="m-0" >Sign In</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>

                    <ul class="nav nav-pills mb-3 horizontal-tab-second justify-content-center nav-fill pt-2" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active show" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="false">Log In</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-register-tab" data-toggle="pill" href="#pills-hr-vendor" role="tab" aria-controls="pills-hr-vendor" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <div class="p-3 px-4 pt-0">

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                <form>
                                    <div class="form-group">
                                        <div class="alert alert-primary" role="alert">
                                            Username: <strong>vendor</strong> / <strong>couple</strong><br>
                                            Password: <strong>test</strong>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Username/Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox form-dark">
                                            <input type="checkbox" class="custom-control-input" id="customCheck112">
                                            <label class="custom-control-label" for="customCheck112">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default btn-rounded mt-3">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-hr-vendor" role="tabpanel" aria-labelledby="pills-register-tab">
                                <form>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col text-center">
                                                <div class="custom-control custom-radio custom-control-inline form-dark">
                                                    <input type="radio" id="dgest" name="dgest" class="custom-control-input">
                                                    <label class="custom-control-label" for="dgest">Couple</label>
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <div class="custom-control custom-radio custom-control-inline form-dark">
                                                    <input type="radio" id="owner" name="dgest" class="custom-control-input">
                                                    <label class="custom-control-label" for="owner">Vendor</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" type="text" class="input-text" name="username" id="username2" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" class="input-text" type="password" name="password" id="password1">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" type="text" name="first_name" id="first-name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" type="text" name="last_name" id="last-name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email Address" class="input-text" name="email" id="email" value="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default btn-rounded mt-3">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- All The JS Files
      ================================================== -->
        @extends('front_view.components.scripts')
</body>

<!-- Mirrored from wporganic.com/html/weddingdir/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:30:34 GMT -->
</html>
