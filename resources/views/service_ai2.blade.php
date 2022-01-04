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
<section class="section-pb-space" style="background: linear-gradient(to top, rgb(58,175,169,0.959), rgb(58,175,169,0.959)), url('raw/anim.gif') no-repeat top center; background-size: cover;" id="home">
    {{-- <img class="img-fluid cas" style="background-color:rgba(0, 0, 0, 0.5);" src="../raw/anim.gif" alt=""> --}}
    <div class="container-fluid" id="background">
    <div class="row flex wrap">
        <div class="col-12" style="margin-top: 8%">
            <u style="color: white"><h3 class="text-center" style="color: white;">Services</h3></u>
        </div>
    </div>
    <div class="row flex wrap">
        <div class="col-md-6 p-3" style="margin-top: 3%;">
            <div style="margin-left: 7%;color: white">
                <h1 style="color: rgb(250, 245, 245);font-size: 48px">Work smarter and automatically</h1>
                <p class="sub" style="line-height: 2;">Predict your future business growth with our numerical prediction, multi classification, or NLP (Neuro Linguistic Programming) model. We can extract data from social media, website or articles for your prediction needs such as sentiment analysis and more. Our AI system is robust, automated with unlimited scalability, saving you time and money.
                </p>
                {{-- <p class="sub" style="line-height: 2;">You might be using your staff for a simple task such as social media comments like judging “ I like this shop ❤️ because products are cheap !! “.  This is a positive, price.</p>
                <p class="sub" style="line-height: 2;">With a large data, we can create a custom AI model. Your staff might take 1 month but AI can do the same task in 1 second!!</p>
                <p class="sub" style="line-height: 2;">Another example is predicting numbers. For example, as a real state agent, you want to know the market price range of 3 bedroom, 100 sqm building area house in district A,  this AI custom model provide instantly the answer.</p>
                <p class="sub" style="line-height: 2;">Using a human analyst would be time consuming and inaccurate – so why bother doing it at all when AI can automate the task for you.
                </p> --}}
            </div>
        </div>
        <div class="col-md-6" style="margin-top: 3%;">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.507);  border:0; border-radius: 15px;">
                <div class="card-body">
                    <img src="{{asset('image/ai2.svg')}}" width="100%" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<div class="container-fluid" style="background-color: #DEF1F0">
    <div class="row" style="padding: 3%">
            <div class="col-md-6">
                <div class="card shadow shadow-showcase" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                    <iframe width="100%" height="350" src="https://www.youtube.com/embed/8zQqiMryK-A" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div style="margin-left: 15%; margin-top: 0%">
                    <ul>
                        <li>
                            <p class="service1-text" class="service1-text"><b>Cut off the manual work and saving money for your business</b></p>
                        </li>
                        <li>
                            <p class="service1-text">
                                You might be using your staff for a simple task such as social media comments like judging “ I like this shop ❤️ because products are cheap !! “.  This is a positive, price.
                            </p>
                        </li>
                        <li>
                            <p class="service1-text">With a large data, we can create a custom AI model. Your staff might take 1 month but AI can do the same task in 1 second!!
                            </p>
                        </li>
                        <li>
                            <p class="service1-text">Another example is predicting numbers.
                                For example, as a real state agent, you want to know the market price range of 3 bedroom, 100 sqm building area house in district A,  this AI custom model provide instantly the answer.<p>
                        </li>
                        <li>
                            <p class="service1-text">Using a human analyst would be time consuming and inaccurate – so why bother doing it at all when AI can automate the task for you.</p>
                        </li>
                    </ul>
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
