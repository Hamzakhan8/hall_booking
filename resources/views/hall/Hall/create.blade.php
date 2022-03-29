@extends('hall.dashboard')




@section('body-upper-content')
@section('body-title','Hall')
        <div class="card-body">
         <form action="{{route('hall.store')}} " method="post" enctype="multipart/form-data">

                @csrf


                <div class="form-group"  >
                  <label for="exampleInputEmail1">Category</label>
                  <input type="text" name="category" class="form-control" >
                </div>






           </div>
           <div class="modal-footer">
           <input type="submit" class="btn btn-warning">
         </form>
        </div>

        @endsection
