@extends('hall.dashboard')
@section('body-upper-content')
@section('body-title')
<div class="d-flex justify-content-between">
    <h2>Category</h2>

    <button
    class="btn btn-sm btn-warning"
    data-toggle="modal"
    data-target="#HallModel">
        Add Hall
    </button>
</div>
@endsection
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

                        <th scope="col">title</th>
                        <th scope="col">images</th>
                        <th scope="col">description</th>

                        <th scope="col">delete</th>

                        <th scope="col">edit</th>



                    </tr>
                </thead>
                <tbody>

                    @foreach ($halls as $hall)


                    <tr>
                        <td>{{$hall->id}}</td>

                        <td>{{$hall->title}}</td>

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
                        {{-- <td class="rounded-sm">

                            <form method="post" action="{{ route('Halls.destroy', $hall->id) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                            </form>

                        </td>
                        <td> <a href="{{route('Halls.edit',$hall->id)}}" class="action-links btn btn-primary btn-sm" >Edit</a></td>

 --}}

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <!-- Add Hall Category Modal -->
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
    </div>
</div>



@endsection

