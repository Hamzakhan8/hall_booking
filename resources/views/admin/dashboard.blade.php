<!DOCTYPE html>
<html lang="en">
    <!-- head -->

    @extends('layouts.components.head')
    <!-- end head -->

    <!--body start-->
<body class="open">

    <!-- preloader -->
    {{-- <div class="preloader">
        <div class="status">
            <img src="{{ asset('assets') }}/images/logo_light.svg" alt="">
        </div>
    </div> --}}
    <!-- end preloader -->

    <!--  WeddingDir top -->
    @extends('admin.components.navbar')

    <!--  WeddingDir top -->

    <!-- =============================
       *
       *   Page Content Start
       *
    =============================== -->

    @extends('admin.components.sidebar')

    <main>
        <div class="body-content">
            <div class="main-contaner">
                <div class="container">
                    <!-- Page Heading -->
                    <div class="section-title">
                        @yield('body-title')
                    </div>
                    <!-- Page Heading -->

                    <!-- My Pricing Section -->
                    <div class="card-shadow">
                        @yield('body-upper-content')
                    </div>

                    <div class="card-shadow-body p-0">
                        @yield('body-lower-content')
                    </div>
                    <!-- My Pricing Section -->
                </div>
            </div>
            <footer>
                <div class="copyrights">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-auto col-12">
                                © 2022 All rights reserved.
                            </div>
                            <div class="col-md-auto col-12 copyrights-link ml-md-auto">
                                <a href="{{ route('front.home') }}">Home</a> | <a href="{{ route('front.about') }}">About</a> | <a href="{{ route('front.contact') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>


    <!-- All The JS Files
      ================================================== -->
      @extends('layouts.components.script')

</body>

<!-- Mirrored from wporganic.com/html/weddingdir/vendor-dashboard-quote.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:30:33 GMT -->
</html>
