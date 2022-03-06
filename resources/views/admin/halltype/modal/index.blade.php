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
    </div>
  </div>
