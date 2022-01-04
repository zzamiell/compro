<!-- header start-->
<style>
 ul {
        padding: 0;
        list-style: none;
        /* background: #f2f2f2; */
    }

    ul li {
        display: inline-block;
        position: relative;
        line-height: 21px;
        text-align: left;
    }
    ul li a {
        display: block;
        padding: 8px 25px;
        color: #333;
        text-decoration: none;
    }
    ul li a:hover {
        color: #2B7A77;
        /* background: #939393; */
    }
    ul li ul.dropdown {
        min-width: 100%; /* Set width of the dropdown */
        background: #f2f2f2;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
    }
    ul li:hover ul.dropdown {
        display: block; /* Display the dropdown */
    }
    ul li ul.dropdown li {
        display: block;
    }

    .dropdown-menu {
    width: 220% !important;
    height: auto !important;
}

.dropdown-menu-company {
    width: 150px !important;
    height: auto !important;
}

.sub1:hover {
    opacity: 0.5;
   background-color: #a8f1ed59;
}
</style>
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<header class="landing-header">
    <div class="custom-container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-light p-0" id="navbar-example2"><a class="navbar-brand" href="javascript:void(0)">
                        <img class="img-fluid" src="{{asset('raw/logo.png')}}" style="" id="footnya" width="90" alt=""></a>
                    <ul class="landing-menu nav nav-pills">
                        <li class="nav-item menu-back">back<i class="fa fa-angle-right"></i></li>
                        <li class="nav-item"><a class="nav-link @if(Request::segment(1) == '') active @else '' @endif" href="{{route('home')}}">Home</a></li>
                        <li class="nav-item onhover-dropdown"><a class="nav-link dropbtn  @if(Request::segment(1) == 'service_ai' || Request::segment(1) == 'service_dataextraction') active @else '' @endif" href="#">Services</a>
                            <ul class="dropdown dropdown-menu" style="border:0; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; box-shadow: 2px 2px 3px #999; background-color: white;">
                                <li><a href="{{route('service_ai')}}" class="sub1 nav-link @if(Request::segment(1) == 'service_ai') active @else '' @endif" style="color: #3AAFA9; border-bottom: 1px solid #3AAFA9; border-top: 1px solid #3AAFA9;">Analysis & Business Inteligence</a></li>
                                <li><a href="{{route('service_ai2')}}" class="sub1 nav-link @if(Request::segment(1) == 'service_ai2') active @else '' @endif" style="color: #3AAFA9; border-bottom: 1px solid #3AAFA9; ">AI Service</a></li>
                                <li><a href="{{route('service_dataextraction')}}" class="sub1 nav-link @if(Request::segment(1) == 'service_dataextraction') active @else '' @endif" style="color: #3AAFA9;">Data Extraction Service</a></li>
                              </ul>
                        </li>
                        <li class="nav-item onhover-dropdown"><a class="nav-link dropbtn  @if(Request::segment(1) == 'service_hargapedia') active @else '' @endif" href="#">Product</a>
                            <ul class="dropdown dropdown-menu-company" style="border:0; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; box-shadow: 2px 2px 3px #999; background-color: white;">
                                <li><a href="{{route('service_hargapedia')}}" class="sub1 nav-link @if(Request::segment(1) == 'service_hargapedia') active @else '' @endif" style="color: #3AAFA9; border-bottom: 1px solid #3AAFA9;">Hargapedia</a></li>
                            </ul>
                        </li>

                        <li class="nav-item onhover-dropdown"><a class="nav-link dropbtn  @if(Request::segment(1) == 'aboutus' || Request::segment(1) == 'contactus') active @else '' @endif" href="#">Company</a>
                            <ul class="dropdown dropdown-menu-company" style="border:0; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; box-shadow: 2px 2px 3px #999; background-color: white;">
                                <li><a href="{{route('aboutus')}}" class="sub1 nav-link @if(Request::segment(1) == 'aboutus') active @else '' @endif" style="color: #3AAFA9; border-bottom: 1px solid #3AAFA9;">About Us</a></li>
                                <li><a href="{{route('contactus')}}" class="sub1 nav-link @if(Request::segment(1) == 'contactus') active @else '' @endif" style="color: #3AAFA9; border-bottom: 1px solid #3AAFA9; ">Contact Us</a></li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item"><a class="nav-link @if(Request::segment(1) == 'service_hargapedia') active @else '' @endif" href="{{route('service_hargapedia')}}">Product</a></li> --}}
                    </ul>
                    <div class="buy-block">
                        <div class="toggle-menu"><i class="fa fa-bars"></i></div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<script>
    $('.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
      }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>
<!--home section start-->
