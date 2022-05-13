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
                @if (Session::has('created'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ Session::get('created') }}</strong>
                    </div>
                @endif
                <form id="multi_img_form" action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="imgs">
                            <lord-icon
                                src="https://cdn.lordicon.com/qfbuijil.json"
                                id="lord_img_icon"
                                style="width:250px;height:250px;">
                            </lord-icon>
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
                <table class="table">
                    @if (Session::has('deleted'))
                        <div class="alert alert-success" role="alert">
                            <strong>{{ Session::get('deleted') }}</strong>
                        </div>
                        @elseif (Session::has('updated'))
                        <div class="alert alert-success" role="alert">
                            <strong>{{ Session::get('updated') }}</strong>
                        </div>
                    @endif
                    <thead>
                        <tr>
                            <th>Slider Images</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($slider_imgs as $slider)
                            <tr>
                                <td scope="row">
                                    <div class="slide_imgs d-flex">
                                        @foreach (json_decode($slider->slider_imgs) as $imgs)
                                                <img src="{{asset('storage/slider_imgs/'.$imgs)}}" class="rounded-circle p-2" width="70" height="70"><br/>
                                        @endforeach
                                    </div>
                                </td>
                                <td>{{ $slider->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.slider.delete', $slider->id) }}">
                                        <lord-icon
                                        src="https://cdn.lordicon.com/qsloqzpf.json"
                                        trigger="loop"
                                        colors="primary:#121331"
                                        state="hover-empty"
                                        style="width:25px;height:25px"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Delete">
                                        </lord-icon>
                                    </a> |
                                    <span
                                    data-toggle="modal" data-target="#adminSliderModal"
                                    >
                                        <a
                                            style="color:#ff0000;cursor: pointer;"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title="Edit"
                                        >
                                            <i class="fa fa-edit"></i>
                                       </a>
                                    </span>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="adminSliderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content text-capitalize">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">update images</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.slider.update', $slider->id) }}"
                                            method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                            <label for="slider_imgs">upload images</label>
                                            <div class="slide_imgs d-flex">
                                                @foreach (json_decode($slider->slider_imgs) as $imgs)
                                                        <img src="{{asset('storage/slider_imgs/'.$imgs)}}" class="rounded-circle p-2" width="70" height="70"><br/>
                                                @endforeach
                                            </div>
                                            <input type="file" multiple name="multi_img[]" id="slider_imgs" class="form-control border-0" aria-describedby="helpId">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
