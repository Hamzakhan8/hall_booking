<div class="modal" id="exampleModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">add hall</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('hall.store')}} " method="POST" enctype="multipart/form-data">

                @csrf

                <select name="hall_types_id" class="form-control form-control-sm">

                    <option value="0">-----select------</option>
                    @foreach ($data as $halltype_id)

                    <option value="{{ $data->halltype_id->id}}">{{ $data->halltype_id->name}}</option>




                </select>


                <div class="form-group"  >
                  <label for="exampleInputEmail1">{{$data->title}}</label>
                  <input type="text" name="title" class="form-control" >
                </div>

                @endforeach




        </div>
        <div class="modal-footer">
         <input type="submit" class="btn btn-warning">

        </div>
    </form>
      </div>
    </div>
  </div>
