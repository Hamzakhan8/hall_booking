@extends('admin.dashboard')

@section('body-title')
    <h2>Hall Profile</h2>
@endsection

@section('body-upper-content')
    <div class="row">
        <!-- Profile Tabbing Start -->
        <div class="col-12 col-lg-3">
            <div class="nav flex-column nav-pills theme-tabbing-vertical" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-general" role="tab"
                    aria-controls="v-pills-general" aria-selected="true">Edit Profile</a>
                <!-- <a class="nav-link" id="v-pills-vendor-tab" data-toggle="pill" href="#v-pills-vendor" role="tab"
                    aria-controls="v-pills-vendor" aria-selected="false">Hall Information</a> -->
                <a class="nav-link" id="v-pills-groom-tab" data-toggle="pill" href="#v-pills-groom" role="tab"
                    aria-controls="v-pills-groom" aria-selected="false">Password Change
                </a>
                <!-- <a class="nav-link" id="v-pills-pricing-tab" data-toggle="pill" href="#v-pills-pricing" role="tab"
                    aria-controls="v-pills-pricing" aria-selected="false">Social Media</a> -->
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
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="custom-file-wrap">
                                                <div class="custom-file-holder">
                                                    <i class="fa fa-picture-o"></i>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFile01">
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
                                            <input type="text" class="form-control form-dark" name="Name" placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-dark" name="Name" placeholder="couple@gmail.com" disabled>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-dark" name="Contact_Number" placeholder="Contact Number">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-dark" name="Address" placeholder="Address">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control form-dark" placeholder="Descriptions" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary btn-rounded">Update Profile</button>
                                    </div>





                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane fade" id="v-pills-vendor" role="tabpanel" aria-labelledby="v-pills-vendor-tab">
                    <div class="card-shadow">
                        <div class="card-shadow-header">
                            <div class="head-simple">
                                Wedding Information
                            </div>
                        </div>

                        <div class="card-shadow-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="custom-file-wrap w-100">
                                                <div class="custom-file-holder">
                                                    <i class="fa fa-picture-o"></i>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile011" aria-describedby="inputGroupFile011">
                                                        <label class="custom-file-label" for="inputGroupFile011"><i class="fa fa-pencil"></i></label>
                                                    </div>
                                                </div>
                                                <div class="custom-file-text">
                                                    <div class="head">Upload Profile Image</div>
                                                    <div>Files must be less than <strong>4mb</strong>, allowed files types are <strong>png/jpg</strong>.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="custom-file-wrap w-100">
                                                <div class="custom-file-holder">
                                                    <i class="fa fa-picture-o"></i>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile02" aria-describedby="inputGroupFile02">
                                                        <label class="custom-file-label" for="inputGroupFile02"><i class="fa fa-pencil"></i></label>
                                                    </div>
                                                </div>
                                                <div class="custom-file-text">
                                                    <div class="head">Upload Profile Image</div>
                                                    <div>Files must be less than <strong>4mb</strong>, allowed files types are <strong>png/jpg</strong>.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control datepicker"  name="Wedding_Date" placeholder="Select Wedding Date">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="Wedding_Address" placeholder="Wedding Address">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="Bride_First_Name" placeholder="Bride First Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="Bride_Last_Name" placeholder="Bride Last Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="Groom_First_Name" placeholder="Groom First Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="Groom_Last_Name" placeholder="Groom Last Name">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary btn-rounded">Update Wedding Information</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
                <div class="tab-pane fade" id="v-pills-groom" role="tabpanel" aria-labelledby="v-pills-groom-tab">
                    <div class="card-shadow">
                        <div class="card-shadow-header">
                            <div class="head-simple">
                                Password Change
                            </div>
                        </div>
                        <div class="card-shadow-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="password-eye">
                                                <input id="Old_Password" type="password" class="form-control" name="Old Password" placeholder="Old Password">
                                                <span data-toggle="#Old_Password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="password-eye">
                                                <input id="New_Password" type="password" class="form-control" name="New_Password" placeholder="New Password">
                                                <span data-toggle="#New_Password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="password-eye">
                                                <input id="Confirm_Password" type="password" class="form-control" name="Confirm_Password" placeholder="Confirm Password">
                                                <span data-toggle="#Confirm_Password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary btn-rounded">Change Password</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane fade" id="v-pills-pricing" role="tabpanel" aria-labelledby="v-pills-pricing-tab">
                    <div class="card-shadow">
                        <div class="card-shadow-header">
                            <div class="head-simple">
                                Social Media
                            </div>
                        </div>
                        <div class="card-shadow-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-dark" name="Facebook" placeholder="Facebook">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-dark" name="Twitter" placeholder="Twitter">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-dark" name="Instagram" placeholder="Instagram">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-dark" name="Youtube" placeholder="Youtube">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary btn-rounded">Update Social Profile</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Profile Tabbing End -->
    </div>
@endsection
