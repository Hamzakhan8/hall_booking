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
                <h2 style="color: #00aeaf; font-size: 3rem;" class="m-0" >Forget Password</h2>
            </div>
            <form class="bg-light p-5" action="{{ route('auth.forget.password.store') }}" method="POST">
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
                    @elseif (Session::has('password_updated'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ Session::get('password_updated')}}</strong>
                    </div>
                @endif
                <div class="login-form-title p-3" style="display: none">
                    <h2 style="color: #00aeaf;" class="m-0" >Forget password</h2>
                </div>
                @isset($user)
                    <input type="hidden" name="email" value="{{ $user }}">
                @endisset
                <div class="form-group">
                    <input type="password" required class="form-control" name="password" id="exampleInputEmail1" placeholder="New password">
                </div>
                <div class="form-group">
                    <input type="password" required class="form-control" name="password_confirmation" id="exampleInputPassword1" placeholder="Confirm password">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary mb-3">Submit</button><br>
                    <a class="text-info" href="{{ route('auth.login.show') }}">Login!</a>
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

