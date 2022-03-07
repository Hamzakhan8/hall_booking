@extends('layouts.master')




@section('content')
@section('title','Hall')
        <div class="card-body">
            <form action="{{route('halltype.store')}} " method="POST" enctype="multipart/form-data">

                @csrf

                <select name="room_type_id" class="form-control">
                    <option value="0">--select--</option>
                    @foreach ($halltypes as $ht)
                    <option value="{{$ht->halltype->id}}">{{$ht->halltype->name}}</option>

                    @endforeach
                </select>
                <div class="form-group"  >
                  <label for="exampleInputEmail1">title</label>
                  <input type="text" name="name" class="form-control" >
                </div>

            </form>




        </div>
        <div class="modal-footer">
         <input type="submit" class="btn btn-warning">

        </div>

        @endsection
