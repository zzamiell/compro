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
        <div class="sub-footer" style="background-color: #2B7A77">
            <div class="custom-container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-contain"> <img class="img-fluid" style="color: #DEF1F0; backround-color: black; margin-top : 30%;" src="{{asset('raw/foot.png')}}" width="100" alt="">
                        </a></div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-contain">
                            <table style="line-height: 2.5; color:white;">
                                <tr style="font-size: 14px;font-family: 'Poppins'">
                                    <td>
                                        Home
                                    </td>
                                </tr>
                                <tr style="font-size: 14px;font-family: 'Poppins'">
                                    <td>
                                        About Us
                                    </td>
                                </tr>
                                <tr style="font-size: 14px;font-family: 'Poppins'">
                                    <td>
                                        Services
                                    </td>
                                </tr>
                                <tr style="font-size: 14px;font-family: 'Poppins'">
                                    <td>
                                        FAQs
                                    </td>
                                </tr>
                                <tr style="font-size: 14px;font-family: 'Poppins'">
                                    <td>
                                        Contact Us
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="footer-contain">
                            <table style="color: white">
                                <tr>
                                    <td style="font-size: 18px;"><span>FOLLOW US ON</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img style='vertical-align:middle;' height="40" src='{{asset('logo/ig.png')}}'>
                                        <img style='vertical-align:middle;' height="40"
                                            src='{{asset('logo/twitter.png')}}'>
                                        <img style='vertical-align:middle;' height="40"
                                            src='{{asset('logo/facebook.png')}}'>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="footer-contain">
                            <table>
                                <tr>
                                    <td>
                                        <p style="color: white; font-size: 18px;">SUBSCRIBE</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="color: white; font-size: 14px;">Subscribe to get the latest news,
                                            offers and exclusive promotions from Fit Iq</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group"
                                            style="box-shadow: 0 10px 30px 0 rgba(172, 168, 168, 0.43);" role="group"
                                            aria-label="Basic example">
                                            <button style="background-color: white; color: white;"
                                                class="btn btn-lg btn-block" type="button">Left</button>
                                            <button style="background-color: white; color: white;"
                                                class="btn btn-lg btn-block" type="button">Left</button>
                                            <button style="background-color: white; color: white;"
                                                class="btn btn-lg btn-block" type="button">Left</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
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

<script type='text/javascript'>
    (function(I, L, T, i, c, k, s) {if(I.iticks) return;I.iticks = {host:c, settings:s, clientId:k, cdn:L, queue:[]};var h = T.head || T.documentElement;var e = T.createElement(i);var l = I.location;e.async = true;e.src = (L||c)+'/client/inject-v2.min.js';h.insertBefore(e, h.firstChild);I.iticks.call = function(a, b) {I.iticks.queue.push([a, b]);};})(window, 'https://cdn-v1.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', 'WozaWo6ZB9d6mnm2d_c', {});
</script>

@include('master.script')

</html>
