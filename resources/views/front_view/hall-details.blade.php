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

<!-- Mirrored from wporganic.com/html/weddingdir/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:28:33 GMT -->
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

    <!--  Page Breadcrumbs Start -->
    <section class="breadcrumbs-page">
        <div class="container">
            <h1>Hall details</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('front.home') }}"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hall details</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--  Page Breadcrumbs End -->

    <main id="body-content">
        <!-- Blog Page Start -->
        @foreach ($hall_details as $detail)
            <section class="wide-tb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <!-- Post Blog -->
                            <div class="post-content mb-0">
                                @if (Session::has('created'))
                                    <div class="alert alert-success" role="alert">
                                        <strong>{{ Session::get('created') }}</strong>
                                    </div>
                                    @elseif (Session::has('first_profile'))
                                    <div class="alert alert-warning" role="alert">
                                        <strong>{{ Session::get('first_profile') }}</strong>
                                    </div>
                                @endif
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    @php
                                        $json_img = json_decode($detail->images);
                                    @endphp
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block" height="450px" width="700rem" src="{{ asset('storage/hall_img/'.$json_img[0]) }}" alt="First slide">
                                        </div>
                                        @foreach (json_decode($detail->images) as $image)
                                        <div class="carousel-item">
                                            <img class="d-block w-100" height="450px" src="{{ asset('storage/hall_img/'.$image) }}" alt="First slide">
                                        </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!-- Post Blog Image -->

                                <!-- Post Blog Content -->
                                <h3 id="hall_detail" data-id="{{ $detail->id }}" data-title="{{ $detail->title }}" class="blog-title">
                                    {{ $detail->title }}
                                </h3>
                                <span class="meta-date">{{ ($detail->created_at)->diffForHumans() }}</span>

                                <div class="entry-content">
                                    <p>{{ $detail->description }}</p>
                                    @php
                                        $metaValue = $detail->halls_meta->toArray();

                                        $check = collect($metaValue);

                                        $events = $check->pluck('meta_value');
                                    @endphp

                                        <table class="table table-striped table-inverse">
                                            <thead class="thead-inverse" style="color: #00aeaf">
                                                <tr>
                                                    <th>Events</th>
                                                    <th>Maximum Guests</th>
                                                    <th>Price</th>
                                                    <th>Maximum Days</th>
                                                    <th>Pay</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($events[0] as $event => $value)
                                                    @php
                                                        $values = explode('-', $value);
                                                    @endphp
                                                    <tr>
                                                        <td scope="row">{{ ucfirst($event) }}</td>
                                                        <td>{{ $values[1] }}</td>
                                                        <td>${{ $values[0] }}</td>
                                                        <td>{{ $values[2] }}</td>
                                                        <td>
                                                            <div class="bottom">
                                                                <a class="btn btn-outline-primary btn-rounded hall_payment_btn"
                                                                data-hall-id="{{ $detail->id }}"
                                                                data-hall-title="{{ $detail->title }}"
                                                                data-hall-event="{{ $event }}"
                                                                data-hall-price="{{ $values[0] }}"
                                                                data-toggle="modal"
                                                                data-target="#request_quote"
                                                                >Request Price</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                        </table>
                                        <div class="tag-wrap">
                                            <div class="social-sharing">
                                                <em>Follow us</em>
                                                @foreach ($events[1] as $social => $links)
                                                    @php
                                                        $i = "fa fa-".$social."";
                                                        $class = "share-btn-".$social."";
                                                    @endphp
                                                    <a href="{{ $links }}" class="{{ $class }}"><i class="{{ $i }}"></i></a>
                                                @endforeach
                                            </div>
                                        </div>
                                    <!-- Tags/Socail Sharing -->

                                    <!-- Comments List -->
                                    <div class="commnets-reply">
                                        <h4 class="fw-7 mb-4">({{ $detail->comments->count() }}) Comments</h4>
                                        @foreach ($detail->comments as $comments)
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class="d-md-flex justify-content-between mb-3">
                                                        <div class="">
                                                            <h4 class="mb-0">{{ $comments->username }}</h4>
                                                            <small class="txt-blue">{{ ($comments->created_at)->diffForHumans() }}</small>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        {{ $comments->comment }}
                                                    </p>
                                                    @foreach ($comments->reply as $reply)
                                                        <div class="media reply-box ml-3">
                                                            <div class="media-body">
                                                                <div class="d-md-flex justify-content-between mb-3">
                                                                    <div class="">
                                                                        <h4 class="mb-0">{{ $reply->username }}</h4>
                                                                        <small class="txt-blue">{{ ($reply->created_at)->diffForHumans() }}</small>
                                                                    </div>
                                                                </div>
                                                                {{ $reply->reply }}
                                                            </div>
                                                        </div>
                                                        {{-- reply replies --}}
                                                        @foreach ($reply->re_reply as $re_reply)
                                                            <div class="media reply-box ml-5">
                                                                <div class="media-body">
                                                                    <div class="d-md-flex justify-content-between mb-3">
                                                                        <div class="">
                                                                            <h4 class="mb-0">{{ $re_reply->username }}</h4>
                                                                            <small class="txt-blue">{{ ($re_reply->created_at)->diffForHumans() }}</small>
                                                                        </div>
                                                                        <div>
                                                                        </div>
                                                                    </div>
                                                                    {{ $re_reply->reply }}
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                            {{-- comment repies --}}

                                    </div>
                                    <!-- Comments List -->

                                    <!-- Leave a Reply -->
                                    <h4 class="fw-7 mb-4">Leave a Comment</h4>

                                    <form action="{{ route('front.hall.comment') }}" method="POST">
                                        @csrf
                                        @if (Session::has('not logged in'))
                                        <div class="alert alert-warning" role="alert">
                                            <strong>{{ Session::get('not logged in') }}</strong>
                                        </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <input type="hidden" id="append_hall_id" value="" name="hall_id">
                                                        <input type="hidden" id="append_hall_title" value="" name="hall_title">
                                                        <textarea class="form-control" rows="5" name="comment" placeholder="Write Your Comments">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <button type="submit" id="submit_comment" class="btn btn-primary">Post Your Comment</button>
                                            </div>
                                    </form>
                                    <!-- Leave a Reply -->

                                </div>
                                <!-- Post Blog Content -->


                            </div>
                            <!-- Post Blog -->
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <aside class="row sidebar-widgets">
                                <!-- Sidebar Primary Start -->
                                <div class="sidebar-primary col-lg-12 col-md-6">
                                    <!-- Widget Wrap -->
                                    <form action="{{ route('front.search.by_location') }}" method="POST" class="sidebar-search">
                                        @csrf
                                        <input type="text" name="hall_city" class="form-control" placeholder="Search by city...">
                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                    </form>
                                    <!-- Widget Wrap -->

                                    <!-- Widget Wrap -->
                                    <div class="widget">
                                        <h3 class="widget-title">Categories</h3>

                                        <ul class="list-unstyled icons-listing mb-0 widget-listing arrow">
                                            <li><a href="{{ route('front.search.by_category',[$detail->hallCategory->id,$detail->location]) }}">
                                                {{ $detail->hallCategory->category }}</a></li>
                                        </ul>
                                    </div>
                                    <!-- Widget Wrap -->

                                    <!-- Widget Wrap -->
                                    <div class="widget">
                                        <h3 class="widget-title">Lastest Halls</h3>

                                        <div class="popular-post">
                                            <ul class="list-unstyled">
                                                @foreach ($latest_halls as $latest)
                                                @php
                                                    $decode = json_decode($latest->images);
                                                @endphp
                                                    <li>
                                                        <img src="{{ asset('storage/hall_img/'.$decode[0]) }}" alt="">
                                                        <div>
                                                            <h6><a href="{{ route('front.search.details', $latest->id) }}">{{ $latest->title }}</a></h6>
                                                            <small>{{ ($latest->created_at)->diffForHumans() }}</small>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Widget Wrap -->

                                    <!-- Widget Wrap -->
                                    <div class="widget">
                                        <h3 class="widget-title">Bookings</h3>

                                            @foreach ($bookings as $booking)
                                            @php
                                            $checkin_day = Carbon\Carbon::parse($booking->checkin_date)->format('d');
                                            $checkin_year = Carbon\Carbon::parse($booking->checkin_date)->format('Y');
                                            $checkin_month = Carbon\Carbon::parse($booking->checkin_date)->format('M');

                                            $checkout_day = Carbon\Carbon::parse($booking->checkout_date)->format('d');
                                            $checkout_year = Carbon\Carbon::parse($booking->checkout_date)->format('Y');
                                            $checkout_month = Carbon\Carbon::parse($booking->checkin_date)->format('M');
                                            @endphp
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <span class="text-info">from:</span> {{ $checkin_month.'-'.$checkin_day.'-'.$checkin_year }} <span class="text-info">to:</span> {{ $checkout_month.'-'.$checkout_day.'-'.$checkin_year }}
                                            </div>
                                            @endforeach
                                    </div>
                                    <!-- Widget Wrap -->

                                </div>
                                <!-- Sidebar Primary End -->
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
        <!-- Blog Page End -->
    </main>

    @extends('front_view.components.footer')
    <!-- Back to Top
    ================================================== -->
    <a id="back-to-top" href="javascript:" class="btn btn-outline-primary back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- Request Quote Modal -->
    <div class="modal fade" id="request_quote" tabindex="-1" aria-labelledby="request_quote" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered register-tab">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="d-flex justify-content-between align-items-center p-3 px-4 bg-light-gray">
                        <h3 class="m-0" >Book Event</h3>
                        <button type="button" class="close" id="modal_close_btn" data-dismiss="modal" aria-label="Close">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="p-3 px-4 pt-0">
                        <div class="request-quote-form">

                            <form
                            action="{{ route('couple.pay.store') }}"
                            method="POST"
                            class="hall_payment_form"
                            id="payment-form">
                                @csrf

                                <div class="form-group">
                                    <label for="" style="color: #00aeaf">Event</label>
                                    <input type="text" class="form-control" disabled id="ShowHallEvent" value="">
                                </div>

                                <div class="form-group">
                                    <label for="" style="color: #00aeaf">Price</label>
                                    <input type="text" class="form-control" disabled id="ShowHallPrice" value="">
                                </div>

                                <div class="form-group">
                                    <label for="" style="color: #00aeaf">Checkin Date</label>
                                    <input type="date" id="checkindate" class="form-control" name="checkin_date">
                                </div>

                                <div class="form-group">
                                    <label for="" style="color: #00aeaf">Checkout Date</label>
                                    <input type="date" id="checkoutdate" class="form-control" name="checkout_date">
                                </div>

                                <input type="hidden" name="hall_id" id="hallId" value="">
                                <input type="hidden" name="hall_title" id="hallTitle" value="">
                                <input type="hidden" name="hall_price" id="hallPrice" value="">
                                <input type="hidden" name="hall_event" id="hallEvents" value="">

                                <div id="card-element">
                                  <!-- Elements will create input elements here -->
                                </div>

                                <!-- We'll put the error messages in this element -->
                                <div id="card-errors" role="alert"></div>

                                <button type="submit" class="btn btn-primary mt-5 subscription_payment_btn">Buy</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Request Quote Modal -->

    <!-- All The JS Files
      ================================================== -->
        @extends('front_view.components.scripts')
</body>

<!-- Mirrored from wporganic.com/html/weddingdir/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:28:37 GMT -->
</html>
