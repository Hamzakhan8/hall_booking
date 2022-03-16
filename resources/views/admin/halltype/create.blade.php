@extends('layouts.master')




@section('content')
@section('title','Hall')
        <div class="card-body">
                <form action="{{route('halltype.store')}} " method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-group"  >
                  <label for="exampleInputEmail1">title</label>
                  <input type="text" name="name" class="form-control" >
                </div>
                <div class="form-group"  >
                    <label for="exampleInputEmail1">Prize</label>
                    <input type="text" name="prize" class="form-control" >
                  </div>
                <div class="form-group">


                    <textarea name="detail" placeholder="detail" cols="60" rows="10"></textarea>
                </div>
                <div class="form-group"  >
                    <label for="exampleInputEmail1">upload gallery</label>
                    <input type="file" multiple name="imgs[]" class="form-control" >
                  </div>





        </div>
        <div class="modal-footer">
         <input type="submit" class="btn btn-warning">

        </div>
    </form>
        </div>

        @endsection
