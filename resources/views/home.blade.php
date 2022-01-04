@section('content')
<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<style>
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');

        .loader_bg {
            position: fixed;
            z-index: 999999;
            background: #fff;
            width: 100%;
            height: 100%;
        }

        .loader {
            border: 0 soild transparent;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            position: absolute;
            top: calc(50vh - 75px);
            left: calc(50vw - 75px);
        }

        .loader:before,
        .loader:after {
            content: '';
            border: 1em solid #ff5733;
            border-radius: 50%;
            width: inherit;
            height: inherit;
            position: absolute;
            top: 0;
            left: 0;
            animation: loader 2s linear infinite;
            opacity: 0;
        }

        .loader:before {
            animation-delay: .5s;
        }

        @keyframes loader {
            0% {
                transform: scale(0);
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                transform: scale(1);
                opacity: 0;
            }
        }




        * {
            margin: 0;
            padding: 0;
        }

        @media only screen and (max-width: 1026px) {

            #large {
                display: block;
            }

            #small {
                display: block;
            }
        }

        .for-text{
        text-align: justify;
        text-justify: inter-word;
        /* display:inline-block; */
        width: 80%;
    }
    </style>
<section class="landing-home section-pb-space mt-3" id="home"><img class="img-fluid bg-img-cover" src="{{asset('logo/bg.jfif')}}" alt="">
    <div class="custom-container">
        <div class="row flex wrap">
            <div class="col-md-7" style="margin-top: 17%">
                    <div id="large">
                        <h1 style="color: white;font-size: 56px">Welcome to the</h1>
                        <h1 style="color: white;font-size: 56px">Asia Research Institute </h1>
                        <p class="for-text" style="color: white;font-size: 16px; line-height: 2.5;">We are a team of data scientists and AI experts, specialized
                            in web data extraction and analysis. We use proprietary techniques to extract
                            all web data from a target domain and then use our AI algorithms to turn that
                            into informative, actionable Intel.</p>
                        <a class="btn btn-lg" style="background: #3AAFA9; color: white" href="index.html"
                            target="_blank">More</a>
                    </div>
            </div>
            <div class="col-md-5" id="fadeshow1" style="margin-top: 11%">
                <div>
                    <div class="card" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                        <div class="card-body">
                            <div class="owl-carousel owl-theme" id="slideshow">
                                <div class="item">
                                    <h3 class="text-center" style="color: #3AAFA9">Analysis & Business
                                        Inteligence (AI)</h3>
                                    <ul class="mt-3" style="font-size: 12px">
                                        <li>
                                            Cut off the manual work and saving money for your business.
                                        </li>
                                        <li>
                                            Assisting the various business units more easy. We can be your
                                            discussion partner to plan, strategise, and grow business by
                                            enabling data-driven decision-making
                                        </li>
                                        <li>
                                            Having trouble understanding your business? We can simplify
                                            complex terminology into easier-to-understand insights.
                                        </li>
                                        <li>
                                            An interactive dashboard to make you easier to control and
                                            manage your business data.
                                        </li>
                                        <li>
                                            We provide you with a product of actionable insights to use to
                                            support or develop new strategies
                                        </li>
                                        <li>
                                            Make fun with big data. We developing reports and analysis using
                                            relevant stack (Tableau, Excel, Python, etc).
                                        </li>
                                    </ul>

                                </div>
                                <div class="item">
                                    <h3 class="text-center" style="color: #3AAFA9">Data Extraction Service
                                    </h3>
                                    <ul class="mt-3" style="font-size: 12px">
                                        <li>
                                            Extract web data at scale without getting banned
                                            Copy-paste manually into an excel spreadsheet can be a hassle,
                                            you need automation.
                                            Our data extraction expert will build and maintain the ideal
                                            data for you.
                                            Give us the URL of the website and the detail of the project and
                                            we will send back the good quality data for you.
                                            The ASIA RESEARCH INSTITUTE provides data extraction service for
                                            your company without getting banned. We offer data quality
                                            monitoring, recruitment, market research, and social media data
                                            services to help in good decision making.
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <h3 class="text-center" style="color: #3AAFA9">Hargapedia</h3>
                                    <ul class="mt-3" style="font-size: 12px">
                                        <li>
                                            Find your dream house Find the right house for you. ASIA
                                            RESEARCH INSTITUTE has an AI-powered algorithm that calculates
                                            the right price for your desired location.
                                        </li>
                                        <li>
                                            AI-powered data Our AI uses complex algorithms to analyze "all"
                                            data that are related to house prices in Indonesia (such as
                                            population, GDP, etc.). It then makes an informed decision on
                                            how much you should pay for a property.
                                        </li>
                                        <li>
                                            Covers all regions We cover all regions in Indonesia, which also
                                            means we cover the whole country. You can be sure that you'll
                                            get up-to-date figures on the right price for your area. This
                                            way, no matter where you want to live, we can help you find the
                                            price of house there!
                                        </li>
                                        <li>
                                            Easy to use We know how frustrating it can be to find out what
                                            your house is worth. That's why our interface is so easy to use
                                            - just enter the location and other detail of houses do you need
                                            and you'll get a quote in seconds!
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--
<div class="container-fluid" style="background-color: #DEF1F0">
    <div class="row" style="margin-left: 3%">
        <h1><b>Pricing</b></h1>
    </div>
    <div class="row" style="padding: 3%">
        <div class="col-md-3 p-1 p-1">
            <div class="pricing-block card text-center shadow shadow-showcase" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                <div class="pricing-header">
                  <h2>standard</h2>
                  <div class="price-box">
                    <div>
                      <h3>$10</h3>
                      <p>/ month</p>
                    </div>
                  </div>
                </div>
                <div class="pricing-list">
                  <ul class="pricing-inner">
                    <li>
                      <h6>50GB<span> Disk Space</span></h6>
                    </li>
                    <li>
                      <h6>50<span> Email Accounts</span></h6>
                    </li>
                    <li>
                      <h6>50GB<span> Bandwidth</span></h6>
                    </li>
                    <li>
                      <h6>10<span> Subdomains</span></h6>
                    </li>
                    <li>
                      <h6>15<span> Domains</span></h6>
                    </li>
                  </ul>
                  <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                </div>
              </div>
          </div>
          <div class="col-md-3 p-1">
            <div class="pricing-block card text-center shadow shadow-showcase" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
              <div class="pricing-header">
                <h2>business</h2>
                <div class="price-box">
                  <div>
                    <h3>$20</h3>
                    <p>/ month</p>
                  </div>
                </div>
              </div>
              <div class="pricing-list">
                <ul class="pricing-inner">
                  <li>
                    <h6>60GB<span> Disk Space</span></h6>
                  </li>
                  <li>
                    <h6>60<span> Email Accounts</span></h6>
                  </li>
                  <li>
                    <h6>60GB<span> Bandwidth</span></h6>
                  </li>
                  <li>
                    <h6>15<span> Subdomains</span></h6>
                  </li>
                  <li>
                    <h6>20<span> Domains</span></h6>
                  </li>
                </ul>
                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-1">
            <div class="pricing-block card text-center shadow shadow-showcase" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
              <div class="pricing-header">
                <h2>PREMIUM </h2>
                <div class="price-box">
                  <div>
                    <h3>$30</h3>
                    <p>/ month</p>
                  </div>
                </div>
              </div>
              <div class="pricing-list">
                <ul class="pricing-inner">
                  <li>
                    <h6>70GB<span> Disk Space</span></h6>
                  </li>
                  <li>
                    <h6>70<span> Email Accounts</span></h6>
                  </li>
                  <li>
                    <h6>70GB<span> Bandwidth</span></h6>
                  </li>
                  <li>
                    <h6>25<span> Subdomains</span></h6>
                  </li>
                  <li>
                    <h6>30<span> Domains</span></h6>
                  </li>
                </ul>
                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
              </div>
            </div>
            </div>
            <div class="col-md-3">
                <div class="pricing-block card text-center shadow shadow-showcase" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                  <div class="pricing-header">
                    <h2>auther pack</h2>
                    <div class="price-box">
                      <div>
                        <h3>$40</h3>
                        <p>/ month</p>
                      </div>
                    </div>
                  </div>
                  <div class="pricing-list">
                    <ul class="pricing-inner">
                      <li>
                        <h6>80GB<span> Disk Space</span></h6>
                      </li>
                      <li>
                        <h6>80<span> Email Accounts</span></h6>
                      </li>
                      <li>
                        <h6>80GB<span> Bandwidth</span></h6>
                      </li>
                      <li>
                        <h6>25<span> Subdomains</span></h6>
                      </li>
                      <li>
                        <h6>30<span> Domains</span></h6>
                      </li>
                    </ul>
                    <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                  </div>
                </div>
              </div>
          </div>
</div>
<div class="container-fluid" style="background-color: #DEF1F0">
    <div class="row" style="margin-left: 3%">
        <h1><b>Need Help ?</b></h1>
    </div>
    <div class="row" style="padding: 3%">
        <div class="col-md-6">
            <img src="{{asset('image/faq.svg')}}" width="70%" class="img-fluid" alt="">
        </div>

            <div class="col-md-6" style="margin-top: 3%">
                    <div class="card shadow shadow-showcase" style="background-color: #DEF1F0; border:0; border-radius: 15px;">
                    <div class="card-body" style="background: linear-gradient(to top, rgba(58, 175, 169, 0.959), rgb(58,175,169,0.959)), url('raw/anim.gif') no-repeat top center; background-size: cover;border:0; border-radius: 15px;">
                        <div class="text-center">
                            <h1><b>Informasi Lebih Lanjut</b></h1>
                            <p>Saatnya menikmati hidup Anda dengan bantuan fitur-fitur dari Jago. Bertransaksi dengan mudah hanya dalam beberapa langkah.
                                Kunjungi halaman FAQ untuk info lebih lanjut.</p>
                                <button class="btn btn-primary">LIHAT FAQ</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div> --}}
<script type="text/javascript">
$( document ).ready(function() {
    console.log( "ready!" );
    $("#slideshow").owlCarousel({
        items: 1,
        margin: 10,
        autoHeight: true,
        stopOnHover : false,
        autoplay: true,
        autoplayTimeout: 3000,
        loop: true
      })
});
</script>
@endsection
