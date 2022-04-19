@extends('hall.dashboard')




@section('body-upper-content')
@section('title','Hall Category')










<div class="card-shadow-body">
    <form action="{{route('Halls.store')}} " method="post" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="" class=""> Add Images</label>
                    <input  class="bg-warning  text-white " type="file" name="images[]" multiple>
                </div>
            </div>

            <div class="col-md-12 ">
                <div class="form-group">
                    <select name="halls_category_id" class="col-md-11">
                        <option value="0">--Select Hall Category--</option>
                        @foreach ($hallcategory as $categoryitem)

                        <option value="{{$categoryitem->id}}">{{$categoryitem->category}}</option>


                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control form-dark "   name="title" placeholder="title">
                </div>
            </div>



            <div class="col-md-12">
                <div class="form-group">
                    <textarea name="description" class="col-md-12" >this is description </textarea>
                </div>
            </div>



            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-rounded">save</button>
            </div>
    </form>
</div>

@endsection

