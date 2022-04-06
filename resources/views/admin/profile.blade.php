@php
    $profile = Auth::user()->profile;
@endphp
@extends('admin.dashboard')

@section('body-title')
    <h2>Admin Profile</h2>
@endsection

@section('body-upper-content')
    <div class="row">
        <!-- Profile Tabbing Start -->
        <div class="col-12 col-lg-3">
            <div class="nav flex-column nav-pills theme-tabbing-vertical" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-general" role="tab"
                    aria-controls="v-pills-general" aria-selected="true">Edit Profile</a>
                <a class="nav-link" id="v-pills-groom-tab" data-toggle="pill" href="#v-pills-groom" role="tab"
                    aria-controls="v-pills-groom" aria-selected="false">Password Change
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    <div class="card-shadow">
                        <div class="card-shadow-header">
                            <div class="head-simple">
                                Edit Profile
                            </div>
                        </div>

                        <div class="card-shadow-body">
                            @if (!empty($profile))
                                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="custom-file-wrap">
                                                    <div class="custom-file-holder">
                                                        <div class="avatar_profile" id="show_avatar">
                                                            <img src='{{ asset('assets/images/about/team/team_img_1.jpg') }}' class='p-2 rounded-circle' id="default_avatar" style='width:130px;height:120px;' alt='images'>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="avatar" value="{{ Auth::user()->profile->avatar }}" onchange="readAvatar(this)" id="inputGroupFile01" aria-describedby="inputGroupFile01">
                                                            <label class="custom-file-label" for="inputGroupFile01"><i class="fa fa-pencil"></i></label>
                                                        </div>
                                                    </div>
                                                    <div class="custom-file-text">
                                                        <div class="head">Upload Profile Image</div>
                                                        <div>Files must be less than <strong>4mb</strong>, allowed files types are <strong>png/jpg</strong>.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-dark" value="{{ Auth::user()->name }}" name="name" placeholder="Name">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-dark" value="{{ Auth::user()->email }}" placeholder="couple@gmail.com" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="number" class="form-control form-dark" value="{{ Auth::user()->profile->contact }}" name="contact_number" placeholder="Contact Number">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-dark" value="{{ Auth::user()->profile->address }}" name="address" placeholder="Address">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control form-dark" value="{{ Auth::user()->profile->description }}" name="description" placeholder="Write description"
                                                >
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-rounded">Update Profile</button>
                                        </div>
                                    </div>
                                </form>

                            @elseif (empty($profile))
                            <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-file-wrap">
                                                <div class="custom-file-holder">
                                                    <div class="avatar_profile" id="show_avatar">
                                                        <img src='{{ asset('assets/images/about/team/team_img_1.jpg') }}' class='p-2 rounded-circle' id="default_avatar" style='width:130px;height:120px;' alt='images'>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" required class="custom-file-input" name="avatar" onchange="readAvatar(this)" id="inputGroupFile01" aria-describedby="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01"><i class="fa fa-pencil"></i></label>
                                                    </div>
                                                </div>
                                                <div class="custom-file-text">
                                                    <div class="head">Upload Profile Image</div>
                                                    <div>Files must be less than <strong>4mb</strong>, allowed files types are <strong>png/jpg</strong>.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" required class="form-control form-dark" value="{{ Auth::user()->name }}" name="name" placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="email" required class="form-control form-dark" placeholder="couple@gmail.com" disabled>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="number" required class="form-control form-dark" name="contact_number" placeholder="Contact Number">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" required class="form-control form-dark" name="address" placeholder="Address">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control form-dark" required name="description" placeholder="Write description"
                                            >
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-rounded">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-groom" role="tabpanel" aria-labelledby="v-pills-groom-tab">
                    <div class="card-shadow">
                        <div class="card-shadow-header">
                            <div class="head-simple">
                                Password Change
                            </div>
                        </div>
                        <div class="card-shadow-body">
                            <form action="{{ route('admin.password.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="password-eye">
                                                <input id="Old_Password" type="password" class="form-control" name="old_password" placeholder="Old Password">
                                                <span data-toggle="#Old_Password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="password-eye">
                                                <input id="New_Password" type="password" class="form-control" name="new_password" placeholder="New Password">
                                                <span data-toggle="#New_Password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="password-eye">
                                                <input id="Confirm_Password" type="password" class="form-control" name="new_password_confirmation" placeholder="Confirm Password">
                                                <span data-toggle="#Confirm_Password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-rounded">Change Password</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile Tabbing End -->
    </div>
@endsection
