@extends('hall.dashboard')
@section('body-upper-content')
@section('body-title')
<div class="d-flex justify-content-between">
    <h2>Category</h2>

    <a href="{{ route('hall.halls.create') }}"
    class="btn btn-sm btn-warning">
        Add Hall
    </a>
</div>
@endsection
<div class="card-shadow">
    <div class="card-shadow-body p-0">
        <div class="table-responsive">
            <table id="myTable" class="table table-bordered table-hover mb-0">
                @if (Session::has('created'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ Session::get('created') }}</strong>
                    </div>
                    @elseif (Session::has('deleted'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ Session::get('deleted') }}</strong>
                    </div>
                    @elseif (Session::has('updated'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ Session::get('updated') }}</strong>
                    </div>
                @endif
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Images</th>
                        <th scope="col">Description</th>
                        <th scope="col">Location</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($halls as $hall)
                    @php
                        $hall_id = $hall->id;
                    @endphp


                    <tr>
                        <td>{{$hall->title}}</td>
                        @foreach ($categories as $category)
                            @if ($category->id === $hall->halls_category_id)
                                <td>{{ $category->category }}</td>
                            @endif
                        @endforeach

                        @if (empty($hall->images))
                            <td>
                                <img src="{{asset('assets/images/about/team/team_img_1.jpg')}}" style="width:50px;height:50px;"><br/>
                            </td>
                            @elseif (!empty($hall->images))
                            <td>
                                @foreach(json_decode($hall->images) as $image)

                                <img src="{{asset('storage/hall_img/'.$image)}}" style="width:50px;height:50px;"><br/>

                                @endforeach
                            </td>
                        @endif

                        <td><p>{{$hall->description}}</p></td>
                        <td><p>{{$hall->location}}</p></td>
                        <td><p>{{$hall->address}}</p></td>
                        <td class="rounded-sm">
                            <a href="{{ route('hall.halls.destroy', $hall['id']) }}" class="action-links">
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
                            <span>
                                <a href="{{ route('hall.halls.edit', $hall['id']) }}"
                                 style="color:#ff0000;cursor: pointer;"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Edit"
                                >
                                <i class="fa fa-edit"></i>
                                </a>
                            </span>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <!-- Add Hall Modal -->
        <div class="modal fade" id="HallModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Hall Information</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('hall.halls.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="" class=""> Add Images</label>
                                <input  class="form-control" type="file" name="images[]" multiple>
                            </div>
                            <div class="form-group">
                                <div class="dropdown">
                                    <input class="form-control dropdown-toggle select_input" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Select Category">
                                    <input type="hidden" class="category_input" name="category_id" value="">
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @foreach ($categories as $category)
                                            <option class="dropdown-item select_input_option"
                                                value="{{ $category['id'] }}"
                                                data-category="{{ $category['category'] }}">
                                                {{ $category['category'] }}
                                            </option>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  name="title" placeholder="Hall title">
                            </div>
                            <div class="form-group">
                                <textarea name="description" class="form-control" placeholder="Write description"></textarea>
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

        <!-- Edit Hall Modal -->
        <div class="modal fade" id="editHallModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Hall Information</h5>
                </div>
                <div class="modal-body">
                    <form class="hallUpdateForm" action="{{ route('hall.halls.update', ':id') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="" class="">Add Images</label>
                            <input  class="form-control" id="edit_hall_image" type="file" value="" name="images[]" multiple>
                        </div>
                        <div class="form-group">
                            <div class="dropdown">
                                <input class="form-control dropdown-toggle select_input" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Select Category">
                                <input type="hidden" class="category_input" id="edit_hall_category_id" name="category_id" value="">
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @foreach ($categories as $category)
                                        <option class="dropdown-item select_input_option"
                                            value="{{ $category['id'] }}"
                                            data-category="{{ $category['category'] }}">
                                            {{ $category['category'] }}
                                        </option>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="edit_hall_title" name="title" value="" placeholder="Hall title">
                        </div>
                        <div class="form-group">
                            <input name="description" id="edit_hall_description" class="form-control" value="" placeholder="Write description">
                        </div>

                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary Update_close_btn" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
{{ $halls->links() }}
@endsection

