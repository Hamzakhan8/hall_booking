@extends('layouts.master')




@section('content')
@section('title','myhall')



<div class="card-body`">
    <form action="{{route('halltype.update',$data->id)}} " method="POST" enctype="multipart/form-data">

        @csrf
        @method('put')

        <div class="form-group"  >
          <label for="exampleInputEmail1">title</label>
          <input type="text" name="name" value="{{$data->name}}" class="form-control" >
        </div>

        <div class="form-group"  >
            <label for="exampleInputEmail1">Prize</label>
            <input type="text" name="prize" value="{{$data->prize}}" class="form-control" >
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">detail</label><br>

        <textarea name="detail"  cols="60" rows="10">{{$data->detail}}</textarea>
        </div>
        <div class="form-group">
            <h3>hall type images</h3>
            <table class="table table-bordered">
                <tr>
                    <input type="file" multiple name="imgs[]" />

                    @foreach($data->halltypeimage as $img)
                    <td class= "imgcol{{$img->id}}" >
                    <img width="150px" src="{{Storage::url($img->scr_image)  }}" >
                    <p class="mt-2">
                    <button type="button" onclick="return confirm('Are you sure you want to delete this image??')" class="btn btn-danger btn-sm delete-image" data-image-id="{{$img->id}}"><i class="fa fa-trash"></i></button>
                    </p>
                     </td>
                    @endforeach
                </tr>
    </table>


        <input type="submit" class="btn btn-warning">

    </form>




</div>









</div>

@endsection

