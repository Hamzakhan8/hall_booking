@extends('layouts.master')




@section('content')
@section('title','myhall')



<div class="card-body">
    <form action="{{route('halltype.update',$data->id)}} " method="POST" enctype="multipart/form-data">

        @csrf
        @method('put')

        <div class="form-group"  >
          <label for="exampleInputEmail1">title</label>
          <input type="text" name="name" value="{{$data->name}}" class="form-control" >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">detail</label><br>

        <textarea name="detail"  cols="60" rows="10">{{$data->detail}}</textarea>
        </div>
        <input type="submit" class="btn btn-warning">

    </form>




</div>







</div>

@endsection

