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
            <h1>Book Hall</h1>
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
                    @foreach ($contacts as $contact)
                        <!-- Contact Details Wrap -->
                        <div class="col-md-6">
                            <div class="contact-details-wrap">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h3 class="txt-primary">Customer Support</h3>
                                <p class="my-4">Call our 24-hour helpline.</p>
                                <div>Phone number: <a href="javascript:" class="btn-link btn-link-default">{{ $contact->call_number }}</a></div>
                                <div>Email Us: <a href="mailto:info@weddingdir.com" class="btn-link btn-link-primary">{{ $contact->email }}</a> </div>
                            </div>
                        </div>
                        <!-- Contact Details Wrap -->

                        <!-- Contact Details Wrap -->
                        <div class="col-md-6">
                            <div class="contact-details-wrap">
                                <i class="fa fa-address-book" aria-hidden="true"></i>
                                <h3 class="txt-primary">Our Address</h3>
                                <p class="my-4">{{ $contact->address }}</p>
                            </div>
                        </div>

                    @endforeach

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
                            <form action="{{ route('front.contact.store') }}" method="POST">
                                @csrf
                                @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    <strong>{{ Session::get('success') }}</strong>
                                </div>
                                @elseif (Session::has('danger'))
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ Session::get('danger') }}</strong>
                                    </div>
                                @endif
                                <input type="hidden" name="subject" value="Contact Form" />

                                <div class="row mt-5">
                                    <div class="col-sm-6 mb-0">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-dark" name="First_Name" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-0">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-dark" name="Last_Name" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-0">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-dark" name="Email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-0">
                                        <div class="form-group">
                                            <input type="number" class="form-control form-dark" name="Contact_Number" placeholder="Mobile No.">
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

    <!-- All The JS Files
      ================================================== -->
        @extends('front_view.components.scripts')
</body>

<!-- Mirrored from wporganic.com/html/weddingdir/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:30:34 GMT -->
</html>
