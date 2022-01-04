@section('content')
<style>
    .sub{
        font-size: 18px;
        text-align: justify;
        text-justify: inter-word;
    }

    .service1-text{
        color: #2B7A77;
        text-align: justify;
        text-justify: inter-word;
    }

    .service1{
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }

    .pos-ribbon{
        right: -1px;
        left: auto;
        bottom: 50px;
        top: auto; }
    }

    #background{
    height: 100vh;
    width: 100%;
    color: white;
    font: bold 6.5em/2em monospace;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(to top, #3204fdba, #9907facc), url(https://picsum.photos/1280/853/?random=1) no-repeat top center;
    }
</style>
{{-- {{dd(url('raw/anim.gif'))}} --}}
<section class="landing-home section-pb-space" style="background: linear-gradient(to top, rgba(58, 175, 169, 0.959), rgb(58,175,169,0.959)), url('raw/anim.gif') no-repeat top center; background-size: cover;" id="home">
    {{-- <img class="img-fluid cas" style="background-color:rgba(0, 0, 0, 0.5);" src="../raw/anim.gif" alt=""> --}}
    <div class="container-fluid" id="background">
    <div class="row">
        <div class="col-12" style="margin-top: 8%">
            <u style="color: white"><h3 class="text-center" style="color: white;">Services</h3></u>
        </div>
    </div>
    <div class="row flex wrap">
        <div class="col-md-6 p-3" style="margin-top: 3%;">
            <div style="margin-left: 7%;color: white">
                <h1 style="color: white;font-size: 48px">Analysis & Business Intelligence</h1>
                <h1 style="color: rgb(247, 236, 236);font-size: 15px"><b><u>Get a team of research experts with expertise in a wide range of industries.</u></b></h1>
                {{-- <p class="sub" style="line-height: 2;">ARI AIText is a powerful and intuitive text analysis solution that will help you turn raw data into useful information. It works with any type of document and its full-text search capabilities make it ideal for use as a quick reference tool for business documents. Using a human analyst would be time consuming and inaccurate – so why bother doing it at all when AIText can automate the task for you.</p> --}}
                <p class="sub" style="line-height: 2;">We work together with our clients to provide them with cleaned data, detailed reports and analysis that would be both understandable and interactive.
                    We're experienced in understanding your needs. We provide clear and concise insights that will help you make the right decisions for your business.</p>
            </div>
        </div>
        <div class="col-md-6" style="margin-top: 5%;">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.507);  border:0; border-radius: 15px;">
                <div class="card-body">
                    <img src="{{asset('image/ai.svg')}}" width="100%" class="img-fluid" alt="">
                </div>
            </div>
                {{-- <div class="text-center">
                    <img src="{{asset('logo/ai.png')}}" width="35%" class="img-fluid p-3" alt="" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                    <img src="{{asset('logo/kanan.png')}}" width="7%" class="img-fluid" alt="" style="float: right; margin-top: 15%;">
                </div> --}}
                {{-- <div class="text-right"> --}}
                {{-- </div> --}}
        </div>
    </div>
</div>
</section>
<div class="container-fluid" style="background-color: #DEF1F0">
    <div class="row" style="padding: 3%">
            <div class="col-md-6">
                <div class="card shadow shadow-showcase" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                        <img class="img-fluid" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;" src="{{asset('logo/service_ai.png')}}" alt="">
                        <div class="ribbon pos-ribbon" style="background-color: #3AAFA9">An Interactive Dashboard</div>
                </div>
            </div>
            <div class="col-md-6">
                <div style="margin-left: 15%; margin-top: 5%">
                    <ul>
                        <li>
                            <p class="service1-text" class="service1-text"><b>Cut off the manual work and saving money for your business</b></p>
                        </li>
                        <li>
                            <p class="service1-text">
                                Making a chart using MS Excel? If your boss asked to drill down the chart, you cannot answer right away.
                            </p>
                        </li>
                        <li>
                            <p class="service1-text">Business Intelligence software Professional of ARI can create an interactive dashboard.</p>
                        </li>
                        <li>
                            <p class="service1-text">Our interactive dashboards make it easy for you to manage billions of data with just a light touch.<p>
                        </li>
                        <li>
                            <p class="service1-text">We can provide visualization of your data with simple data management including our various interactive dashboard features.</p>
                        </li>
                        <li>
                            <p class="service1-text">Such as maps, graphics, and anything that can support your business.</p>
                        </li>
                        {{-- <li>
                            <p class="service1-text" class="service1-text">Cut off the manual work and saving money for your business</p>
                        </li>
                        <li>
                            <p class="service1-text">
                                Assisting the various business units more easy. We can be your discussion partner to plan, strategise, and grow business by enabling data-driven decision-making
                            </p>
                        </li>
                        <li>
                            <p class="service1-text">Having trouble understanding your business? We can simplify complex terminology into easier-to-understand insights.</p>
                        </li>
                        <li>
                            <p class="service1-text">An interactive dashboard to make you easier to control and manage your business data.</p>
                        </li>
                        <li>
                            <p class="service1-text">We provide you with a product of actionable insights to use to support or develop new strategies.</p>
                        </li>
                        <li>
                            <p class="service1-text">Make fun with big data. We developing reports and analysis using relevant stack (Tableau, Excel, Python, etc).</p>
                        </li> --}}
                    </ul>
                </div>
            </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #DEF1F0; border:0; border-radius: 15px;">
    <div class="row" style="margin-left: 3%">
        <h1><b>Watch Our Video</b></h1>
    </div>
    <div class="row" style="padding: 3%">
            {{-- <div class="col-md-6">
                <div class="card shadow shadow-showcase" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                        <iframe width="100%" height="345" src="https://www.youtube.com/embed/REBM8PU57Y0" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;"></iframe>
                </div>
            </div> --}}
            <div class="col-md-6">
                <div class="card shadow shadow-showcase" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                        <iframe width="100%" height="300" src="https://www.youtube.com/embed/8zQqiMryK-A" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow shadow-showcase" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                    <div class="row">
                        <div class="col-6 p-5 mt-2">
                            <h1><b>GET</b></h1>
                            <h1><b>MORE</b></h1>
                            <h1><b>VIDEOS ?</b></h1>
                        </div>
                        <div class="col-6 p-2">
                            <img width="100%" src="{{asset('image/joging.svg')}}" alt="">
                            <button class="btn btn-primary mt-2" style="margin-left: 20%">Get More Videos</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #DEF1F0">
    <div class="row" style="margin-left: 3%">
        <h1><b>Pricing</b></h1>
    </div>
    <div class="row" style="padding: 3%">
        <div class="col-md-3 p-1 p-1">
            <div class="pricing-block card text-center shadow shadow-showcase" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                <div class="pricing-header">
                  <h2 style="font-weight:bold; font-size: 23px;">Simple</h2>
                  <div class="price-box">
                    <div>
                      <h4 style="color: white">$300</h4>
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
                <h2 style="font-size: 23px;font-weight:bold">Ordinal (Chaptcha)</h2>
                <div class="price-box">
                  <div>
                     <h4 style="color: white">$300</h4>
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
                <h2  style="font-size: 23px;font-weight:bold">Complex1 (Robot) </h2>
                <div class="price-box">
                  <div>
                    <h4 style="color: white">$1000</h4>
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
                    <h2 style="font-size: 22px; font-weight:bold">Complex2 (Captcha + Robot) </h2>
                    <div class="price-box">
                      <div>
                        <h4 style="color: white">$1200</h4>
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
            {{-- <div class="card" style="background-color: #DEF1F0;  border:0; border-radius: 15px;"> --}}
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
</div>


<script>
$(".theCover").parent().addClass('bg-size');
$('.theCover').each(function () {
    var el = $(this),
        src = el.attr('src'),
        parent = el.parent();
        parent.css({
        'background-image': 'url(' + src + ')',
        'background-size': 'cover',
        'background-position': 'center',
        'display': 'block',
    });
    el.hide();
});
</script>

@endsection
