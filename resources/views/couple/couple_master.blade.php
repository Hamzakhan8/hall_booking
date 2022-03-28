
<!DOCTYPE html>

<html lang="en">
  

    @extends('couple.components.head')
    <!-- end head -->
    <!--body start-->
    <body class="open">

    <!-- preloader -->
    <div class="preloader">
        <div class="status">
            <img src="{{ asset('assets') }}/images/logo_light.svg" alt="">
        </div>
    </div>
    <!-- end preloader -->

    @extends('couple.components.navbar')
    @extends('couple.components.sidebar')


   <div class="body-content">
    <div class="main-contaner">
               
            @yield('content')
    
    </div>
    {{-- <footer>
    @extends('couple.components.footer')
</footer> --}}
</div>
</main>
    <!-- All The JS Files
      ================================================== -->
      @extends('couple.components.script')
</body>
</html>
