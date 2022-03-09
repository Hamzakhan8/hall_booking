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
                <div class="form-group">
                  <label for="exampleInputEmail1">detail</label>

                    <textarea name="detail"  cols="60" rows="10"></textarea>
                </div>





        </div>
        <div class="modal-footer">
         <input type="submit" class="btn btn-warning">

        </div>
    </form>
        </div>

        @endsection
