<!DOCTYPE html>

<html lang="en">


    @extends('front_view.components.head')
    <!-- end head -->
    <!--body start-->
    <body style="background-image: url({{ asset('assets/images/floral_bg.jpg') }});">

    <!-- preloader -->
    <div class="preloader">
        <div class="status">
            <h1>Book Hall</h1>
        </div>
    </div>
    <!-- end preloader -->

    {{-- @extends('front_view.components.header') --}}


    <!-- =============================
       *
       *   Page Content Start
       *
      =============================== -->

    <main id="body-content">

        <div class="login-form-content d-flex justify-content-around align-items-center" style="height: 100vh">
            <div class="login-content d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('assets/images/rings.png') }}" width="200" alt="rings">
                <h2 style="color: #00aeaf; font-size: 3rem;" class="m-0" >Be a Couple | Hall</h2>
            </div>
            <form class="bg-light p-5" action="{{ route('auth.register') }}" method="POST">
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
                    <div class="login-form-title p-3" style="display: none">
                        <h2 style="color: #00aeaf;" class="m-0" >Be a Couple | Hall</h2>
                    </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col text-center">
                            <div class="custom-control custom-radio custom-control-inline form-dark">
                                <input type="radio" id="dgest" name="role" value="couple" class="custom-control-input">
                                <label class="custom-control-label" for="dgest">Couple</label>
                            </div>
                        </div>
                        <div class="col text-center">
                            <div class="custom-control custom-radio custom-control-inline form-dark">
                                <input type="radio" id="owner" name="role" value="hall" class="custom-control-input">
                                <label class="custom-control-label" for="owner">Hall</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Username" required type="text" name="username" id="username2">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Password" required type="password" name="password" id="password1">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="First Name" required type="text" name="first_name" id="first-name">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Last Name" required type="text" name="last_name" id="last-name">
                </div>
                <div class="form-group">
                    <input class="form-control" required type="email" placeholder="Email Address" name="email" id="email">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-default btn-rounded mt-3 mb-2">Register</button><br>
                    <a class="text-info" href="{{ route('auth.login.show') }}">Already have an account!</a>
                </div>
            </form>
        </div>

    </main>

    {{-- @extends('front_view.components.footer') --}}

    <!-- All The JS Files
      ================================================== -->
        @extends('front_view.components.scripts')
</body>

<!-- Mirrored from wporganic.com/html/weddingdir/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:28:23 GMT -->
</html>

