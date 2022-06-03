@extends('admin.dashboard')
@section('body-upper-content')
@section('body-title')
<div class="d-flex justify-content-between">
    <h2>About Us</h2>
</div>
@endsection
<div class="card-shadow">
    <div class="card-shadow-body p-4">
        <form action="{{ route('admin.about.store') }}" method="POST">
            @csrf
                @if ($errors && (is_array($errors) || $errors->all()))
                <div class="alert alert-danger" role="alert">
                    <strong class="text-danger">Errors encounteded!</strong>
                    <br>
                    <ul>
                        @foreach ((is_array($errors) ? $errors : $errors->all()) as $error)
                        <li>
                            <strong>{{ $error }}</strong>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Write About Your Website</label>
              <textarea class="form-control" id="editor" name="about_us"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Save changes</button>
        </form>
    </div>
    <div class="card-shadow-body p-4">
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>About</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($about as $data)
                        <tr>
                            <td scope="row">{{ strip_tags($data->about) }}</td>
                            <td class="d-flex justify-content-around align-items-center action_icons">
                                <a  data-target="#aboutModal"
                                    data-toggle="modal">
                                    <i class="fa fa-edit text-primary" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>

                        <!-- About Modal -->
                        <div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit About</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.about.update', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                                @if ($errors && (is_array($errors) || $errors->all()))
                                                <div class="alert alert-danger" role="alert">
                                                    <strong class="text-danger">Errors encounteded!</strong>
                                                    <br>
                                                    <ul>
                                                        @foreach ((is_array($errors) ? $errors : $errors->all()) as $error)
                                                        <li>
                                                            <strong>{{ $error }}</strong>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                    @elseif (Session::has('created'))
                                                    <div class="alert alert-success" role="alert">
                                                        <strong>{{ Session::get('created') }}</strong>
                                                    </div>
                                                    @elseif (Session::has('updated'))
                                                    <div class="alert alert-success" role="alert">
                                                        <strong>{{ Session::get('updated') }}</strong>
                                                    </div>
                                                @endif
                                            <div class="form-group">
                                              <label for="exampleFormControlTextarea1">Write About Your Website</label>
                                              <textarea class="form-control" id="editor2" name="about_us" rows="10">{{ $data->about }}</textarea>
                                            </div>
                                            <div class="form-group d-flex justify-content-between align-content-center">
                                            <button type="submit" class="btn btn-primary mt-4">Save changes</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>
@endsection

