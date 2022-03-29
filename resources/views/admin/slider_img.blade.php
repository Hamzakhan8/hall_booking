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
                <form id="multi_img_form" action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="imgs">
                            <img
                            style="cursor: pointer;"
                            src="{{ asset('assets/images/icons/icons8-image-64.png') }}"
                            alt="image">
                        </label>
                        <input type="file" multiple onchange="readURL(this)" required name="multi_img[]" class="form-control d-none" id="imgs">
                    </div>
                    <div id="show_img" class="border">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success d-block" name="submit" value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
