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
                <h2 style="color: #00aeaf; font-size: 3rem;" class="m-0" >Login as Couple | Hall</h2>
            </div>
            <form class="bg-light p-5" action="{{ route('auth.login') }}" method="POST">
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
                @elseif (Session::has('login_error'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ Session::get('login_error') }}</strong>
                </div>
                @elseif (Session::has('now_login'))
                <div class="alert alert-success" role="alert">
                    <strong>{{ Session::get('now_login') }}</strong>
                </div>
                @elseif (Session::has('pass_error'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ Session::get('pass_error') }}</strong>
                </div>
                @endif
                <div class="login-form-title p-3" style="display: none">
                    <h2 style="color: #00aeaf;" class="m-0" >Login as Couple | Hall</h2>
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="username" id="exampleInputEmail1" placeholder="Username/Email">
                </div>
                <div class="form-group">
                    <input type="password" required class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-default btn-rounded mt-3 mb-2">Login</button><br>
                    <a class="text-info" href="{{ route('auth.register.show') }}">Do not have an account!</a><br>
                    <a class="text-info" data-target="#my-modal" data-toggle="modal" style="cursor: pointer !important" >Forget password!</a>

                </div>
                <div class="form-group">
                </div>
            </form>

            <div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="my-modal-title">Forget passwrod</h5>

                        </div>
                        <div class="modal-body">
                         <form action="{{ route('auth.forget.password') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" required class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="submit" required class="form-control btn btn-success" value="submit">
                            </div>
                         </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>

    {{-- @extends('front_view.components.footer') --}}

    <!-- All The JS Files
      ================================================== -->
        @extends('front_view.components.scripts')
</body>

<!-- Mirrored from wporganic.com/html/weddingdir/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:28:23 GMT -->
</html>

