@extends('hall.dashboard')




@section('body-upper-content')
@section('body-title','HallType')

<a href="{{'halltype.create'}}"  class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
    add hall Type
</a>
<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table id="myTable" class="table table-bordered table-hover mb-0">
                @if (Session::has('success'))
                <p class="alert alert-success">{{session('success')}}</p>

                @endif
                @if (Session::has('massage'))
                <p class="alert alert-danger">{{session('massage')}}</p>

                @endif

                <thead class="">
                    <tr>


                        <th scope="col">ID</th>

                        <th scope="col">name</th>
                        <th scope="col">prize</th>
                        <th scope="col">IMAGES</th>


                        <th scope="col">delete</th>
                        <th scope="col">edit</th>



                    </tr>
                </thead>
                <tbody>



                    @foreach ($data as $halltype)


                    <tr>
                        <td>{{$halltype->id}}</td>

                        <td>{{$halltype->name}}</td>
                        <td>{{$halltype->prize}}</td>
                        <td>{{count($halltype->halltypeimage)}}</td>



                        <td class="rounded-sm">

                            <form method="post" action="{{ route('halltype.destroy', $halltype->id) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>

                            </form>

                        </td>
                        <td> <a href="{{route('halltype.edit',$halltype->id)}}" class="action-links" ><i class="fa fa-edit"></i></a></td>



                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add HallType</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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


                    <textarea name="detail" id="mysummernote" placeholder="detail" cols="55" rows="10"></textarea>
                </div>
                <div class="form-group"  >
                    <label for="exampleInputEmail1">upload gallery</label>
                    <input type="file" multiple name="imgs[]" class="form-control" >
                  </div>






        <div class="modal-footer">

        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-warning">

        </div>
    </form>
        </div>
      </div>
    </div>
  </div>

@endsection

