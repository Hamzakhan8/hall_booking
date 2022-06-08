@extends('admin.dashboard')
@section('body-upper-content')
@section('body-title')
<div class="d-flex justify-content-between">
    <h2>Footer info</h2>
</div>
@endsection
<div class="card-shadow">
    <div class="card-shadow-body p-4">
        <form action="{{ route('admin.footer.store') }}" method="POST">
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
                    <label for="about_location">Location</label>
                    <input type="text" name="location" id="about_location" class="form-control" placeholder="City name">
                </div>
                <div class="form-group">
                    <label for="callnumber">Phone Number</label>
                    <input type="number" name="phone_number" id="callnumber" class="form-control" placeholder="Write number">
                </div>
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Write email">
                </div>
                <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <input type="text" name="short_desc" id="short_description" class="form-control" placeholder="Write a short description">
                </div>
                <div class="form-group">
                    <label for="">Social Links</label>
                    <div class="links d-flex">
                      <input type="url" class="form-control m-2" name="facebook" value="https://facebook.com/" id="" aria-describedby="helpId" placeholder="facebook.com">
                      <input type="url" class="form-control m-2" name="twitter" value="https://twitter.com/" id="" aria-describedby="helpId" placeholder="twitter.com">
                      <input type="url" class="form-control m-2" name="instagram" value="https://instagram.com/" id="" aria-describedby="helpId" placeholder="instagram.com">
                      <input type="url" class="form-control m-2" name="linkedin" value="https://linkedin.com/" id="" aria-describedby="helpId" placeholder="linkedin.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="copy_right">CopyRights</label>
                    <input type="text" name="copyRight" id="copy_right" class="form-control" placeholder="Write copy right info" aria-describedby="helpId">
                </div>
            <button type="submit" class="btn btn-primary mt-4">Save changes</button>
        </form>
    </div>
    <div class="card-shadow-body p-4">
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Location</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Short Description</th>
                    <th>Social Links</th>
                    <th>Copy Rights</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($footer as $data)
                        <tr>
                            <td scope="row">{{ $data->location }}</td>
                            <td scope="row">{{ $data->phone_number }}</td>
                            <td scope="row">{{ $data->email }}</td>
                            <td scope="row">{{ $data->short_description }}</td>
                            <td scope="row">
                                @foreach ($data->social_links as $name => $links)
                                <span>
                                    {{ $name }}: {{ $links }}
                                </span>
                                @endforeach
                            </td>
                            <td scope="row">{{ $data->copyRight }}</td>
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
                                        <form action="{{ route('admin.footer.update', $data->id) }}" method="POST">
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
                                                <label for="about_location">Location</label>
                                                <input type="text" name="location" id="about_location" value="{{ $data->location }}" class="form-control" placeholder="City name">
                                            </div>
                                            <div class="form-group">
                                                <label for="callnumber">Phone Number</label>
                                                <input type="number" name="phone_number" id="callnumber" value="{{ $data->phone_number }}" class="form-control" placeholder="Write number">
                                            </div>
                                                <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" id="email" value="{{ $data->email }}" class="form-control" placeholder="Write email">
                                            </div>
                                            <div class="form-group">
                                                <label for="short_description">Short Description</label>
                                                <input type="text" name="short_desc" id="short_description" value="{{ $data->short_description }}" class="form-control" placeholder="Write a short description">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Social Links</label>
                                                <div class="links d-flex">
                                                    @foreach ($data->social_links as $names => $links)
                                                    <input type="url" class="form-control m-2" name="{{ $names }}" value="{{ $links }}" id="" aria-describedby="helpId" placeholder="{{ $names }}.com">
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="copy_right">CopyRights</label>
                                              <input type="text" name="copyRight" id="copy_right" class="form-control" placeholder="Write copy right info" aria-describedby="helpId">
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

