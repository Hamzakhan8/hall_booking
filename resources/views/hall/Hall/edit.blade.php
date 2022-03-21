@extends('layouts.master')




@section('content')
@section('title','Hall')



<div class="card-body">
    <form action="{{route('hall.update',$data->id)}} " method="POST" enctype="multipart/form-data">

        @csrf
        @method('put')

        <select name="hall_types_id" class="form-control">
            <option value="0">--select--</option>
            @foreach ($halltypes as $ht)
            <option @if ($data->room_types_id==$ht->id) selected

            @endif value="{{$ht->id}}">{{$ht->name}}</option>

            @endforeach
        </select>
        <div class="form-group"  >
          <label for="exampleInputEmail1">title</label>
          <input type="text" name="title" value="{{$data->title}}" class="form-control" >
        </div>
        <input type="submit" value="update" class="btn btn-warning">

    </form>




</div>







</div>

@endsection

