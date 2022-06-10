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

<!-- Mirrored from wporganic.com/html/weddingdir/search-result-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:28:47 GMT -->
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

    <!--  Search Result Header Start -->
    <section class="search-result-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <h1>Find the Perfect Hall Vendor</h1>
                    <p class="lead">Search over 360,000 Halls with reviews, pricing, availability and more</p>
                    <form action="{{ route('front.search.by_name') }}" method="POST">
                        @csrf
                        @if (Session::has('not found'))
                        <div class="alert alert-warning" role="alert">
                            <strong>{{ Session::get('not found') }}</strong>
                        </div>
                        @endif
                        <div class="input-group">
                            <input type="text" name="hall_name" class="form-control form-light" required placeholder="(E.g. Clifton Springs Weddings)">
                            <input type="text" name="hall_city" class="form-control form-light left-border" required placeholder="Where">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-default">Search Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('front.home') }}"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Halls</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--  Search Result Header End -->

    <main id="body-content">
        <section class="wide-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <aside class="row sidebar-widgets">
                            <!-- Sidebar Primary Start -->
                            <div class="sidebar-primary col-lg-12 col-md-6">

                                <!-- Widget Wrap -->
                                <div class="widget search-result-toggle">
                                    <a data-toggle="collapse" href="#categoriestypes" role="button" aria-expanded="false" class="link" aria-controls="categoriestypes">
                                        <h3 class="widget-title">Types of Categories <i class="fa fa-angle-up"></i></h3>
                                    </a>

                                    <div class="collapse show" id="categoriestypes">
                                        <div>
                                            <div class="inner">
                                                <p><a href="javascript:"><strong>All Categories</strong></a></p>


                                                <ul class="list-unstyled icons-listing mb-0 widget-listing arrow">
                                                    @if (isset($halls))
                                                        @foreach ($halls as $hall)
                                                        <li><a href="{{ route('front.search.by_category',[$hall->hallCategory->id,$hall->location]) }}" style="cursor: pointer">{{ $hall->hallCategory->category }}</a></li>
                                                        @endforeach

                                                        @elseif (isset($by_category))
                                                        @foreach ($by_category as $by_cat_hall)
                                                        <li><a href="{{ route('front.search.by_category',[$by_cat_hall->hallCategory->id,$by_cat_hall->location]) }}" style="cursor: pointer">{{ $by_cat_hall->hallCategory->category }}</a></li>
                                                        @endforeach

                                                        @elseif (isset($by_name))
                                                        @foreach ($by_name as $by_name_hall)
                                                        <li><a href="{{ route('front.search.by_category',[$by_name_hall->hallCategory->id,$by_name_hall->location]) }}" style="cursor: pointer">{{ $by_name_hall->hallCategory->category }}</a></li>
                                                        @endforeach

                                                        @elseif (isset($list_halls))
                                                        @foreach ($list_halls as $list_hall)
                                                        <li><a href="{{ route('front.search.by_category',[$list_hall->hallCategory->id,$list_hall->location]) }}" style="cursor: pointer">{{ $list_hall->hallCategory->category }}</a></li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->
                            </div>
                            <!-- Sidebar Primary End -->

                        </aside>
                    </div>
                    <div class="col-lg-8">
                        <div class="result-count">
                            @if (isset($halls))
                                <strong>{{ $halls->count() }} results:</strong>
                            @elseif (isset($by_category))
                                <strong>{{ $by_category->count() }} results:</strong>
                            @elseif (isset($by_name))
                            <strong>{{ $by_name->count() }} results:</strong>
                            @elseif (isset($list_halls))
                                <strong>{{ $list_halls->count() }} results:</strong>
                            @endif
                        </div>

                        <div class="tab-content theme-tabbing search-result-tabbing" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-listing" role="tabpanel" aria-labelledby="pills-listing-tab">
                                <!-- Search Result List -->
                                @if (isset($halls))
                                    @foreach ($halls as $hall)
                                        @php
                                            $image = json_decode($hall->images);
                                        @endphp
                                        <div class="result-list">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="img">
                                                        <a href="{{ route('front.search.details', $hall->id) }}">
                                                            <img src="{{ asset('storage/hall_img/'. $image[0]) }}" alt="" class="rounded">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div>
                                                        <div class="head">
                                                            <h3><a href="{{ route('front.search.details', $hall->id) }}">{{ $hall->title }}</a></h3>
                                                        </div>
                                                        <p>{{ $hall->description }}</p>
                                                        <div><i class="fa fa-map-marker"></i> {{ $hall->location }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @elseif (isset($by_category))
                                {{-- results by categories --}}
                                    @foreach ($by_category as $by_cat_halls)
                                        @php
                                            $image = json_decode($by_cat_halls->images);
                                        @endphp
                                        <div class="result-list">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="img">
                                                        <a href="{{ route('front.search.details', $by_cat_halls->id) }}">
                                                            <img src="{{ asset('storage/hall_img/'. $image[0]) }}" alt="" class="rounded">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div>
                                                        <div class="head">
                                                            <h3><a href="{{ route('front.search.details', $by_cat_halls->id) }}">{{ $by_cat_halls->title }}</a></h3>
                                                        </div>
                                                        <p>{{ $by_cat_halls->description }}</p>
                                                        <div><i class="fa fa-map-marker"></i> {{ $by_cat_halls->location }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @elseif (isset($by_name))
                                {{-- results by names and location --}}
                                    @foreach ($by_name as $by_name_halls)
                                        @php
                                            $image = json_decode($by_name_halls->images);
                                        @endphp
                                        <div class="result-list">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="img">
                                                        <a href="{{ route('front.search.details', $by_name_halls->id) }}">
                                                            <img src="{{ asset('storage/hall_img/'. $image[0]) }}" alt="" class="rounded">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div>
                                                        <div class="head">
                                                            <h3><a href="{{ route('front.search.details', $by_name_halls->id) }}">{{ $by_name_halls->title }}</a></h3>
                                                        </div>
                                                        <p>{{ $by_name_halls->description }}</p>
                                                        <div><i class="fa fa-map-marker"></i> {{ $by_name_halls->location }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @elseif (isset($list_halls))
                                    {{-- results by names and location --}}
                                    @foreach ($list_halls as $list_hall)
                                        @php
                                            $image = json_decode($list_hall->images);
                                        @endphp
                                        <div class="result-list">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="img">
                                                        <a href="{{ route('front.search.details', $list_hall->id) }}">
                                                            <img src="{{ asset('storage/hall_img/'. $image[0]) }}" alt="" class="rounded">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div>
                                                        <div class="head">
                                                            <h3><a href="{{ route('front.search.details', $list_hall->id) }}">{{ $list_hall->title }}</a></h3>
                                                        </div>
                                                        <p>{{ $list_hall->description }}</p>
                                                        <div><i class="fa fa-map-marker"></i> {{ $list_hall->location }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                <!-- Search Result List -->

                                <!-- Search Result Pagination -->
                                @if (isset($halls))
                                    {{ $halls->links() }}

                                @elseif (isset($by_category))
                                    {{ $by_category->links() }}

                                @elseif (isset($by_name))
                                    {{ $by_name->links() }}

                                @elseif (isset($list_halls))
                                    {{ $list_halls->links() }}
                                @endif
                                <!-- Post Pagination -->
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </main>

    @extends('front_view.components.footer')
    <!-- Back to Top
    ================================================== -->
    <a id="back-to-top" href="javascript:" class="btn btn-outline-primary back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- All The JS Files
      ================================================== -->
      @extends('front_view.components.scripts')

</body>

<!-- Mirrored from wporganic.com/html/weddingdir/search-result-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:28:47 GMT -->
</html>
