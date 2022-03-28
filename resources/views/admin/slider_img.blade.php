@extends('admin.dashboard')

@section('body-title')
    <h2>
        Slider Image
    </h2>
@endsection

@section('body-upper-content')
<div class="container">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="form mt-4">
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="imgs">
                            <img
                            style="cursor: pointer;"
                            src="{{ asset('assets/images/icons/icons8-image-64.png') }}"
                            alt="image">
                        </label>
                        <input type="file" max="3" multiple onchange="readURL(this)" accept="image/*" name="multi_img" class="form-control d-none" id="imgs">
                    </div>
                </form>
                <div id="show_img">
                    {{-- <img src="" id="show" alt="images"> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
