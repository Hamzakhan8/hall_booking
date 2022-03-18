@extends('layouts.master')




@section('content')
@section('title','Booking')










<div class="card-shadow-body">
    <form action="{{route('booking.update',$data->id)}} " method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="custom-file-wrap">
                        <div class="custom-file-holder">
                            <i class="fa fa-picture-o"></i>
                            <div class="custom-file">
                                <input type="file" name="photo" value="{{$data->photo}}" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01"><i class="fa fa-pencil"></i></label>
                            </div>
                        </div>
                        <div class="custom-file-text">
                            <div class="head">Upload Profile Image</div>
                            <div>Files must be less than <strong>4mb</strong>, allowed files types are <strong>png/jpg</strong>.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-dark"  value="{{$data->full_name}}" name="full_name" placeholder="Full Name">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <input type="email" class="form-control form-dark" value="{{$data->email}}" name="email" placeholder="couple@gmail.com" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="password" class="form-control form-dark" value="{{$data->password}}" name="password" placeholder="password" >
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-dark" value="{{$data->mobile}}" name="mobile" placeholder="Contact Number">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control form-dark"  value="{{$data->address}}" name="address" placeholder="Address">
                </div>
            </div>



            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-rounded">save</button>
            </div>
</div>

@endsection

