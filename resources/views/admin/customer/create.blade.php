@extends('layouts.master')




@section('content')
@section('title','Customer')

<div class="card-body">
    <form action="{{route('customer.store')}} " method="post" enctype="multipart/form-data">

        @csrf



        <div class="form-group"  >
          <label for="exampleInputEmail1">name</label>
          <input type="text" name="full_name" class="form-control" >
        </div>
        <div class="form-group"  >
            <label for="exampleInputEmail1">email</label>
            <input type="text" name="email" class="form-control" >
          </div>
          <div class="form-group"  >
            <label for="exampleInputEmail1">password</label>
            <input type="text" name="password" class="form-control" >
          </div>
          <div class="form-group"  >
            <label for="exampleInputEmail1">mobile</label>
            <input type="text" name="mobile" class="form-control" >
          </div>
          <div class="form-group"  >
            <label for="exampleInputEmail1">address</label>
            <input type="text" name="address" class="form-control" >
          </div>
        <div class="form-group"  >
            <label for="exampleInputEmail1">photo</label>
            <input type="file" name="photo" class="form-control" >
          </div>





</div>
<div class="modal-footer">
 <input type="submit" class="btn btn-warning">
</form>
</div>



 @endsection
