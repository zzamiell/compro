<!DOCTYPE html>
<html lang="en">

@include('master.head')

<body class="landing-wrraper">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper landing-page">
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            @include('master.menu')
            @yield('content')
        <!--home section end-->
        <!--footer start-->
        <div class="sub-footer" style="background-color: white">
            <div class="custom-container">
              <div class="row">
                <div class="col-md-6 col-sm-2">
                  <div class="footer-contain"><img class="img-fluid" width="90" src="{{asset('raw/logo.png')}}" alt=""></div>
                </div>
                <div class="col-md-6 col-sm-10">
                  <div class="footer-contain">
                    <p class="mb-0 mt-3">Copyright 2021-22 © viho All rights reserved.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--footer end-->
    </div>
    </div>
    <!--demo section end-->
</body>

@include('master.script')

</html>
