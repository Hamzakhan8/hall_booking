@extends('layouts.master')




@section('content')
@section('title','Hall')
        <div class="card-body">
            <form action="{{route('hall.store')}} " method="POST" enctype="multipart/form-data">

                @csrf

                <select name="hall_types_id" class="form-control">
                    <option value="0">--select--</option>
                    @foreach ($halltypes as $ht)
                    <option value="{{$ht->id}}">{{$ht->name}}</option>

                    @endforeach
                </select>
                <div class="form-group"  >
                  <label for="exampleInputEmail1">title</label>
                  <input type="text" name="title" class="form-control" >
                </div>






        </div>
        <div class="modal-footer">
         <input type="submit" class="btn btn-warning">
        </form>
        </div>

        @endsection
