
<script>
    function halamanAboutUs() {
        event.preventDefault();
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            console.log(this.status);
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("loading").innerHTML = ''; // hide loading b4 load konten
                document.getElementById('konten').innerHTML = this.responseText;
            } else {}
        };
        document.getElementById("loading").innerHTML =
            '<div class="loader_bg"><div class="loader"></div></div>'; // Set here the image before sending request
        xhttp.open("GET", "/getPricing", true);
        xhttp.send();
    }

    function routeToPricing() {
        event.preventDefault();
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("loading").innerHTML = ''; // hide loading b4 load konten
                document.getElementById('konten').innerHTML = this.responseText;
            } else {

            }
        };
        document.getElementById("loading").innerHTML =
            '<div class="loader_bg"><div class="loader"></div></div>'; // Set here the image before sending request
        xhttp.open("GET", "/getPricing", true);
        xhttp.send();
    }

</script>
<!-- latest jquery-->
<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- Sidebar jquery-->
<!-- <script src="../assets/js/sidebar-menu.js"></script> -->
<script src="{{asset('assets/js/config.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl-custom.js')}}"></script>
<script src="{{asset('assets/js/landing_sticky.js')}}"></script>
<script src="{{asset('assets/js/landing.js')}}"></script>
<script src="{{asset('assets/js/jarallax_libs/libs.min.js')}}"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}"></script>
<!-- login js-->
<!-- Plugin used-->
