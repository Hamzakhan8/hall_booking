@extends('layouts.master')




@section('content')
@section('title','Customer')



<div class="card-shadow-body">
    <form action="{{route('customer.store')}} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="custom-file-wrap">
                        <div class="custom-file-holder">
                            <i class="fa fa-picture-o"></i>
                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFile01">
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
                    <input type="text" class="form-control form-dark" name="full_name" placeholder="Full Name">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <input type="email" class="form-control form-dark" name="email" placeholder="couple@gmail.com" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="password" class="form-control form-dark" name="password" placeholder="password" >
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control form-dark" name="mobile" placeholder="Contact Number">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control form-dark" name="address" placeholder="Address">
                </div>
            </div>



            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-rounded">save</button>
            </div>
</div>
 @endsection
