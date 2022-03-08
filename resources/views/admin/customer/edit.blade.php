@extends('layouts.master')




@section('content')
@section('title','customer')



<div class="card-body">
    <form action="{{route('customer.update',$data->id)}} " method="POST" enctype="multipart/form-data">

        @csrf
        @method('put')


        <div class="form-group"  >
            <label for="exampleInputEmail1">name</label>
            <input type="text" value="{{$data->full_name}}" name="full_name" class="form-control" >
          </div>
          <div class="form-group"  >
              <label for="exampleInputEmail1">email</label>
              <input type="text" value="{{$data->email}}" name="email" class="form-control" >
            </div>
            <div class="form-group"  >
              <label for="exampleInputEmail1">password</label>
              <input type="text" value="{{$data->password}}" name="password" class="form-control" >
            </div>
            <div class="form-group"  >
              <label for="exampleInputEmail1">mobile</label>
              <input type="text" value="{{$data->mobile}}" name="mobile" class="form-control" >
            </div>
            <div class="form-group"  >
              <label for="exampleInputEmail1">address</label>
              <input type="text" value="{{$data->address}}" name="address" class="form-control" >
            </div>
            <div class="form-group"  >
                <label for="exampleInputEmail1">address</label>
                <input type="file" value="{{$data->address}}" name="photo" class="form-control" >
              </div>
          <div class="form-group"  >
            <input type="submit" value="update" class="btn btn-warning">
          </div>
    </form>




</div>







</div>

@endsection

