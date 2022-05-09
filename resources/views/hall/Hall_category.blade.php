@extends('hall.dashboard')

@section('body-upper-content')

@section('body-title')
<div class="d-flex justify-content-between">
    <h2>Category</h2>

    <button
    class="btn btn-sm btn-warning"
    data-toggle="modal"
    data-target="#exampleModal">
        add hall category
    </button>
</div>
@endsection

<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table id="myTable" class="table table-bordered table-hover mb-0">
                @if (Session::has('deleted'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ Session::get('deleted') }}</strong>
                    </div>
                    @elseif (Session::has('updated'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ Session::get('updated') }}</strong>
                    </div>
                    @elseif (Session::has('added'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ Session::get('added') }}</strong>
                    </div>
                @endif
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    @php
                        $category_id = $category['id'];
                    @endphp
                    <tr>
                        <td>{{$category['category']}}</td>
                        <td class="rounded-sm">
                            <a href="{{ route('hall.category.destroy', $category['id']) }}" class="action-links">
                                <lord-icon
                                src="https://cdn.lordicon.com/qsloqzpf.json"
                                trigger="loop"
                                colors="primary:#121331"
                                state="hover-empty"
                                style="width:25px;height:25px"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Delete">
                                </lord-icon>
                            </a> |
                            <a style="color:#ff0000;cursor: pointer;"
                            data-id="{{ $category['id'] }}"
                            data-name="{{ $category['category'] }}"
                            data-toggle="tooltip"
                            data-placement="top"
                            title="Edit"
                            class="myModalBtn">
                            <i class="fa fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Category Edit Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    </div>
                    <div class="modal-body">
                        <form class="myModalForm UpdateHallCategoryForm" action="{{ route('hall.category.update', ':id') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <input type="text" class="form-control" id="contact_username" name="category">
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="contact_id" name="category_id">
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary Update_close_btn" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
          <!-- Add Hall Category Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Hall Category</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('hall.category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="category">Add Category</label>
                          <input type="text" name="category" class="form-control" placeholder="Add category" aria-describedby="helpId">
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

